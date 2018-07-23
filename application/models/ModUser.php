<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModUser extends CI_Model {

    public function __construct(){
      $this->load->database();
    } 
    
    public function login_user($email, $password){
      $this->db->where('Email', $email);
      $this->db->where('Password', $password);

      $result = $this->db->get('user');

      if($result->num_rows() == 1){
          return $result->row(0)->UserID;
      } else {
          return false;
      }
    }

    public function get_user_level($UserID) {
       // Dapatkan data level
       $this->db->select('Level_ID');
       $this->db->where('UserID', $UserID);

       $result = $this->db->get('user');

       if ($result->num_rows() == 1) {
           return $result->row(0)->Level_ID;
       } else {
           return false;
       }
   }

}
