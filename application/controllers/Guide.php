<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guide extends CI_Controller {

	public function __construct()
	{
		//Membuat kelas parent agar bisa digunakan di semua fungsi
		parent::__construct();
		//Load model dan helper
		$this->load->model('ModGuide');
		$this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data['guide']=$this->ModGuide->get_article();
		$this->load->view('admin/V_HeaderAdmin');
		$this->load->view('admin/guide/V_Guide', $data);
	}

	public function G_create(){
		//Meload helper form dan form valudasi
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('GuideName', 'GuideName', 'required');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('GuidePhone', 'GuidePhone', 'required');
		$this->form_validation->set_rules('GuideEmail', 'GuideEmail', 'required');

		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('admin/V_HeaderAdmin');
			$this->load->view('admin/guide/G_create');
		}else {
                 $data['input'] = array(
                 	'GuideName' => $this->input->post('GuideName'),
                 	'Gender' => $this->input->post('Gender'),
                 	'GuidePhone' => $this->input->post('GuidePhone'),
                 	'GuideEmail' => $this->input->post('GuideEmail')
                 );
              	 //query tambah data
				 $this->ModGuide->set_article(0,$data['input']);
				 //kembali ke home
				 redirect('Guide');
            }
        }


	public function G_edit(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('GuideName', 'GuideName', 'required');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('GuidePhone', 'GuidePhone', 'required');
		$this->form_validation->set_rules('GuideEmail', 'GuideEmail', 'required');
		//Mengambil data dari model untuk di edit 

		//Mendapatkan key id dati Route
		$GuideID = $this->uri->segment(3);
		//Mengambil data dari model dan di filter dan ditambahkan ke dalam array
		$data['show_article'] = $this->ModGuide->get_article_by_id($GuideID);
		$data['GuideID'] = $data['show_article']['GuideID'];
		$data['GuideName'] = $data['show_article']['GuideName'];
		$data['Gender'] = $data['show_article']['Gender'];
		$data['GuidePhone'] = $data['show_article']['GuidePhone'];
		$data['GuideEmail'] = $data['show_article']['GuideEmail'];
		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('admin/V_HeaderAdmin');
			$this->load->view('admin/guide/G_edit',$data);
		} else {
			 $data['input'] = array(
                 	'GuideName' => $this->input->post('GuideName'),
                 	'Gender' => $this->input->post('Gender'),
                 	'GuidePhone' => $this->input->post('GuidePhone'),
                 	'GuideEmail' => $this->input->post('GuideEmail')
                 );
			//query Edit data
			$this->ModGuide->set_article($GuideID,$data['input']);
			//kembali ke home
			redirect('Guide/');
		}	
	}
	public function delete(){
		$GuideID = $this->uri->segment(3);
		$this->ModGuide->delete_article($GuideID);
		redirect('Guide','refresh');
	}
}
