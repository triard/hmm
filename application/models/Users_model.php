<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Users_model extends CI_Model
{
    private $_table = "categories";
    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function datatabels()
    {
        return $this->db->order_by('id_user', 'desc')->get('users')->result();
    }
}