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

        public function get_id ($id){
            $sql= "select * from properti where nID ='".$id. "'";
            return $this->db->query($sql)->row();
        }

        public function update($id, $data){
            $this->db->where('nID', $id);
            return $this->db->update('properti', $data); 
        }

        /* controller for admin */
        public function not_yet_approval(){
            $vehicle = $this->db->query("SELECT *, p.nID as idProperti FROM properti p JOIN sub_kategori s ON p.jenis_properti = s.nID WHERE p.new = 1 AND p.verified = 0");
            $zz = $vehicle->result_array();
            return $zz;
        } 

        public function all_properti(){
            $vehicle = $this->db->query("SELECT *, p.nID as idProperti FROM properti p JOIN sub_kategori s ON p.jenis_properti = s.nID WHERE p.jenis_properti=1 OR p.jenis_properti=2 OR p.jenis_properti=3 OR p.jenis_properti=4 OR p.jenis_properti=5 OR p.jenis_properti=6 OR p.jenis_properti=7 OR p.jenis_properti=8 ORDER BY idProperti DESC");
            $zz = $vehicle->result_array();
            return $zz;
        }   
         
        public function count_properti(){
            $vehicle = $this->db->query("SELECT COUNT(new) notif FROM properti WHERE new = 1");
            $zz = $vehicle->row_array();
            return $zz;
        }
         
        public function notif_properti(){
            $vehicle = $this->db->query("SELECT * FROM properti WHERE new = 1 AND verified = 0 ORDER BY nID DESC");
            $zz = $vehicle->result_array();
            return $zz;
        }
         
        public function aproval($id,$data){
            $this->db->where('nID', $id);
            $this->db->update('properti', $data);
        }

        /**
         * [filter-property get property only destination]
         * @return [all function filter-property] [destination]
         */
        public function get_destination(){
            $vehicle = $this->db->query("SELECT *,p.nID as idProperti FROM properti p JOIN sub_kategori s ON p.jenis_properti = s.nID WHERE p.jenis_properti=9 OR p.jenis_properti=10 OR p.jenis_properti=11 ORDER BY idProperti DESC");
            $zz = $vehicle->result_array();
            return $zz;
        }

        /**
         * [filter-property get property only belanja]
         * @return [all function filter-property] [belanja]
         */
        public function get_belanja(){
            $vehicle = $this->db->query("SELECT *,p.nID as idProperti FROM properti p JOIN sub_kategori s ON p.jenis_properti = s.nID WHERE p.jenis_properti=12 OR p.jenis_properti=13 OR p.jenis_properti=15 ORDER BY idProperti DESC");
            $zz = $vehicle->result_array();
            return $zz;
        }

        /**
         * [filter-property get property only belanja]
         * @return [all function filter-property] [kuliner]
         */
        public function get_kuliner(){
            $vehicle = $this->db->query("SELECT *,p.nID as idProperti FROM properti p JOIN sub_kategori s ON p.jenis_properti = s.nID WHERE p.jenis_properti=16 OR p.jenis_properti=17 ORDER BY idProperti DESC");
            $zz = $vehicle->result_array();
            return $zz;
        }

        /**
         * [getJenisDestination get sub category destination]
         * @return [select] [destination]
         */
        public function getJenisDestination(){
            $sub_category   = $this->db->query("SELECT * FROM sub_kategori where id_kategori = 3 ");
            $get            = $sub_category->result_array();
            return $get;
        }

        /**
         * [getJenisBelanja get sub category belanja]
         * @return [select] [belanja]
         */
        public function getJenisBelanja(){
            $sub_category   = $this->db->query("SELECT * FROM sub_kategori where id_kategori = 4 ");
            $get            = $sub_category->result_array();
            return $get;
        }

        /**
         * [getJenisKuliner get sub category kuliner]
         * @return [select] [kuliner]
         */
        public function getJenisKuliner(){
            $sub_category   = $this->db->query("SELECT * FROM sub_kategori where id_kategori = 5 ");
            $get            = $sub_category->result_array();
            return $get;
        }


        /**
         * [delete description]
         * @param  [type] $id [description]
         * @return [type]     [description]
         */
        public function delete($id){
            $db_debug = $this->db->db_debug;
            $this->db->db_debug = true;
            $this->db->where('nID',$id);
            $this->db->delete('properti');
            return $this->db->_error_number();
        }

    }

/* End of file welcome.php */
/* Location: ./application/models/model_user.php */
?>