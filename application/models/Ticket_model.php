<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ticket_model extends CI_Model
{
    public $id_products;
    private $_table = "ticket";
    

    public function getProducts()
        {
            $this->db->select('ticket.*, category.name as a');
            $this->db->join('category', 'ticket.id_category = category.id_category');
            return $this->db->get('ticket')->result();           
        }

    public function getTicketbyDate()
    {
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->order_by('date', 'asc');
        $this->db->limit('3');
        return $this->db->get()->result();
    }

        public function getAll()
        {
            $query = $this->db->get('ticket');
            return $query->result();
        }

        public function getOneProduct($id_products)
        {
            $this->db->select('ticket.*, category.name as kat, category.id_category as wkwk');
            $this->db->join('category', 'ticket.id_category = category.id_category');
            $this->db->where('id_ticket', $id_products);
            return $this->db->get('ticket')->result();
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

        public function countAmountTicket()
        {
            $query = $this->db->get('ticket');
            if ($query->num_rows() > 0) {
                return $query->num_rows();
            } else {
                return 0;
            }
        }
        public function countAmountCategories()
        {
            $query = $this->db->get('category');
            if ($query->num_rows() > 0) {
                return $query->num_rows();
            } else {
                return 0;
            }
        }
        public function countAmountUsers()
        {
            $query = $this->db->get('users');
            if ($query->num_rows() > 0) {
                return $query->num_rows();
            } else {
                return 0;
            }
        }
        public function countAmountTransaction()
        {
            $query = $this->db->get('transaction');
            if ($query->num_rows() > 0) {
                return $query->num_rows();
            } else {
                return 0;
            }
        }
}