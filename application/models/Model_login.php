<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model

{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function dologin()
    {
        $username  = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db->where('username', $username)
            ->where('password', $password)
            ->get('users');

        if ($query->num_rows() > 0) {
            $data = array(
                'username' => $username,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($data);
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function login_customer()
    {
        $username  = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db->where('username', $username)
            ->where('password', $password)
            ->get('users');

        if ($query->num_rows() > 0) {


            $user = array_shift($query->result_array());
            $data = array(
                'username' => $user['username'],
                'password' => $user['password'],
                'id_customer' => $user['id_customer'],
                'nama' => $user['nama'],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($data);
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
