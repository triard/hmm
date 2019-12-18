<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Ticket_model');
        $this->load->model('Fest_model');
        $this->load->model('Transaction_model');
    }

    public function index()
    {
 
        $data['shows'] = $this->Ticket_model->getTicketbyDate();
        $data['title'] = "Beranda";
        $this->load->view('template/head', $data);
        $this->load->view('users/index', $data);
        $this->load->view('template/footer',$data);

    }

    public function shows()
    {
     
        $data['title'] = "Contact";
        $this->load->view('template/head',$data);
        $this->load->view('users/shows', $data);
        $this->load->view('template/footer',$data);

    }

    public function contact()
    {
     
        $data['title'] = "Contact";
        $this->load->view('template/head',$data);
        $this->load->view('users/contact', $data);
        $this->load->view('template/footer',$data);

    }

    public function aboutus()
    {
     
        $data['title'] = "AboutUS";
        $this->load->view('template/head',$data);
        $this->load->view('users/about', $data);
        $this->load->view('template/footer',$data);
    }

    public function faq()
    {
     
        $data['title'] = "AboutUS";
        $this->load->view('template/head',$data);
        $this->load->view('users/faq', $data);
        $this->load->view('template/footer',$data);
    }
    public function therms()
    {
     
        $data['title'] = "AboutUS";
        $this->load->view('template/head',$data);
        $this->load->view('users/imperntTherm', $data);
        $this->load->view('template/footer',$data);
    }

    public function transaction($id){
        $data['ticket'] = $this->Fest_model->getProductid($id);
        $data['id_ses'] = $this->session->userdata('id_user');
        // $trans = $this->Transaction_model; 

        $data['title'] = "Checkout";
        // $trans->addProduct();
        $this->load->view('template/head', $data);
        $this->load->view('users/checkout', $data);
        $this->load->view('template/footer', $data);

    }
public function checkout(){
        $trans = $this->Transaction_model; 
        $trans->addProduct();
        
}

}