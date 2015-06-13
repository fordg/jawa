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
?>