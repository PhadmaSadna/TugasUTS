<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lombar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('modtour');
		$this->load->library('pagination');
	}
	public function index()
	{
		$limit_per_page = 3;

		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

		// Dapatkan jumlah data 
		$total_records = $this->modtour->get_total_tour();
		
		// Dapatkan data pada halaman yg dituju
		$data["paket"] = $this->modtour->get_tour($limit_per_page, $start_index);
		
		// Konfigurasi pagination
		$config['base_url'] = base_url() . 'Lombar/index';
		$config['total_rows'] = $total_records;
		$config['per_page'] = $limit_per_page;
		$config["uri_segment"] = 3;
		
		$this->pagination->initialize($config);
			
		// Buat link pagination
		$data["links"] = $this->pagination->create_links();
		// print_r($data['paket']->result());
		// echo $data['links'];
		$this->load->view('V_Header');
		$this->load->view('lombar', $data);
		$this->load->view('V_Footer');
	}
}
