<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guide extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/V_HeaderAdmin');
		$this->load->view('admin/V_Guide');
	}
}
