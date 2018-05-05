<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModGuide extends CI_Model {

    public function __construct()
     {
          $this->load->database();
     } 
     
     public function get_article(){
          $query = $this->db->get('guide');
          return $query;
     }

     public function get_article_by_id($GuideID){
          $query = $this->db->get_where('guide', array('GuideID' => $GuideID));
          return $query->row_array();
     }

     public function set_article($GuideID = 0, $data){
          $this->load->helper('url');
          //Membedakan untuk query create dan update
          if($GuideID == 0){
               $this->db->insert('guide', $data);
          }else{
               $this->db->where('GuideID',$GuideID);
               return $this->db->update('guide', $data);
          }
     }

     public function delete_article($GuideID){
               $this->db->where('GuideID', $GuideID);
               return $this->db->delete('guide');
     }
}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>