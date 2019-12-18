<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Login_model extends CI_Model {
       private $_table = "users";

    function index($username,$password){
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('username',$username);
      $this->db->where('password',$password);
      $this->db->limit(1);
      $query = $this->db->get();
      if ($query->num_rows() == 0) {
          return FALSE;
      } else {
          return $query->result();
          foreach($query->result() as $login){
              $sess_data['id_user'] = $login->id_user;
              $sess_data['username'] = $login->username;
              $sess_data['password'] = $login->password;
              $this->session->set_userdata($sess_data) ;
          }
          
      }
    }

    public function getuserid($id_user)
    {
        return $this->db->get_where($this->_table, ['id_user' => $id_user])->row_array();
    }
}
 /* End of file ModelName.php */