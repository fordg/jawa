<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class M_property extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->library('session');
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

        /* controller for admin */
        public function select_properti(){
            $vehicle = $this->db->query("SELECT * FROM properti p JOIN sub_kategori s ON p.jenis_properti = s.nID where p.username = '".$_SESSION['username']."' ");
            $zz = $vehicle->result_array();
            return $zz;
            
        } 
                      
        public function all_properti(){
            $vehicle = $this->db->query("SELECT *,p.nID as idProperti FROM properti p JOIN sub_kategori s ON p.jenis_properti = s.nID");
            $zz = $vehicle->result_array();
            return $zz;
        }   
         
        public function count_properti(){
            $vehicle = $this->db->query("SELECT COUNT(new) notif FROM properti WHERE new = 1");
            $zz = $vehicle->row_array();
            return $zz;
        }
         
        public function notif_properti(){
            $vehicle = $this->db->query("SELECT * FROM properti WHERE new = 1 AND verified = 0");
            $zz = $vehicle->result_array();
            return $zz;
        }
         
        public function aproval($id,$data){
            $this->db->where('nID', $id);
            $this->db->update('properti', $data);
        }
}

/* End of file welcome.php */
/* Location: ./application/models/model_uesr.php */
?>