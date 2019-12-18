<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Overview extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ticket_model');
		$this->load->model('Category_model');
		$this->load->library('form_validation');
		if ($this->session->userdata('level') != "admin") {
			redirect('Login', 'refresh');
		}
	}
	public function index()
	{
		$data['total_ticket'] = $this->Ticket_model->countAmountTicket();
		$data['total_categories'] = $this->Ticket_model->countAmountcategories();
        $data['total_user'] = $this->Ticket_model->countAmountUsers();
        $data['total_transaction'] = $this->Ticket_model->countAmountTransaction();
		$this->load->view("admin/_partials/head");
		$this->load->view("admin/overview",$data);
		$this->load->view("admin/_partials/footer");
	}

}