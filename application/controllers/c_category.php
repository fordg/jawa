<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_category extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_category');
    }

    public function detail_category(){
        $data['category']       = $this->m_category->get();     
        /**
         * [$html description]
         * @var array data all from component
         */
        $html = array();
        $html['component']  = $this->load->view('template/component');
        $html['header']     = $this->load->view('template/header',$data);
        $html['content']    = $this->load->view('template/category/detail_category');
        $html['footer']     = $this->load->view('template/footer');
        $html['js']         = $this->load->view('template/js');
        $this->load->view('template/template',$html);
    }
}