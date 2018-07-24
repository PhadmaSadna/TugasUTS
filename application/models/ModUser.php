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

    public function get_user_customer() {
      $this->db->select('UserID, FullName, Gender, Phone, Address, Email');
      $this->db->from('user');
      $this->db->where(array('Level_ID' => '2'));
       
      $query = $this->db->get();
      if ($query->num_rows() > 0) {
        foreach ($query->result() as $customer) {
          $hasil[] = $customer;
        }
        return $hasil;
      }
    }

    public function get_user_guide() {
      $this->db->select('UserID, FullName, Gender, Phone, Address, Email');
      $this->db->from('user');
      $this->db->where(array('Level_ID' => '3'));
       
      $query = $this->db->get();
      if ($query->num_rows() > 0) {
        foreach ($query->result() as $guide) {
          $hasil[] = $guide;
        }
        return $hasil;
      }
    }

    public function get_user_by_id($UserID){
      $query = $this->db->get_where('user', array('UserID' => $UserID));
      return $query->row_array();
    }

    public function set_user($UserID = 0, $data){
      $this->load->helper('url');

      if ($UserID == 0){
        $this->db->insert('user', $data);
      } else {
        $this->db->where('UserID',$UserID);
        return $this->db->update('user', $data);
      }
    }

    public function delete_user($UserID){
      $this->db->where('UserID', $UserID);
      return $this->db->delete('user');
    }

    public function generate_customer_dropdown(){
      $this->db->select('user.UserID, user.FullName');
      $this->db->where(array('Level_ID' => '2'));
      $result = $this->db->get('user');

      $dropdown[''] = 'Please Select';
      if ($result->num_rows() > 0) {
              
          foreach ($result->result_array() as $row) {
              $dropdown[$row['UserID']] = $row['FullName'];
          }
      }
      return $dropdown;
    }

}
