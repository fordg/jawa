<?php
class M_hit extends CI_Model{
    public function __construct(){
      //$this->counter();    
    }
  
    public function get_data(){
        $this->db->where('id',1);
        $res = $this->db->get('hit_counter');
        return $res->row();
    }
    
    public function update($id,$data){
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('hit_counter');
    }
   
    public function counter(){
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $chrome = '/Chrome/';
        $firefox = '/Firefox/';
        $ie = '/MSIE/';
        if (preg_match($chrome, $browser))
            $data = "Chrome/Opera";
        if (preg_match($firefox, $browser))
            $data = "Firefox";
        if (preg_match($ie, $browser))
            $data = "IE";

        //Get information from visitor
        $ipaddress = $_SERVER['REMOTE_ADDR']."";
        $browser = $data;
        $tanggal = date('Y-m-d');
        $kunjungan = 1;

        //Registration session and save to database
        if (!isset($_SESSION['visitor'])){
        $_SESSION['visitor']=$ipaddress;
          //setcookie('visitor', $ipaddress, time() +3600);
            $this->db->query("INSERT INTO visitor (tanggal,ip_address,counter,browser) VALUES ('".$tanggal."','".$ipaddress."','".$kunjungan."','".$browser."')");
        }          
    }

    public function kemarin(){
        $tgl_kemarin    = date("Y-m-d",mktime(0,0,0,date('m'),date('d')-1,date('Y')));
        $kemarin    = $this->db->query('SELECT sum(counter) AS kemarin FROM visitor WHERE tanggal="'.$tgl_kemarin.'"');
        return $kemarin->row_array();    
    }
    
    public function hari_ini(){
        $hari_ini   = $this->db->query('SELECT sum(counter) AS hari_ini FROM visitor WHERE tanggal="'.date("Y-m-d").'"');
        return $hari_ini->row_array();   
    }
    
    public function total(){     
        $sql = $this->db->query('SELECT sum(counter) as total FROM visitor');  
        return $sql->row_array();   
    }
}
?>