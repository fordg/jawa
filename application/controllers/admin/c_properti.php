<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_properti extends CI_Controller {

	function __construct(){
        session_start();
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_property');
        $this->load->helper('form');
        $this->load->library('upload'); 
        if($this->session->userdata('is_login')===FALSE)
        {
			redirect('admin/c_login');
		}
    }
        
	public function index()
	{
        /**
         * [$data get data from database]
         * @var array
         */
		$data = array();
		$data['msg']          = $this->_get_flashdata();
		$data['notif']        = $this->m_property->count_properti();
		$data['notifikasi']   = $this->m_property->notif_properti();
		$data['rows']         = $this->m_property->all_properti();

        /**
         * [$html call all wireframe]
         * @var array
         */
		$html = array();
		$html['header'] 	= $this->load->view('admin/header',$data,true);
		$html['kiri'] 		= $this->load->view('admin/kiri',null,true);
		$html['content'] 	= $this->load->view('admin/properti/properti',$data,true);
		$this->load->view('admin/template',$html);
	}
	
	public function properti_aprove($id){
		$msg = '';
		$target = '';
		$data = array('verified'=>1,'new'=>0);
		$update = $this->m_property->aproval($id,$data);
		if($update){
			$target = 'admin/c_properti';
		}else{
			$msg = array(
                    "type" => "alert-info",
                    "content" => "Username atau Password salah!!!"
                );
			$target = 'admin/c_properti';
		}
		
		$this->session->set_flashdata("process_msg", $msg);
        redirect($target,'refresh');
	}
	
	public function properti_unaprove($id){
		$target = '';
		$data = array('verified'=>0);
		$update = $this->m_property->aproval($id,$data);
		if($update){
			$target = 'admin/c_properti';
		}else{
			$msg = array(
                    "type" => "alert-info",
                    "content" => "Username atau Password salah!!!"
                );
			$target = 'admin/c_properti';
		}
		
		$this->session->set_flashdata("process_msg", $msg);
        redirect($target,'refresh');
	}

	private function _get_flashdata() {
        $msg = $this->session->flashdata("process_msg");
        if (empty($msg))
            return array("type" => "hidden", "content" => "");
        else
            return $msg;
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
