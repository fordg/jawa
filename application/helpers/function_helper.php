<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Script Lisence GNU 
 * © 2015 Iwan Gunawan, All right reserved.
 */
if(!function_exists('encrypt')){
    function encrypt($value){
        $salt = '4ku6anttenGGG';
        return md5($salt.$value);
    }
}

if (!function_exists('active_url')){
    function active_url($url = ''){
        return (current_url() == $url) ? 'active' : '';
    }
}

if ( ! function_exists('pretty_date'))
{
    function pretty_date($date = '', $format = '', $timezone = TRUE)
    {
        // Empty date
        if($date == '0000-00-00 00:00:00' OR empty($date))
        {
            return '';
        }

        $date_str = strtotime($date);

        if(empty($format))
        {
            $date_pretty = date('l, d/m/Y H:i', $date_str);
        }
        else
        {
            $date_pretty = date($format, $date_str);
        }

        if($timezone)
        {
            $date_pretty .= ' WIB';
        }

        $date_pretty = str_replace('Sunday', 'Minggu', $date_pretty);
        $date_pretty = str_replace('Monday', 'Senin', $date_pretty);
        $date_pretty = str_replace('Tuesday', 'Selasa', $date_pretty);
        $date_pretty = str_replace('Wednesday', 'Rabu', $date_pretty);
        $date_pretty = str_replace('Thursday', 'Kamis', $date_pretty);
        $date_pretty = str_replace('Friday', 'Jumat', $date_pretty);
        $date_pretty = str_replace('Saturday', 'Sabtu', $date_pretty);

        $date_pretty = str_replace('January', 'Januari', $date_pretty);
        $date_pretty = str_replace('February', 'Februari', $date_pretty);
        $date_pretty = str_replace('March', 'Maret', $date_pretty);
        $date_pretty = str_replace('April', 'April', $date_pretty);
        $date_pretty = str_replace('May', 'Mei', $date_pretty);
        $date_pretty = str_replace('June', 'Juni', $date_pretty);
        $date_pretty = str_replace('July', 'Juli', $date_pretty);
        $date_pretty = str_replace('August', 'Agustus', $date_pretty);
        $date_pretty = str_replace('September', 'September', $date_pretty);
        $date_pretty = str_replace('October', 'Oktober', $date_pretty);
        $date_pretty = str_replace('November', 'November', $date_pretty);
        $date_pretty = str_replace('December', 'Desember', $date_pretty);
        
        return $date_pretty;
    }
}
?>