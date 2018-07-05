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

     public function get_all_guide(){
          $this->db->order_by('GuideName');

          $query = $this->db->get('guide');
          return $query->result();
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

     public function generate_guide_dropdown(){
            $this->db->select ('
                guide.GuideID,
                guide.GuideName
            ');
            $result = $this->db->get('guide');

            // Membuat array dropdown
            // Baris pertama select (default)
            $dropdown[''] = 'Please Select';
            if ($result->num_rows() > 0) {
              
                foreach ($result->result_array() as $row) {
                    // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
                    $dropdown[$row['GuideID']] = $row['GuideName'];
                }
            }
            return $dropdown;
     }
}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>