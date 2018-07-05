<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model {

    public function __construct()
     {
          $this->load->database();
     } 
     
     public function get_article(){
          $query = $this->db->get('paket_tour');
          return $query;
     }

     public function get_all_paket_tour(){
          $this->db->order_by('paket_tour');

          $query = $this->db->get('paket_tour');
          return $query->result();
     }

     public function get_article_by_id($id){
          $query = $this->db->get_where('paket_tour', array('id' => $id));
          return $query->row_array();
     }

     public function set_article($id = 0, $data){
          $this->load->helper('url');
          //Membedakan untuk query create dan update
          if($id == 0){
               $this->db->insert('paket_tour', $data);
          }else{
               $this->db->where('id',$id);
               return $this->db->update('paket_tour', $data);
          }
     }

     public function delete_article($id){
          $this->db->where('id', $id);
          return $this->db->delete('paket_tour');
     }

      public function generate_packages_dropdown(){
            $this->db->select ('
                paket_tour.id,
                paket_tour.judul
            ');
            $result = $this->db->get('paket_tour');

            // Membuat array dropdown
            // Baris pertama select (default)
            $dropdown[''] = 'Please Select';
            if ($result->num_rows() > 0) {
              
                foreach ($result->result_array() as $row) {
                    // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
                    $dropdown[$row['id']] = $row['judul'];
                }
            }
            return $dropdown;
     }

}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>