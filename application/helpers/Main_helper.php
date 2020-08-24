<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('printStatus'))
{
    function printStatus($var)
    {
        $status;
        switch ($var) {
            case '1':
                $status = 'Active';
                break;
            case '0':
                $status = 'Disabled';
                break;
            default:
                $status = '(Undefined!)';
                break;
        }
        return $status;
    }   
}

if ( ! function_exists('printRole'))
{
    function printRole($var)
    {
        $role;
        switch ($var) {
            case '1':
                $role = 'Administrator';
                break;
            case '2':
                $role = 'Author';
                break;
            case '3':
                $role = 'Editor';
                break;
            default:
                $role = '(Undefined!)';
                break;
        }
        return $role;
    }   
}

if ( ! function_exists('get_setting')){
   function get_setting($key){
       //get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       
       //get data from database
       $ci->db->where('setting_name',$key);
       $query = $ci->db->get('m_setting');
       
       if($query->num_rows() > 0){
           $result = $query->row()->setting_value;
           return $result;
       }else{
           return false;
       }
   }
}