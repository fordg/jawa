<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class M_user extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

        public function login($username,$password){
            $query = $this->db->query("select * from user where (strUsername = '".$username."' OR strEmail = '".$username."') AND (strUserPassword = '".encrypt($password)."'  ) AND (bVerified = 1)");
            if($query->num_rows == 1){
                $loginData = $query->row();
                $data = array(
                    'id'         =>$loginData->nID,
                    'username'   =>$loginData->strUserName,
                    'email'      =>$loginData->strEmail,
                    'is_login'   => TRUE
                );
                $this->session->set_userdata($data);
                return true;
            }
            return false;
        }

        public function getByID($id){
            $this->db->where('nID', $id);
            $query = $this->db->get('user');
            return $query->row_array();
        }

        public function update($id, $data){
            $this->db->where('nID', $id);
            return $this->db->update('user', $data); 
        }

        public function post($data){
            $this->db->insert('user', $data);
        }
    }

/* End of file welcome.php */
/* Location: ./application/models/model_uesr.php */
?>