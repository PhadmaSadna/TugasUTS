<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackEnd extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/Header');
		$this->load->view('admin/HomeAdmin');
	}
}
