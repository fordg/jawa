<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_destination extends CI_Controller {

    function __construct(){
        session_start();
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_property');
        $this->load->model('m_category');
        $this->load->model('m_user');
        $this->load->helper('form');
        $this->load->library('upload'); 
        if($this->session->userdata('is_login')===FALSE){
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
        $data['rows']         = $this->m_property->get_destination();

        /**
         * [$html call all wireframe]
         * @var array
         */
        $html = array();
        $html['header']     = $this->load->view('admin/header',$data,true);
        $html['kiri']       = $this->load->view('admin/kiri',null,true);
        $html['content']    = $this->load->view('admin/destination/destination',$data,true);
        $this->load->view('admin/template',$html);
    }

    public function tambah(){
        if($this->session->userdata('id')== null) redirect('c_auth');

        /**
         * get all from database
         */
        $data['category']       = $this->m_category->get(); 
        $data['profil']         = $this->m_user->getById($this->session->userdata('id'));
        $data['jenis']          = $this->m_property->getJenisDestination();
        $data['notif']          = $this->m_property->count_properti();
        $data['notifikasi']     = $this->m_property->notif_properti();

        /**
         * [$html call all wireframe]
         * @var array
         */
        $html = array();
        $html['header']     = $this->load->view('admin/header',$data,true);
        $html['kiri']       = $this->load->view('admin/kiri',null,true);
        $html['content']    = $this->load->view('admin/destination/tambah',$data,true);
        $this->load->view('admin/template',$html);
    }

    public function post(){
        $config['upload_path'] = "./upload/be/property/"; 
        $config['allowed_types'] = 'gif|jpg|png|JPEG'; 
        $config['file_name'] = '_'.date('Y_m_d_H_i_s');
        $config['max_size']    = '80000';
        $config['max_width']  = '4000';
        $config['max_height']  = '4000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if( !$this->upload->do_upload()){
            $data = array(
                            'username'      =>$this->input->post('username'),
                            'nama'          =>$this->input->post('nama'),
                            'jenis_properti'=>$this->input->post('tipe2'),
                            'alamat'        =>$this->input->post('alamat'),
                            'deskripsi'     =>$this->input->post('deskripsi'),

                            'lat'           =>$this->input->post('lat'),
                            'lon'           =>$this->input->post('lon'),

                            'nama_pengelola'=>$this->input->post('nama_pengelola'),
                            'nohp_pengelola'=>$this->input->post('no_hp'),
                            'kebijakan'     =>$this->input->post('kebijakan'),
                            'create_date'   =>$this->input->post('create_date'),
                            'verified'      =>$this->input->post('verified')
            );
            $this->m_property->post($data);
            redirect('admin/c_destination');
        }else{
            $upload = $this->upload->data();
            $data = array(
                            'username'      =>$this->input->post('username'),
                            'nama'          =>$this->input->post('nama'),
                            'jenis_properti'=>$this->input->post('tipe2'),
                            'alamat'        =>$this->input->post('alamat'),
                            'deskripsi'     =>$this->input->post('deskripsi'),

                            'lat'           =>$this->input->post('lat'),
                            'lon'           =>$this->input->post('lon'),

                            'nama_pengelola'=>$this->input->post('nama_pengelola'),
                            'nohp_pengelola'=>$this->input->post('no_hp'),
                            'kebijakan'     =>$this->input->post('kebijakan'),
                            'create_date'   =>$this->input->post('create_date'),
                            'verified'      =>$this->input->post('verified'),

                            'photo'         =>$upload['file_name']
            );
            $this->m_property->post($data);
            redirect('admin/c_destination');
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
        $data = array();
        $data['category']       = $this->m_category->get(); 
        $data['jenis']          = $this->m_property->getJenisdestination();
        $data['notif']          = $this->m_property->count_properti();
        $data['notifikasi']     = $this->m_property->notif_properti();
        $monyet['data']         = $this->m_property->get_id($id);

        /**
         * [$html call all wireframe]
         * @var array
         */
        $html = array();
        $html['header']     = $this->load->view('admin/header',$data,true);
        $html['kiri']       = $this->load->view('admin/kiri',null,true);
        $html['content']    = $this->load->view('admin/destination/ubah',$monyet,true);
        $this->load->view('admin/template',$html);
    }

    public function put(){
        $config['upload_path'] = "./upload/be/destination"; 
        $config['allowed_types'] = 'gif|jpg|png|JPEG'; 
        $config['file_name'] = '_'.date('Y_m_d_H_i_s');
        $config['max_size']    = '80000';
        $config['max_width']  = '4000';
        $config['max_height']  = '4000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if( !$this->upload->do_upload()){
            $id= $this->input->post('nID');
            $data = array(  'username'      =>$this->input->post('username'),
                            'nama'          =>$this->input->post('nama'),
                            'jenis_properti'=>$this->input->post('tipe2'),
                            'alamat'        =>$this->input->post('alamat'),
                            'deskripsi'     =>$this->input->post('deskripsi'),

                            'lat'           =>$this->input->post('lat'),
                            'lon'           =>$this->input->post('lon'),

                            'nama_pengelola'=>$this->input->post('nama_pengelola'),
                            'nohp_pengelola'=>$this->input->post('no_hp'),
                            'kebijakan'     =>$this->input->post('kebijakan'),
                            'create_date'   =>$this->input->post('create_date'),
                            'verified'      =>$this->input->post('verified')
            );
            $this->session->set_flashdata('success', 'Data destination berhasil diubah');
            $this->m_property->update($id,$data);
            redirect('admin/c_destination');
        }else{
            $upload = $this->upload->data();
            $id= $this->input->post('userid');
            $data = array(  'username'      =>$this->input->post('username'),
                            'nama'          =>$this->input->post('nama'),
                            'jenis_properti'=>$this->input->post('tipe2'),
                            'alamat'        =>$this->input->post('alamat'),
                            'deskripsi'     =>$this->input->post('deskripsi'),

                            'lat'           =>$this->input->post('lat'),
                            'lon'           =>$this->input->post('lon'),

                            'nama_pengelola'=>$this->input->post('nama_pengelola'),
                            'nohp_pengelola'=>$this->input->post('no_hp'),
                            'kebijakan'     =>$this->input->post('kebijakan'),
                            'create_date'   =>$this->input->post('create_date'),
                            'verified'      =>$this->input->post('verified'),

                            'photo'      => $upload['file_name']
            );
            $this->session->set_flashdata('success', 'Data destination berhasil diubah');
            $this->m_property->update($id,$data);
            redirect('admin/c_destination');
        }
    }

    public function delete(){
        $id = $this->uri->segment(4); 
        $h=$this->m_property->delete($id); 
        if($h==1451)
            $this->session->set_flashdata('message', $this->message->message_error('Gagal menghapus. Data tersebut sudah digunakan pada data lainnya'));
        else
            //$this->session->set_flashdata('message', $this->message->message_success('Berhasil menghapus Data'));
            redirect(base_url('admin/c_destination'));
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
