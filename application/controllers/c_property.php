<?php
/**
 * Controller Profile
 * Created by Rico Oktavian Adhi Wibowo
 */
class C_property extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_category');
        $this->load->model('m_user');
        $this->load->model('m_property');
        $this->load->helper('form');
        $this->load->library('upload');
    }

    public function index(){
        if($this->session->userdata('id')== null) redirect('c_auth');

        /**
         * get all from database
         */
        $data['category']   = $this->m_category->get(); 
        $data['profil']     = $this->m_user->getById($this->session->userdata('id'));
        $data['properti']   = $this->m_property->getMyProperty($this->session->userdata('username'));
        $data['jenis']      = $this->m_property->getJenis();

        /**
         * [$html description]
         * @var array data all component page
         */
        $html = array();
        $html['component']  = $this->load->view('template/component');
        $html['header']     = $this->load->view('template/header',$data);
        $html['content']    = $this->load->view('template/property/my_property',$data);
        $html['footer']     = $this->load->view('template/footer');
        $html['js']         = $this->load->view('template/js');
        $this->load->view('template/template',$html);
    }

    public function detail_property($id = NULL){
        if($this->session->userdata('id')== null) redirect('c_auth');

        /**
         * get all from database
         */
        $data['category']       = $this->m_category->get(); 
        $data['detail']     = $this->m_property->getById($id);

        /**
         * [$html description]
         * @var array data all component page
         */
        $html = array();
        $html['component']  = $this->load->view('template/component');
        $html['header']     = $this->load->view('template/header',$data);
        $html['content']    = $this->load->view('template/property/detail_property',$data);
        $html['footer']     = $this->load->view('template/footer');
        $html['js']         = $this->load->view('template/js');
        $this->load->view('template/template',$html);
    }

    public function add(){
        if($this->session->userdata('id')== null) redirect('c_auth');

        /**
         * get all from database
         */
        $data['category']       = $this->m_category->get(); 
        $data['profil'] = $this->m_user->getById($this->session->userdata('id'));
        $data['jenis']  = $this->m_property->getJenis();

        /**
         * [$html description]
         * @var array data all component page
         */
        $html = array();
        $html['component']  = $this->load->view('template/component');
        $html['header']     = $this->load->view('template/header',$data);
        $html['content']    = $this->load->view('template/property/add_property',$data);
        $html['footer']     = $this->load->view('template/footer');
        $html['js']         = $this->load->view('template/js');
        $this->load->view('template/template',$html);
    }

    public function add_proccess(){
        $config['upload_path'] = "./upload/property/"; 
        $config['allowed_types'] = 'gif|jpg|png|JPEG'; 
        $config['file_name'] = '_'.date('Y_m_d_H_i_s');
        $config['max_size']    = '80000';
        $config['max_width']  = '4000';
        $config['max_height']  = '4000';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if( !$this->upload->do_upload()){
            $data = array(
            'nama' => $this->input->post('nama'),
            'jenis_properti' =>$this->input->post('tipe2'),
            'alamat' =>$this->input->post('alamat'),
            'deskripsi' =>$this->input->post('deskripsi'),
            'luas_kamar' =>$this->input->post('luas_kamar'),
            'jumlah_kamar' => $this->input->post('jumlah_kamar'),
            'status' => $this->input->post('status'),

            'penghuni_pria' => $this->input->post('penghuni_pria'),
            'penghuni_wanita' => $this->input->post('penghuni_wanita'),
            'penghuni_keluarga' => $this->input->post('penghuni_keluarga'),
            'penghuni_suami_istri' => $this->input->post('penghuni_suami_istri'),
            'penghuni_pria_wanita' =>$this->input->post('penghuni_pria_wanita'),

            'untuk_pria' =>$this->input->post('untuk_pria'),
            'untuk_wanita' =>$this->input->post('untuk_wanita'),
            'untuk_keluarga' =>$this->input->post('untuk_keluarga'),
            'untuk_sumai_istri' =>$this->input->post('untuk_sumai_istri'),

            'umum_dapur' =>$this->input->post('umum_dapur'),
            'umum_balkon' =>$this->input->post('umum_balkon'),
            'umum_kulkas' =>$this->input->post('umum_kulkas'),
            'umum_tv' =>$this->input->post('umum_tv'),
            'umum_tamu' =>$this->input->post('umum_tamu'),
            'umum_km' =>$this->input->post('umum_km'),
            'umum_lain' =>$this->input->post('umum_lain'),

            'privat_kasur' =>$this->input->post('privat_kasur'),
            'privat_almari' =>$this->input->post('privat_almari'),
            'privat_meja' =>$this->input->post('privat_meja'),
            'privat_kursi' =>$this->input->post('privat_kursi'),
            'privat_ac' =>$this->input->post('privat_ac'),
            'privat_kmd' =>$this->input->post('privat_kmd'),
            'privat_tv' =>$this->input->post('privat_tv'),

            'lat' =>$this->input->post('lat'),
            'lon' =>$this->input->post('lon'),
            'harian' =>$this->input->post('harian'),
            'mingguan' =>$this->input->post('mingguan'),
            'bulanan' =>$this->input->post('bulanan'),
            'tahunan' =>$this->input->post('tahunan'),

            'nama_pengelola' =>$this->input->post('nama_pengelola'),
            'nohp_pengelola' =>$this->input->post('no_hp'),
            'kebijakan' =>$this->input->post('kebijakan')
            );
            $this->m_property->post($data);
            redirect('c_property');
        }else{
            $upload = $this->upload->data();
            $data = array(
            'nama' => $this->input->post('nama'),
            'jenis_properti' =>$this->input->post('tipe2'),
            'alamat' =>$this->input->post('alamat'),
            'deskripsi' =>$this->input->post('deskripsi'),
            'luas_kamar' =>$this->input->post('luas_kamar'),
            'jumlah_kamar' => $this->input->post('jumlah_kamar'),
            'status' => $this->input->post('status'),

            'penghuni_pria' => $this->input->post('penghuni_pria'),
            'penghuni_wanita' => $this->input->post('penghuni_wanita'),
            'penghuni_keluarga' => $this->input->post('penghuni_keluarga'),
            'penghuni_suami_istri' => $this->input->post('penghuni_suami_istri'),
            'penghuni_pria_wanita' =>$this->input->post('penghuni_pria_wanita'),

            'untuk_pria' =>$this->input->post('untuk_pria'),
            'untuk_wanita' =>$this->input->post('untuk_wanita'),
            'untuk_keluarga' =>$this->input->post('untuk_keluarga'),
            'untuk_sumai_istri' =>$this->input->post('untuk_sumai_istri'),

            'umum_dapur' =>$this->input->post('umum_dapur'),
            'umum_balkon' =>$this->input->post('umum_balkon'),
            'umum_kulkas' =>$this->input->post('umum_kulkas'),
            'umum_tv' =>$this->input->post('umum_tv'),
            'umum_tamu' =>$this->input->post('umum_tamu'),
            'umum_km' =>$this->input->post('umum_km'),
            'umum_lain' =>$this->input->post('umum_lain'),

            'privat_kasur' =>$this->input->post('privat_kasur'),
            'privat_almari' =>$this->input->post('privat_almari'),
            'privat_meja' =>$this->input->post('privat_meja'),
            'privat_kursi' =>$this->input->post('privat_kursi'),
            'privat_ac' =>$this->input->post('privat_ac'),
            'privat_kmd' =>$this->input->post('privat_kmd'),
            'privat_tv' =>$this->input->post('privat_tv'),

            'lat' =>$this->input->post('lat'),
            'lon' =>$this->input->post('lon'),
            'harian' =>$this->input->post('harian'),
            'mingguan' =>$this->input->post('mingguan'),
            'bulanan' =>$this->input->post('bulanan'),
            'tahunan' =>$this->input->post('tahunan'),

            'nama_pengelola' =>$this->input->post('nama_pengelola'),
            'nohp_pengelola' =>$this->input->post('no_hp'),
            'kebijakan' =>$this->input->post('kebijakan'),

            'photo' => $upload['file_name']
            );
            $this->m_property->post($data);
            redirect('c_property');
        }
    }
}