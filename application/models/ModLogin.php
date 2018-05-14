<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModLogin extends CI_Model {

    public function __construct()
     {
          $this->load->database();
     } 
     
     public function get_login(){
          $query = $this->db->get('login');
          return $query;
     }

     public function get_all_login(){
          $this->db->order_by('username');

          $query = $this->db->get('login');
          return $query->result();
     }


     public function get_login_by_username($username){
          $query = $this->db->get_where('login', array('username' => $username));
          return $query->row_array();
     }

     public function set_login($username = 0, $data){
          $this->load->helper('url');
          //Membedakan untuk query create dan update
          if($username == 0){
               $this->db->insert('login', $data);
          }else{
               $this->db->where('username',$username);
               return $this->db->update('login', $data);
          }
     }

     public function delete_login($username){
          $this->db->where('username', $username);
          return $this->db->delete('login');
     }

}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>