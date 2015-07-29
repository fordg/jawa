<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_iklan extends CI_Model 
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get(){ 
        $this->db->select("*");
        $this->db->from("iklan");
        $this->db->order_by("nID", "desc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getByID($id)
    {   
        $this->db->where('nid', $id);
        $this->db->select("*");
        $this->db->from("iklan");
        return $this->db->get();
    }

    public function get_id ($id){
        $sql= "select * from iklan where nID='".$id. "'";
        return $this->db->query($sql)->row();
    }

    public function post($data){
        $this->db->insert('iklan', $data);
    }

    public function put($data, $condition){
        $this->db->where($condition);
        $this->db->update('iklan', $data); 
    }

    function delete($id){
        $this->db->where('nid', $id);
        $this->db->delete('iklan');
    }
    
    public function publish($id,$data){
        $this->db->where('nID', $id);
        $this->db->update('iklan', $data);
    }
}