<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
class M_admin extends CI_Model{
    function __construct(){
		parent::__construct();
		$this->load->library('session'); 
	}
  
    public function login($username, $password){
    	$psw = $this->enc($password);
    	$query = $this->db->query("select * from user where (strUsername = '".$username."') AND (strUserPassword = '".$psw."'  ) AND nUserPrivilege= 0");
        if ($query->num_rows() == 1) { // jika data = 1
			$data = $query->row_array();
			$newdata = array(
                                'id'         =>$data->nID,
                                'username'  => $data['strUserName'],
                                'level'     => $data['nUserPrivilege'],
                                'is_login' => TRUE
						    );
			$this->session->set_userdata($newdata);
			return TRUE;
		}else{
				return FALSE; // else mengembalikan FALSE
		}
    }

	function enc($password){
		$salt = "4ku6anttenGGG";
		$enc = md5($salt.$password);
		return $enc;
	}

    public function getByID($id){
        $this->db->where('nID', $id);
        $query = $this->db->get('user');
        return $query->row_array();
    }
}
