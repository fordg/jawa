<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_ads extends CI_Controller 
{

    function __construct(){
        parent::__construct();
        $this->load->model('m_profil');
        $this->load->model('m_property');
        $this->load->model('m_iklan');
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
        $data['notif']          = $this->m_property->count_properti();
        $data['notifikasi']     = $this->m_property->notif_properti();
        $data['iklan']          = $this->m_iklan->get();
        
        /**
         * [$html call all wireframe]
         * @var array
         */
        $html = array();
        $html['header']     = $this->load->view('admin/header',$data,true);
        $html['kiri']       = $this->load->view('admin/kiri',null,true);
        $html['content']    = $this->load->view('admin/iklan/iklan',$data,true);
        $this->load->view('admin/template',$html);
    }

    public function detailAds($id){
        /**
         * [$data get data from database]
         * @var array
         */
        $data = array();
        $data['msg']            = $this->_get_flashdata();
        $data['notif']          = $this->m_property->count_properti();
        $data['notifikasi']     = $this->m_property->notif_properti();
        $data['gallery']        = $this->mgallery->getGallery($id);

        /**
         * [$html call all wireframe]
         * @var array
         */
        $html = array();
        $html['header']     = $this->load->view('admin/header',$data,true);
        $html['kiri']       = $this->load->view('admin/kiri',null,true);
        $html['content']    = $this->load->view('admin/iklan/detail',$data,true);
        $this->load->view('admin/template',$html);
    }

    public function tambah(){
        /**
         * [$data get data from database]
         * @var array
         */
        $data = array();
        //$data['msg']            = $this->_get_flashdata();
        $data['notif']          = $this->m_property->count_properti();
        $data['notifikasi']     = $this->m_property->notif_properti();

        /**
         * [$html call all wireframe]
         * @var array
         */
        $html = array();
        $html['header']     = $this->load->view('admin/header',$data,true);
        $html['kiri']       = $this->load->view('admin/kiri',null,true);
        $html['content']    = $this->load->view('admin/iklan/tambah',null,true);
        $this->load->view('admin/template',$html);
    }

    public function post(){
        $config['upload_path'] = "./upload/be/iklan/"; 
        $config['allowed_types'] = 'gif|jpg|png|JPEG'; 
        $config['file_name'] = '_'.date('Y_m_d_H_i_s');
        $config['max_size']    = '80000';
        $config['max_width']  = '4000';
        $config['max_height']  = '4000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if( !$this->upload->do_upload()){
            $data = array(
                            'publish'       => $this->input->post('publish'),
                            'belum_publish' => $this->input->post('nonpublish'),
                            'nama'          => $this->input->post('nama'),
                            'deskripsi'     => $this->input->post('deskripsi'),
                            'created_date'  => $this->input->post('created_date'),
                            'link'          => $this->input->post('link')
            );
            $this->m_iklan->post($data);
            redirect('admin/c_ads');
        }else{
            $upload = $this->upload->data();
            $data = array(
                            'publish'       => $this->input->post('publish'),
                            'belum_publish' => $this->input->post('nonpublish'),
                            'nama'          => $this->input->post('nama'),
                            'deskripsi'     => $this->input->post('deskripsi'),
                            'created_date'  => $this->input->post('created_date'),
                            'link'          => $this->input->post('link'),
                            'gambar'        => $upload['file_name']
            );
            $this->m_iklan->post($data);
            redirect('admin/c_ads');
        }
    }

    public function ubah($id){
        /**
         * [$data get data from database]
         * @var array
         */
        $data = array();
        //$data['msg']            = $this->_get_flashdata();
        $data['notif']          = $this->m_property->count_properti();
        $data['notifikasi']     = $this->m_property->notif_properti();
        $data['iklan']          = $this->m_iklan->get_id($id);

        /**
         * [$html call all wireframe]
         * @var array
         */
        $html = array();
        $html['header']     = $this->load->view('admin/header',$data,true);
        $html['kiri']       = $this->load->view('admin/kiri',null,true);
        $html['content']    = $this->load->view('admin/iklan/ubah',$data,true);
        $this->load->view('admin/template',$html);
    }

    public function put(){
        $config['upload_path'] = "./upload/be/iklan/"; 
        $config['allowed_types'] = 'gif|jpg|png|JPEG'; 
        $config['file_name'] = '_'.date('Y_m_d_H_i_s');
        $config['max_size']    = '80000';
        $config['max_width']  = '4000';
        $config['max_height']  = '4000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if( !$this->upload->do_upload()){
            $data = array(
                            'publish'       => $this->input->post('publish'),
                            'belum_publish' => $this->input->post('nonpublish'),
                            'nama'          => $this->input->post('nama'),
                            'deskripsi'     => $this->input->post('deskripsi'),
                            'created_date'  => $this->input->post('created_date'),
                            'link'          => $this->input->post('link')
            );
            $condition['nID'] = $this->input->post('nID'); 
            $this->m_iklan->put($data, $condition);
            redirect('admin/c_ads');
        }else{
            $upload = $this->upload->data();
            $data = array(
                            'publish'       => $this->input->post('publish'),
                            'belum_publish' => $this->input->post('nonpublish'),
                            'nama'          => $this->input->post('nama'),
                            'deskripsi'     => $this->input->post('deskripsi'),
                            'created_date'  => $this->input->post('created_date'),
                            'link'          => $this->input->post('link'),
                            'gambar'        => $upload['file_name']
            );
            $condition['nID'] = $this->input->post('nID');
            $this->m_iklan->put($data, $condition);
            redirect('admin/c_ads');
        }  
    }

    public function properti_aprove($id){
        $msg = '';
        $target = '';
        $data = array('publish'=>1,'belum_publish'=>0);
        $update = $this->m_iklan->publish($id,$data);
        if($update){
            $target = 'admin/c_ads';
        }else{
            $msg = array(
                    "type" => "alert-info",
                    "content" => "Username atau Password salah!!!"
                );
            $target = 'admin/c_ads';
        }
        
        $this->session->set_flashdata("process_msg", $msg);
        redirect($target,'refresh');
    }
    
    public function properti_unaprove($id){
        $target = '';
        $data = array('publish'=>0);
        $update = $this->m_iklan->publish($id,$data);
        if($update){
            $target = 'admin/c_ads';
        }else{
            $msg = array(
                    "type" => "alert-info",
                    "content" => "Username atau Password salah!!!"
                );
            $target = 'admin/c_ads';
        }
        
        $this->session->set_flashdata("process_msg", $msg);
        redirect($target,'refresh');
    }

    public function delete($id){
        $this->m_iklan->delete($id);
        redirect('admin/c_ads');
    }
}