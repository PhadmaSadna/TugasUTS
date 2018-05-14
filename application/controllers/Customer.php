<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		//Membuat kelas parent agar bisa digunakan di semua fungsi
		parent::__construct();
		//Load model dan helper
		$this->load->model('ModCust');
		$this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		//Memanggil fungsi menampilkan semua tabel artikel
		$data['customer']=$this->ModCust->get_article();
		$this->load->view('admin/V_HeaderAdmin');
		$this->load->view('admin/customer/V_Customer', $data);
	}

	public function C_create(){
		//Meload helper form dan form valudasi
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('CustName', 'CustName', 'required');
		$this->form_validation->set_rules('CustAddress', 'CustAddress', 'required');
		$this->form_validation->set_rules('CustPhone', 'CustPhone', 'required');
		$this->form_validation->set_rules('CustEmail', 'CustEmail', 'required');

		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('admin/V_HeaderAdmin');
			$this->load->view('admin/customer/C_create');
		}else {
                 $data['input'] = array(
                 	'CustName' => $this->input->post('CustName'),
                 	'CustAddress' => $this->input->post('CustAddress'),
                 	'CustPhone' => $this->input->post('CustPhone'),
                 	'CustEmail' => $this->input->post('CustEmail')
                 );
              	 //query tambah data
				 $this->ModCust->set_article(0,$data['input']);
				 //kembali ke home
				 redirect('Customer');
            }
        }


	public function C_edit(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('CustName', 'CustName', 'required');
		$this->form_validation->set_rules('CustAddress', 'CustAddress', 'required');
		$this->form_validation->set_rules('CustPhone', 'CustPhone', 'required');
		$this->form_validation->set_rules('CustEmail', 'CustEmail', 'required');
		//Mengambil data dari model untuk di edit 

		//Mendapatkan key id dati Route
		$CustID = $this->uri->segment(3);
		//Mengambil data dari model dan di filter dan ditambahkan ke dalam array
		$data['show_article'] = $this->ModCust->get_article_by_id($CustID);
		$data['CustID'] = $data['show_article']['CustID'];
		$data['CustName'] = $data['show_article']['CustName'];
		$data['CustAddress'] = $data['show_article']['CustAddress'];
		$data['CustPhone'] = $data['show_article']['CustPhone'];
		$data['CustEmail'] = $data['show_article']['CustEmail'];
		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('admin/V_HeaderAdmin');
			$this->load->view('admin/customer/C_edit',$data);
		} else {
			 $data['input'] = array(
                 	'CustName' => $this->input->post('CustName'),
                 	'CustAddress' => $this->input->post('CustAddress'),
                 	'CustPhone' => $this->input->post('CustPhone'),
                 	'CustEmail' => $this->input->post('CustEmail')
                 );
			//query Edit data
			$this->ModCust->set_article($CustID,$data['input']);
			//kembali ke home
			redirect('Customer/');
		}	
	}
	public function delete(){
		$CustID = $this->uri->segment(3);
		$this->ModCust->delete_article($CustID);
		redirect('Customer','refresh');
	}
}
