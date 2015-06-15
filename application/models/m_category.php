<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class M_category extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        public function get(){
            $this->db->order_by("kategori.nID","asc");
            return $this->db->get("kategori")->result();
        }

        public function getSK($id){
            $this->db->where('id_kategori',$id);
            return $query = $this->db->get ('sub_kategori')->result();
        }

        public function post($data){
            $this->db->insert('kategori', $data);
        }

        public function getByID($id){
            $this->db->where('nID', $id);
            $query = $this->db->get('kategori');
            return $query->row_array();
        }

        public function update($id, $data){
            $this->db->where('nID', $id);
            return $this->db->update('kategori', $data); 
        }
}

/* End of file welcome.php */
/* Location: ./application/models/model_uesr.php */
?>