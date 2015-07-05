<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_news extends CI_Controller {

    function __construct(){
        session_start();
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_property');
        $this->load->model('m_news');
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
        $data['msg']          = $this->_get_flashdata();
        $data['notif']        = $this->m_property->count_properti();
        $data['notifikasi']   = $this->m_property->notif_properti();
        $data['rows']         = $this->m_news->get();

        /**
         * [$html call all wireframe]
         * @var array
         */
        $html = array();
        $html['header']     = $this->load->view('admin/header',$data,true);
        $html['kiri']       = $this->load->view('admin/kiri',null,true);
        $html['content']    = $this->load->view('admin/berita/berita',$data,true);
        $this->load->view('admin/template',$html);
    }

    /**
     * [tambah proccess]
     * @return [news] [Controller view tambah news and function of post news ]
     */
    public function tambah(){
        /**
         * [$data get data from database]
         * @var array
         */
        $data = array();
        $data['msg']          = $this->_get_flashdata();
        $data['notif']        = $this->m_property->count_properti();
        $data['notifikasi']   = $this->m_property->notif_properti();

        /**
         * [$html call all wireframe]
         * @var array
         */
        $html = array();
        $html['header']     = $this->load->view('admin/header',$data,true);
        $html['kiri']       = $this->load->view('admin/kiri',null,true);
        $html['content']    = $this->load->view('admin/berita/tambah',null,true);
        $this->load->view('admin/template',$html);
    }

    public function post(){
        $config['upload_path'] = "./upload/be/news"; 
        $config['allowed_types'] = 'gif|jpg|png|JPEG'; 
        $config['file_name'] = '_'.date('Y_m_d_H_i_s');
        $config['max_size']    = '80000';
        $config['max_width']  = '4000';
        $config['max_height']  = '4000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if( !$this->upload->do_upload()){
            $data = array(  'nID'           => $this->input->post('nID'),
                            'titlenews'     => $this->input->post('titlenews'),
                            'userid'        => $this->input->post('userid'),
                            'postdate'      => $this->input->post('postdate'),
                            'contentnews'   => $this->input->post('contentnews')
            );
            $this->m_news->post($data);
            redirect('admin/c_news');
        }else{
            $upload = $this->upload->data();
            $data = array(  'nID'           => $this->input->post('nID'),
                            'titlenews'     => $this->input->post('titlenews'),
                            'userid'        => $this->input->post('userid'),
                            'postdate'      => $this->input->post('postdate'),
                            'contentnews'   => $this->input->post('contentnews'),

                            'pictnews'      => $upload['file_name']
            );
            $this->m_news->post($data);
            redirect('admin/c_news');
        }
    }

    /**
     * [ubah proccess]
     * @return [news] [Controller view ubah news and function of put news ]
     */
    public function ubah($id){
        /**
         * [$data get data from database]
         * @var array
         */
        $data = array($id);
        $data['msg']            = $this->_get_flashdata();
        $data['notif']          = $this->m_property->count_properti();
        $data['notifikasi']     = $this->m_property->notif_properti();
        $data['rows']           = $this->m_news->getByID($id);

        /**
         * [$html call all wireframe]
         * @var array
         */
        $html = array();
        $html['header']     = $this->load->view('admin/header',$data,true);
        $html['kiri']       = $this->load->view('admin/kiri',null,true);
        $html['content']    = $this->load->view('admin/berita/ubah',null,true);
        $this->load->view('admin/template',$html);
    }

    public function put(){
        $config['upload_path'] = "./upload/be/news"; 
        $config['allowed_types'] = 'gif|jpg|png|JPEG'; 
        $config['file_name'] = '_'.date('Y_m_d_H_i_s');
        $config['max_size']    = '80000';
        $config['max_width']  = '4000';
        $config['max_height']  = '4000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if( !$this->upload->do_upload()){
            $id= $this->input->post('nID');
            $data = array(  'titlenews'     => $this->input->post('titlenews'),
                            'userid'        => $this->input->post('userid'),
                            'postdate'      => $this->input->post('postdate'),
                            'contentnews'   => $this->input->post('contentnews')
            );
            $this->m_news->update($id,$data);
            redirect('admin/c_news');
        }else{
            $upload = $this->upload->data();
            $id= $this->input->post('userid');
            $data = array(  'titlenews'     => $this->input->post('titlenews'),
                            'userid'        => $this->input->post('userid'),
                            'postdate'      => $this->input->post('postdate'),
                            'contentnews'   => $this->input->post('contentnews'),

                            'pictnews'      => $upload['file_name']
            );
            $this->m_news->update($id,$data);
            redirect('admin/c_news');
        }
    }

    public function _validation(){
        $this->form_validation->set_rules('titlenews','Nama Panggilan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('userid','Nama Panggilan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('postdate','Nama Panggilan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('contentnews','Nomor Identitas', 'trim|required|xss_clean');
        $this->form_validation->set_rules('pict','Nama Panggilan', 'trim|required|xss_clean');
        return $this->form_validation->run();
    }

    public function delete(){
        $id = $this->uri->segment(4); 
        $h=$this->m_news->delete($id); 
        if($h==1451)
            $this->session->set_flashdata('message', $this->message->message_error('Gagal menghapus. Data tersebut sudah digunakan pada data lainnya'));
        else
            //$this->session->set_flashdata('message', $this->message->message_success('Berhasil menghapus Data'));
            redirect(base_url('admin/c_news'));
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
