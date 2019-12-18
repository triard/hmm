<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Fest extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fest_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = 'Ticket Fest';
        $data['ticket'] = $this->Fest_model->getAllTicket();

        $this->load->view('template/head', $data);   
        $this->load->view('ticket/index', $data);
        $this->load->view('template/footer', $data);   




        
    }

    public function pop()
    {
        $cat = 'pop';
        $data['title'] = 'Pop Fest';
        $data['ticket'] = $this->Fest_model->getPop($cat);
        $this->load->view('template/head', $data);   
        $this->load->view('pop/index', $data);
        $this->load->view('template/footer', $data);        

        
    }
    public function rock()
    {
        $cat = 'rock';
        $data['title'] = 'Rock Fest';
        $data['ticket'] = $this->Fest_model->getRock($cat);
        $this->load->view('template/head', $data);   
        $this->load->view('rock/index', $data);
        $this->load->view('template/footer', $data);        
        
    }
    public function jazz()
    {
        $cat = 'jazz';
        $data['title'] = 'Jazz Fest';
        $data['ticket'] = $this->Fest_model->getFolk($cat);
        $this->load->view('template/head', $data);   
        $this->load->view('jazz/index', $data);
        $this->load->view('template/footer', $data);        
        
    }
    public function folk()
    {
        $cat = 'folk';
        $data['title'] = 'Folk Fest';
        $data['ticket'] = $this->Fest_model->getFolk($cat);
        $this->load->view('template/head', $data);   
        $this->load->view('folk/index', $data);
        $this->load->view('template/footer', $data);        
        
    }

     public function detail($id)
    {

        $data['title'] = 'Detail Review';
        $data['ticket'] = $this->Fest_model->getProductid($id);
        // var_dump($data);die;
        $this->load->view('template/head', $data);
        $this->load->view('ticket/detail', $data);
        $this->load->view('template/footer', $data);        
    }

}

/* End of file Fest.php */


?>