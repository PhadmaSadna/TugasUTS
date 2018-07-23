<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if($this->session->userdata('logged_in') != TRUE){
            redirect('Auth/login');
        }
	}

	public function index(){
		if ($this->session->userdata('Level_ID') == 1) {
	    	$this->load->view('admin/Header');
			$this->load->view('admin/HomeAdmin');
	    } elseif ($this->session->userdata('Level_ID') == 2 || $this->session->userdata('Level_ID') == 3) {
	    	redirect('FrontEnd/');
	    } 
	}
}