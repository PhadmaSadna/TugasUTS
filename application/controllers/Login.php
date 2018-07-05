<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		//Membuat kelas parent agar bisa digunakan di semua fungsi
		parent::__construct();
		//Load model dan helper
		$this->load->model('ModLogin');
		$this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		//Memanggil fungsi menampilkan semua tabel artikel
		$data['login']=$this->ModLogin->get_login();
		$this->load->view('admin/V_HeaderAdmin');
		$this->load->view('admin/login/V_Login', $data);
	}

	public function create_login(){
		//Meload helper form dan form valudasi
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('admin/V_HeaderAdmin');
			$this->load->view('admin/login/V_CreateLogin');
		}else {
                 $data['input'] = array(
                 	'username' => $this->input->post('username'),
                 	'password' => $this->input->post('password')
                 );
              	 //query tambah data
				 $this->ModLogin->set_login(0,$data['input']);
				 //kembali ke home
				 redirect('Login');
            }
        }


	public function edit_login(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		//Mengambil data dari model untuk di edit 

		//Mendapatkan key id dati Route
		$username = $this->uri->segment(3);
		//Mengambil data dari model dan di filter dan ditambahkan ke dalam array
		$data['show'] = $this->ModLogin->get_login_by_username($username);
		$data['username'] = $data['show']['username'];
		$data['password'] = $data['show']['password'];
		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('admin/V_HeaderAdmin');
			$this->load->view('admin/Login/V_EditLogin',$data);
		} else {
			 $data['input'] = array(
                 	'username' => $this->input->post('username'),
                 	'password' => $this->input->post('password')
                 );
			//query Edit data
			$this->ModLogin->set_login($username, $data['input']);
			//kembali ke home
			redirect('Login/');
		}	
	}
	public function delete(){
		$CustID = $this->uri->segment(3);
		$this->ModLogin->delete_article($username);
		redirect('Login','refresh');
	}
}
