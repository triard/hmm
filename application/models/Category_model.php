<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category_model extends CI_Model
{
    private $_table = "category";

    public function getAll()
    {
        $query = $this->db->get('category');
        return $query->result();
    }

    public function getCategories()
    {
        return $this->db->get('category')->result();
    }

    public function getCategoriesid($id_categories)
    {
        return $this->db->get_where($this->_table, ['category.id_category' => $id_categories])->row_array();
    }
}