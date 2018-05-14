<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModTour extends CI_Model {

    public function __construct()
     {
          $this->load->database();
     } 
     
     public function get_booking(){
          $query = $this->db->get('tour');
          return $query;
     }

     public function get_booking_by_id($TourID){
          $query = $this->db->get_where('tour', array('TourID' => $TourID));
          return $query->row_array();
     }

     public function set_booking($TourID = 0, $data){
          $this->load->helper('url');
          //Membedakan untuk query create dan update
          if($TourID == 0){
               $this->db->insert('tour', $data);
          }else{
               $this->db->where('TourID',$TourID);
               return $this->db->update('tour', $data);
          }
     }

     public function delete_booking($TourID){
               $this->db->where('TourID', $TourID);
               return $this->db->delete('tour');
     }

     public function get_price_by_id($Packages){
          $query = $this->db->get_where('paket_tour', array('id' => $Packages));
          return json_encode($query->row_array());
     }

     public function get_package($package) {
          $query = $this->db->get_where('paket_tour', array('id' => $package));
          return $query->result_array();
     }
}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>