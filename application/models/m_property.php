<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class M_property extends CI_Model {
        public function __construct() {
            parent::__construct();$this->load->library('session');
        }

        public function get(){
            $this->db->order_by("properti.nID","asc");
            return $this->db->get("properti")->result();
        }

        public function getMyProperty($id){
            $this->db->where('username', $id);
            $query = $this->db->get('properti');
            return $query->result_array();
        } 

        public function post($data){
            $this->db->insert('properti', $data);
        }

        public function getJenis(){
            $sub_category   = $this->db->query("SELECT * FROM sub_kategori where id_kategori = 1 ");
            $get            = $sub_category->result_array();
            return $get;
        }

        public function getByID($id){
            $this->db->where('nID', $id);
            $query = $this->db->get('properti');
            return $query->row_array();
        }

        public function update($id, $data){
            $this->db->where('nID', $id);
            return $this->db->update('properti', $data); 
        }
}

/* End of file welcome.php */
/* Location: ./application/models/model_uesr.php */
?>