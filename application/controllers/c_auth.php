<?php
/**
 * Created by Rico Oktavian Adhi Wibowo
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_category');
    }

    public function index() {
        /**
         * get all from database
         */
        $data['category']       = $this->m_category->get();

        if($this->session->userdata('is_login')){
            redirect(base_url('/'));
        }
        $html = array();
        $html['component']  = $this->load->view('template/component');
        $html['header']     = $this->load->view('template/header',$data);
        $html['content']    = $this->load->view('template/auth/login-register');
        $html['footer']     = $this->load->view('template/footer');
        $html['js']         = $this->load->view('template/js');
        $this->load->view('template/template',$html);
    }

    public function login_proccess(){
        $username   = $this->security->xss_clean($this->input->post('username'));
        $password   = $this->security->xss_clean($this->input->post('password'));
        $result = $this->m_user->login($username,$password);
        $target = base_url('c_auth');
        if($result === TRUE){
            $target = base_url('/');
        }else{
            $this->session->set_flashdata('error', 'Silahkan ulangi kembali');
        }
        redirect($target,'refresh');
    }

    public function post()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');

        if($this->_validation()==FALSE){
            $this->session->set_flashdata('error', validation_errors());
            redirect(base_url('register'));
        }else{
            $data = array(  'nUserPrivilege'    => $this->input->post('nUserPrivilage'),
                            'bVerified'         => $this->input->post('bVerified'),
                            'create_date'       => $this->input->post('create_date'),
                            'strFLName'         => $this->input->post('namalengkap'),
                            'strUserName'       => $this->input->post('namapengguna'),
                            'strTelNumber'      => $this->input->post('notelp'),
                            'strAddress'        => $this->input->post('alamat'),
                            'strEmail'          => $this->input->post('email'),
                            'strUserPassword'   => $this->_salt($this->input->post('password'))
                         );
            $this->m_user->post($data);
            $this->session->set_flashdata('success', 'Pendaftaran berhasil');
            redirect(base_url('c_auth'));
        }
    }

    public function _validation(){
        $this->form_validation->set_rules('nUserPrivilage','Nama Lengkap', 'trim|required|xss_clean');
        $this->form_validation->set_rules('bVerified','Nama Lengkap', 'trim|required|xss_clean');
        $this->form_validation->set_rules('create_date','Nama Lengkap', 'trim|required|xss_clean');
        $this->form_validation->set_rules('namalengkap','Nama Lengkap', 'trim|required|xss_clean');
        $this->form_validation->set_rules('namapengguna','Nama Panggilan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('notelp','Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('alamat','Alamat', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email','Email', 'valid_email|trim|required|xss_clean');
        $this->form_validation->set_rules('password','Password', 'trim|required|min_length[6]|matches[konfpassword]');
        $this->form_validation->set_rules('konfpassword', 'Konfirmasi Password', 'required');
        return $this->form_validation->run();
    }

    private function _salt($value){
        $salt ='4ku6anttenGGG';
        $encrypt = md5($salt . $value);
        return $encrypt;
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url('c_auth'));
    }

    private function _get_flashdata() {
        $msg = $this->session->flashdata("process_msg");
        if (empty($msg))
            return array("type" => "hidden", "content" => "");
        else
            return $msg;
    }
}
?>
