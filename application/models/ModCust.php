<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModCust extends CI_Model {

    public function __construct()
     {
          $this->load->database();
     } 
     
     public function get_article(){
          $query = $this->db->get('customer');
          return $query;
     }

     public function get_article_by_id($CustID){
          $query = $this->db->get_where('customer', array('CustID' => $CustID));
          return $query->row_array();
     }

     public function set_article($CustID = 0, $data){
          $this->load->helper('url');
          //Membedakan untuk query create dan update
          if($CustID == 0){
               $this->db->insert('customer', $data);
          }else{
               $this->db->where('CustID',$CustID);
               return $this->db->update('customer', $data);
          }
     }

     public function delete_article($CustID){
               $this->db->where('CustID', $CustID);
               return $this->db->delete('customer');
     }
}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>