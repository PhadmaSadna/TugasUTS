<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('ModUser');

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

	public function get_customer() {
		$data['customer']=$this->ModUser->get_user_customer();
		$this->load->view('admin/Header');
		$this->load->view('customer/V_Customer', $data);
	}

	public function get_guide() {
		$data['guide']=$this->ModUser->get_user_guide();
		$this->load->view('admin/Header');
		$this->load->view('guide/V_Guide', $data);
	}

	public function create_customer(){
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('Level_ID', 'Level_ID', 'required');
		$this->form_validation->set_rules('FullName', 'FullName', 'required');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('Phone', 'Phone', 'required');
		$this->form_validation->set_rules('Address', 'Address', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/Header');
			$this->load->view('customer/C_create');
		} else {
            $data['input'] = array(
            	'Level_ID' => $this->input->post('Level_ID'),
             	'FullName' => $this->input->post('FullName'),
             	'Gender' => $this->input->post('Gender'),
             	'Phone' => $this->input->post('Phone'),
             	'Address' => $this->input->post('Address'),
             	'Email' => $this->input->post('Email'),
             	'Password' => md5($this->input->post('Password'))
            );
              	
			$this->ModUser->set_user(0, $data['input']);
			redirect('Page/get_customer');
        }
    }

    public function create_guide(){
		
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('Level_ID', 'Level_ID', 'required');
		$this->form_validation->set_rules('FullName', 'FullName', 'required');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('Phone', 'Phone', 'required');
		$this->form_validation->set_rules('Address', 'Address', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/Header');
			$this->load->view('guide/G_create');
		} else {
            $data['input'] = array(
            	'Level_ID' => $this->input->post('Level_ID'),
             	'FullName' => $this->input->post('FullName'),
             	'Gender' => $this->input->post('Gender'),
             	'Phone' => $this->input->post('Phone'),
             	'Address' => $this->input->post('Address'),
             	'Email' => $this->input->post('Email'),
             	'Password' => md5($this->input->post('Password'))
            );
              	
			$this->ModUser->set_user(0, $data['input']);
			redirect('Page/get_guide');
        }
    }

    public function delete_customer(){
		$UserID = $this->uri->segment(3);
		$this->ModUser->delete_user($UserID);
		redirect('Page/get_customer','refresh');
	}

	public function delete_guide(){
		$UserID = $this->uri->segment(3);
		$this->ModUser->delete_user($UserID);
		redirect('Page/get_guide','refresh');
	}

	public function edit_customer() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('Level_ID', 'Level_ID', 'required');
		$this->form_validation->set_rules('FullName', 'FullName', 'required');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('Phone', 'Phone', 'required');
		$this->form_validation->set_rules('Address', 'Address', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'required');

		$UserID = $this->uri->segment(3);
		
		$data['show_customer'] = $this->ModUser->get_user_by_id($UserID);

		$data['UserID'] = $data['show_customer']['UserID'];
		$data['Level_ID'] = $data['show_customer']['Level_ID'];
		$data['FullName'] = $data['show_customer']['FullName'];
		$data['Gender'] = $data['show_customer']['Gender'];
		$data['Phone'] = $data['show_customer']['Phone'];
		$data['Address'] = $data['show_customer']['Address'];
		$data['Email'] = $data['show_customer']['Email'];
		$data['Password'] = $data['show_customer']['Password'];

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/Header');
			$this->load->view('customer/C_edit',$data);
		} else {
			 $data['input'] = array(
                'Level_ID' => $this->input->post('Level_ID'),
             	'FullName' => $this->input->post('FullName'),
             	'Gender' => $this->input->post('Gender'),
             	'Phone' => $this->input->post('Phone'),
             	'Address' => $this->input->post('Address'),
             	'Email' => $this->input->post('Email'),
             	'Password' => md5($this->input->post('Password'))
            );
			
			$this->ModUser->set_user($UserID, $data['input']);
			
			redirect('Page/get_customer');
		}
	}

	public function edit_guide() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('Level_ID', 'Level_ID', 'required');
		$this->form_validation->set_rules('FullName', 'FullName', 'required');
		$this->form_validation->set_rules('Gender', 'Gender', 'required');
		$this->form_validation->set_rules('Phone', 'Phone', 'required');
		$this->form_validation->set_rules('Address', 'Address', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'required');

		$UserID = $this->uri->segment(3);
		
		$data['show_guide'] = $this->ModUser->get_user_by_id($UserID);

		$data['UserID'] = $data['show_guide']['UserID'];
		$data['Level_ID'] = $data['show_guide']['Level_ID'];
		$data['FullName'] = $data['show_guide']['FullName'];
		$data['Gender'] = $data['show_guide']['Gender'];
		$data['Phone'] = $data['show_guide']['Phone'];
		$data['Address'] = $data['show_guide']['Address'];
		$data['Email'] = $data['show_guide']['Email'];
		$data['Password'] = $data['show_guide']['Password'];

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/Header');
			$this->load->view('guide/G_edit',$data);
		} else {
			 $data['input'] = array(
                'Level_ID' => $this->input->post('Level_ID'),
             	'FullName' => $this->input->post('FullName'),
             	'Gender' => $this->input->post('Gender'),
             	'Phone' => $this->input->post('Phone'),
             	'Address' => $this->input->post('Address'),
             	'Email' => $this->input->post('Email'),
             	'Password' => md5($this->input->post('Password'))
            );
			
			$this->ModUser->set_user($UserID, $data['input']);
			
			redirect('Page/get_guide');
		}
	}

}