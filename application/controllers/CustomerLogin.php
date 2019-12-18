<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CustomerLogin extends CI_Controller
{
  
    public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		//Do your magic here
	}

	public function index()
	{	
		
			$this->load->view('login');
	}

	public function dologin()
	{
		if($this->input->post('submit')) {

			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {

				if ($this->login_model->login_customer() == TRUE) {
					redirect('Beranda');
				} else {
					$data['notif'] = 'Login gagal';
					$this->load->view('Beranda', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('login_customer', $data);
			}
		} 
    }
    public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
    
    
}
