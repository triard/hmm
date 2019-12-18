<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Transaction_model extends CI_Model
{
 
    public function rules()
    {
        return [
            [
                'field' => 'name',
                'label' => 'name',
                'rules' => 'required'
            ],
            [
                'field' => 'description',
                'label' => 'desccription',
                'rules' => 'required'
            ],
        ];
    }

    public function addProduct()
    {

        // $data = [
        //     "id_ticket" => $this->input->post('id_ticket', true),
        //     "id_user" => $this->input->post('id_user', true),
        //     "date" => $this->input->post('date', true)
        // ];
        // $this->db->insert('transaction', $data);
        $data = array(
            'id_ticket'                   => $this->input->post('id_ticket'),
            'id_user'                     => $this->input->post('id_user'),
            'date'                        => $this->input->post('date')
        );
        $insert =  $this->curl->simple_post($this->API, $data);
        // var_dump($insert);die;
        if ($insert) {
            $this->session->set_flashdata('result', 'Data Menu Berhasil Ditambahkan');
        } else {
            $this->session->set_flashdata('result', 'Data Menu Gagal Ditambahkan');
        }
        redirect('Beranda');
    }

    public function getProducts()
        {
            $this->db->select('ticket.*, category.name as a');
            $this->db->join('category', 'ticket.id_category = category.id_category');
            return $this->db->get('ticket')->result();           
        }

        public function getTransaction()
        {
            $this->db->select('transaction.*, ticket.fest_name as name_fest, users.name as user');
            $this->db->join('ticket', 'ticket.id_ticket = transaction.id_trans');
            $this->db->join('users', 'users.id_user = transaction.id_trans');
            
            return $this->db->get('transaction')->result();
        }


    public function getProductid($id_products)
    {
        return $this->db->get_where($this->_table, ['id_products' => $id_products])->row_array();
    }
 

    public function getProductsByCategory($id)
        {
            $this->db->select('ticket.*, category.name as nm');
            $this->db->join('category', 'ticket.id_ticket = category.id_category');
            return $this->db->get_where('ticket', array('ticket.id_category' => $id))->result();
        }
        public function getProductsByName($name)
        {
            $this->db->like('name1', $name);
            return $this->db->get('ticket')->result();
        }
}