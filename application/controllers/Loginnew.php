<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginnew extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
}
