<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_dash extends CI_Controller {

    function __construct(){
        session_start();
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_profil');
        $this->load->model('m_property');
        $this->load->model('m_hit');
        $this->load->helper('form');
        $this->load->library('upload'); 
        if($this->session->userdata('is_login')===FALSE){
			redirect('admin/c_login');
		}
    }
           
	public function index(){
        /**
         * [$data get data from database]
         * @var array
         */
		$data = array();
        $data['properti_baru']      = $this->m_property->not_yet_approval();  
		$data['notif']              = $this->m_property->count_properti();
		$data['notifikasi']         = $this->m_property->notif_properti();
        $data['hari_ini']           = $this->m_hit->hari_ini();
        $data['kemarin']            = $this->m_hit->kemarin();
        $data['total']              = $this->m_hit->total();

        /**
         * [$html call all wireframe]
         * @var array
         */
		$html = array();
		$html['header'] 	= $this->load->view('admin/header',$data,true);
		$html['kiri'] 		= $this->load->view('admin/kiri',null,true);
		$html['content'] 	= $this->load->view('admin/dashboard/dashboard',$data,true);
		$this->load->view('admin/template',$html);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
