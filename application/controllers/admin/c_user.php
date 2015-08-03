<?php session_start(); if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_user extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_property');
        $this->load->model('m_admin');
        if($this->session->userdata('is_login')===FALSE){
            redirect('admin/c_login');
        }
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

    public function put() {
        $id= $this->input->post('nID');
        $data = array(
                        'strUserName'       => $this->input->post('strUserName'),
                        'strUserPassword'   => encrypt($this->input->post('strUserPassword')),
                        'strFLName'         => $this->input->post('strFLName'),
                        'strEmail'          => $this->input->post('strEmail')
                     );
        $this->m_admin->update($id,$data);
        $this->session->set_flashdata('success', 'Anda berhasil mengubah profil.');
        redirect(base_url('admin/c_user/profil'));
    }  
}

/* End of file login.php */
