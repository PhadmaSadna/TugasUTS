<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontEnd extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModTour');
		//$this->load->model('ModCust');
		//$this->load->model('ModGuide');
		$this->load->model('model');

		$this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
		$this->load->library('pagination');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$limit_per_page = 3;

		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

		// Dapatkan jumlah data 
		$total_records = $this->ModTour->get_total_tour();
		
		// Dapatkan data pada halaman yg dituju
		$data["paket"] = $this->ModTour->get_tour($limit_per_page, $start_index);
		
		// Konfigurasi pagination
		$config['base_url'] = base_url() . 'FrontEnd/index';
		$config['total_rows'] = $total_records;
		$config['per_page'] = $limit_per_page;
		$config["uri_segment"] = 3;
		
		$this->pagination->initialize($config);
			
		// Buat link pagination
		$data["links"] = $this->pagination->create_links();
		//$data['customer'] = $this->ModCust->generate_cust_dropdown();
		//$data['guide'] = $this->ModGuide->generate_guide_dropdown();
		$data['packages'] = $this->model->generate_packages_dropdown();
		$data['tour']=$this->ModTour->get_booking();
		
		$this->load->view('templates/Home', $data);
	}

	public function get_price(){
		$this->ModTour->get_price_by_id($Packages);
	}

	public function create_booking(){
		//Meload helper form dan form valudasi
		$this->load->helper('form');
		$this->load->library('form_validation');

		//memanggil list custId
		//$data['customer'] = $this->ModCust->generate_cust_dropdown();
		//$data['guide'] = $this->ModGuide->generate_guide_dropdown();
		$data['packages'] = $this->model->generate_packages_dropdown();

		//validasi inputan yang masuk
		$this->form_validation->set_rules('CustID', 'CustID', 'required');
		$this->form_validation->set_rules('GuideID', 'GuideID', 'required');
		$this->form_validation->set_rules('Packages', 'Packages', 'required');
		$this->form_validation->set_rules('StartDate', 'StartDate', 'required');

		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('templates/Home', $data, FALSE);
		}else {
			$packages = $this->ModTour->get_package($this->input->post('Packages'));
			$duration = $packages[0]['duration'];
			$harga = $packages[0]['harga'];

                 $data['input'] = array(
                 	'CustID' => $this->input->post('CustID'),
                 	'GuideID' => $this->input->post('GuideID'),
                 	'Packages' => $this->input->post('Packages'),
                 	'StartDate' => $this->input->post('StartDate'),
                 	'EndDate' => date('Y-m-d', strtotime($this->input->post('StartDate') . ' + ' . $duration . ' days')),
                 	'TotalPrice' => $harga
                 );
              	 //query tambah data
				 $this->ModTour->set_booking(0,$data['input']);
				 //kembali ke home
				 redirect('FrontEnd/index');
            }
        }

	public function get_harga() {
		$id= $this->input->post('id');

		$packages = $this->ModTour->get_package($id);

		echo $packages[0]['harga'];
	}
}
