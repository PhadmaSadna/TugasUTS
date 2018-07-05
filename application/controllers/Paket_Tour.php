<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_Tour extends CI_Controller {

	public function __construct()
	{
		//Membuat kelas parent agar bisa digunakan di semua fungsi
		parent::__construct();
		//Load model dan helper
		$this->load->model('model');
		$this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		//Memanggil fungsi menampilkan semua tabel artikel
		$data['Paket_Tour']=$this->model->get_article();
		$this->load->view('admin/Header');
		$this->load->view('paket_tour/V_PaketTour', $data);
	}

	public function C_create(){
		//Meload helper form dan form valudasi
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('duration', 'duration', 'required');
		$this->form_validation->set_rules('loc', 'loc', 'required');
		$this->form_validation->set_rules('jadwal', 'jadwal', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');

		$config['upload_path'] = 'assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('admin/Header');
			$this->load->view('paket_tour/C_CreatePaket');
		} else {
			if (!$this->upload->do_upload('image')){
                $error = array('error' => $this->upload->display_errors());
                print_r($error); 
            } else {
            	 $data = array('upload_data' => $this->upload->data());
                 $data['input'] = array(
                 	'id' => $this->input->post('id'),
                 	'judul' => $this->input->post('judul'),
                 	'duration' => $this->input->post('duration'),
                 	'loc' => $this->input->post('loc'),
                 	'jadwal' => $this->input->post('jadwal'),
                 	'harga' => $this->input->post('harga'),
                 	'image' => $this->upload->data('file_name')
                 );
              	 //query tambah data
				 $this->model->set_article(0,$data['input']);
				 //kembali ke home
				 redirect('Paket_Tour');
            }
        }
    }


	public function C_edit(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('judul', 'judul', 'required');
		$this->form_validation->set_rules('duration', 'duration', 'required');
		$this->form_validation->set_rules('loc', 'loc', 'required');
		$this->form_validation->set_rules('jadwal', 'jadwal', 'required');
		$this->form_validation->set_rules('harga', 'harga', 'required');
		//Mengambil data dari model untuk di edit 

		//Mendapatkan key id dati Route
		$id = $this->uri->segment(3);
		//Mengambil data dari model dan di filter dan ditambahkan ke dalam array
		$data['show_article'] = $this->model->get_article_by_id($id);
		$data['id'] = $data['show_article']['id'];
		$data['judul'] = $data['show_article']['judul'];
		$data['duration'] = $data['show_article']['duration'];
		$data['loc'] = $data['show_article']['loc'];
		$data['jadwal'] = $data['show_article']['jadwal'];
		$data['harga'] = $data['show_article']['harga'];
		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('admin/Header');
			$this->load->view('paket_tour/E_paketTour',$data);
		} else {
			$config['upload_path'] = 'assets/img/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image')){
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            } else {
                $data = array('upload_data' => $this->upload->data());

				$data['input'] = array(
	                 	'judul' => $this->input->post('judul'),
	                 	'duration' => $this->input->post('duration'),
	                 	'loc' => $this->input->post('loc'),
	                 	'jadwal' => $this->input->post('jadwal'),
	                 	'harga' => $this->input->post('harga'),
	                 	'image' => $this->upload->data('file_name')
	                 );
				//query Edit data
				$this->model->set_article($id,$data['input']);
				//kembali ke home
				redirect('Paket_Tour/');
			}
		}	
	}
	
	public function delete(){
		$id = $this->uri->segment(3);
		$this->model->delete_article($id);
		redirect('Paket_Tour','refresh');
	}
}
