<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class M_profil extends CI_Model{     
    function __construct(){
		parent::__construct();
		 $this->load->library('session'); 
	}
  
    function select_profil($username){
		$vehicle = $this->db->query("SELECT * FROM user WHERE strUserName='$username'");
		$jml = $vehicle->num_rows();
		$zz = $vehicle->result_array();
		if($jml > 0){
			return $zz;
		}
		else{
			return null;
		}
    }
      
    function update_profil($data){
        $this->db->where('strUserName',$_SESSION['username']);
        $this->db->update('user',$data);
        return;
    } 
}
