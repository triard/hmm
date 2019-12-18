<?php

defined('BASEPATH') or exit('No direct script access allowed');

class NonCustomers extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Ticket_model');
        $this->load->model('Fest_model');
    }

    public function index()
    {
        $data['shows'] = $this->Ticket_model->getTicketbyDate();
        $data['title'] = "Beranda";
        $this->load->view('template/head', $data);
        $this->load->view('noncustomer/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function shows()
    {

        $data['title'] = "Contact";
        $this->load->view('noncustomer/head', $data);
        $this->load->view('noncustomer/shows', $data);
        $this->load->view('noncustomer/footer', $data);
    }

    public function contact()
    {

        $data['title'] = "Contact";
        $this->load->view('noncustomer/head', $data);
        $this->load->view('noncustomer/contact', $data);
        $this->load->view('noncustomer/footer', $data);
    }

    public function aboutus()
    {

        $data['title'] = "AboutUS";
        $this->load->view('noncustomer/head', $data);
        $this->load->view('noncustomer/about', $data);
        $this->load->view('noncustomer/footer', $data);
    }

    public function faq()
    {

        $data['title'] = "AboutUS";
        $this->load->view('noncustomer/head', $data);
        $this->load->view('noncustomer/faq', $data);
        $this->load->view('noncustomer/footer', $data);
    }
    public function therms()
    {

        $data['title'] = "AboutUS";
        $this->load->view('noncustomer/head', $data);
        $this->load->view('noncustomer/imperntTherm', $data);
        $this->load->view('noncustomer/footer', $data);
    }

}
