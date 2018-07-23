<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		//Membuat kelas parent agar bisa digunakan di semua fungsi
		parent::__construct();
		//Load model dan helper
		$this->load->model('ModUser');
		$this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function login()
	{
		$this->form_validation->set_rules('Email', 'Email', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('login/v_login');
        } else {
            
            $email = $this->input->post('Email');
            $password = md5($this->input->post('Password'));

            $UserID = $this->ModUser->login_user($email, $password);

            if($UserID){
                $user_data = array(
                    'UserID' => $UserID,
                    'Email' => $email,
                    'logged_in' => true,
                    'Level_ID' => $this->ModUser->get_user_level($UserID)
                );

                $this->session->set_userdata($user_data);

                redirect('Page/');
            } else {
               
                $this->session->set_flashdata('login_failed', 'Login invalid');

                redirect('Auth/login');
            }       
        }
	}

	public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('UserID');
        $this->session->unset_userdata('Email');

        redirect('Auth/login');
    }

}
