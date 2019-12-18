<?php
class Coba extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Coba_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        // jika form login disubmit
        if ($this->input->post()) {
            if ($this->Coba_model->doLogin()) redirect(site_url('admin/Overview'));
        }

        // tampilkan halaman login

        $this->load->view('login/');
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }
}
