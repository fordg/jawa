<?php session_start(); if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_user extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        if($this->session->userdata('is_login')===FALSE);
        $this->load->model('m_property');
        $this->load->model('m_admin');
    }

    public function index(){
        redirect(base_url('admin/c_user/profil'));
    }

    public function profil(){
        /**
         * [$data get data form database]
         * @var array
         */
        $data = array();
        $data['notif']      = $this->m_property->count_properti();
        $data['notifikasi'] = $this->m_property->notif_properti();
        $data['profil']     = $this->m_admin->getById($this->session->userdata('id'));

        /**
         * [$html call all wireframe]
         * @var array
         */
        $html = array();
        $html['header']     = $this->load->view('admin/header',$data,true);
        $html['kiri']       = $this->load->view('admin/kiri',null,true);
        $html['content']    = $this->load->view('admin/user/profil',$data,true);
        $this->load->view('admin/template',$html);
    }  
}

/* End of file login.php */
