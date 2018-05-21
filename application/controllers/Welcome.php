<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		//Membuat kelas parent agar bisa digunakan di semua fungsi
		parent::__construct();
		//Load model dan helper
		$this->load->model('ModTour');
		$this->load->model('ModCust');
		$this->load->model('ModGuide');
		$this->load->model('model');

		$this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{

		$this->load->view('V_Header');
		$this->load->view('V_Home');
		$this->load->view('V_Footer');
	}

	public function get_price(){
		$this->ModTour->get_price_by_id($Packages);
	}

	public function create_booking(){
		//Meload helper form dan form valudasi
		$this->load->helper('form');
		$this->load->library('form_validation');

		//memanggil list custId
		$data['customer'] = $this->ModCust->generate_cust_dropdown();
		$data['guide'] = $this->ModGuide->generate_guide_dropdown();
		$data['packages'] = $this->model->generate_packages_dropdown();

		//validasi inputan yang masuk
		$this->form_validation->set_rules('CustID', 'CustID', 'required');
		$this->form_validation->set_rules('GuideID', 'GuideID', 'required');
		$this->form_validation->set_rules('Packages', 'Packages', 'required');
		$this->form_validation->set_rules('StartDate', 'StartDate', 'required');

		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('CreateBookingUser', $data, FALSE);
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

				 redirect('Welcome/');

				 echo "
				   <script>
				   		alert('Your Booking is DONE!'');
				   </script>
				 ";
            }
        }

	public function get_harga() {
		$id= $this->input->post('id');

		$packages = $this->ModTour->get_package($id);

		echo $packages[0]['harga'];
	}
}


