<?php
/**
 * Controller Profile
 * Created by Rico Oktavian Adhi Wibowo
 */
class C_profile extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_user');
        $this->load->helper('form');
        $this->load->library('upload');
        $this->load->model('m_category');
    }

    public function index(){
        if($this->session->userdata('id')== null) redirect('c_auth');
        
        /**
         * get all from database
         */
        $data['profil'] = $this->m_user->getById($this->session->userdata('id'));
        $data['category']       = $this->m_category->get(); 

        /**
         * [$html description]
         * @var array data all component page
         */
        $html = array();
        $html['component']  = $this->load->view('template/component');
        $html['header']     = $this->load->view('template/header',$data);
        $html['content']    = $this->load->view('template/user/user_profile',$data);
        $html['footer']     = $this->load->view('template/footer');
        $html['js']         = $this->load->view('template/js');
        $this->load->view('template/template',$html);
    }

    public function update(){
        $id= $this->input->post('userid');
        $config['upload_path']      = "./upload/profile/";
        $config['allowed_types']    = 'gif|jpg|png|JPEG';
        $config['file_name']        = '_'.date('Y_m_d_H_i_s');
        $config['max_size']         = '80000';
        $config['max_width']        = '4000';
        $config['max_height']       = '4000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if( !$this->upload->do_upload()){
            $data = array(
                'strFLName' => $this->input->post('nama'),
                'strEmail' =>$this->input->post('email'),
                'strTelNumber' =>$this->input->post('phone'),
                'skype' =>$this->input->post('skype'),
                'strAddress' =>$this->input->post('alamat'),
                'fb' => $this->input->post('facebook'),
                'twitter' => $this->input->post('twitter'),
                'goplus' => $this->input->post('google_plus')
            );
            $this->m_user->update($id,$data);
            redirect('c_profile');
        }else{
            $upload = $this->upload->data();
            $data = array(
                            'strFLName' => $this->input->post('nama'),
                            'strEmail' =>$this->input->post('email'),
                            'strTelNumber' =>$this->input->post('phone'),
                            'skype' =>$this->input->post('skype'),
                            'strAddress' =>$this->input->post('alamat'),
                            'fb' => $this->input->post('facebook'),
                            'twitter' => $this->input->post('twitter'),
                            'goplus' => $this->input->post('google_plus'),
                            'photo' => $upload['file_name']
                        );
            $this->m_user->update($id,$data);
            redirect('c_profile');

        }
    }
}