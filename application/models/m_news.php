<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class M_news extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        public function get(){
            $this->db->order_by("nID","desc");
            return $this->db->get("berita")->result_array();
        }

        public function post($data){
            $this->db->insert('berita', $data);
        }

        public function getByID($id){
            $this->db->where('nID', $id);
            $query = $this->db->get('berita');
            return $query->row();
        }

        public function update($id, $data){
            $this->db->where('nID', $id);
            return $this->db->update('berita', $data); 
        }

        public function delete($id){
            $db_debug = $this->db->db_debug;
            $this->db->db_debug = true;
            $this->db->where('nID',$id);
            $this->db->delete('berita');
            return $this->db->_error_number();
        }
}

/* End of file welcome.php */
/* Location: ./application/models/model_user.php */
?>