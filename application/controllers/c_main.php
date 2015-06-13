<?php
/**
 * Controller Main
 * Created by Rico Oktavian Adhi Wibowo
 */
class C_main extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function index(){
        $this->load->library('googlemaps');
        $config['center'] = "-2.401183, 116.543652"; //center of maps
        $config['panoramio'] = TRUE;
        $config['panoramioTag'] = 'sunset';
        $config['map_width'] = "100%";
        $config['map_height'] = "450px";
        $config['zoomControlPosition'] = "BOTTOM_LEFT"; //zoom control position
        $config['zoom'] = "5.0001"; //zoom value
        $this->googlemaps->initialize($config);
 
        // create marker for each province
        $this->load->model('m_property','m');
        foreach ($this->m->get() as $row){
            // Set the marker parameters as an empty array. Especially important if we are using multiple markers
            $marker = array();
            // Specify an address or lat/long for where the marker should appear.

            //$marker['icon']                 = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
            $marker['position']             = $row->lat.', '.$row->lon;
            $content                        = "<strong>".$row->nama_pengelola." </strong><br />".$row->nohp_pengelola;
            $marker['infowindow_content']   = $content;
            $marker['title']                = $row->nama_pengelola;
            // Once all the marker parameters have been specified lets add the marker to our map
            $this->googlemaps->add_marker($marker);
        }
        
        /**
         * get all from database
         */
        $data['map'] = $this->googlemaps->create_map();

        /**
         * [$html description]
         * @var array data all from component
         */
        $html = array();
        $html['component']  = $this->load->view('template/component');
        $html['header']     = $this->load->view('template/header');
        $html['content']    = $this->load->view('template/content',$data);
        $html['footer']     = $this->load->view('template/footer');
        $html['js']         = $this->load->view('template/js');
        $this->load->view('template/template',$html);
    }

    public function auth(){
        $html = array();
        $html['component']  = $this->load->view('template/component');
        $html['header']     = $this->load->view('template/header');
        $html['content']    = $this->load->view('template/auth/login-register');
        $html['footer']     = $this->load->view('template/footer');
        $html['js']         = $this->load->view('template/js');
        $this->load->view('template/template',$html);
    }
}