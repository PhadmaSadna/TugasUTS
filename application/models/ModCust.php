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

     public function get_all_customer(){
          $this->db->order_by('CustName');

          $query = $this->db->get('customer');
          return $query->result();
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

     public function generate_cust_dropdown(){
            $this->db->select ('
                customer.CustID,
                customer.CustName
            ');
            $result = $this->db->get('customer');

            // Membuat array dropdown
            // Baris pertama select (default)
            $dropdown[''] = 'Please Select';
            if ($result->num_rows() > 0) {
              
                foreach ($result->result_array() as $row) {
                    // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
                    $dropdown[$row['CustID']] = $row['CustName'];
                }
            }
            return $dropdown;
     }

}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>