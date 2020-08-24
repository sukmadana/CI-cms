<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model {


    public function saveGeneralSetting() 
    {
        $site_name          = $this->input->post('site_name');
        $site_slogan        = $this->input->post('site_slogan');
        $company_name       = $this->input->post('company_name');
        $company_address    = $this->input->post('company_address');
        $company_city       = $this->input->post('company_city');
        $company_state      = $this->input->post('company_state');
        $company_phone      = $this->input->post('company_phone');
        $company_email      = $this->input->post('company_email');
        $company_logo       = $this->input->post('company_logo');

        $datas = [
            'site_name'             => $site_name,
            'site_slogan'           => $site_slogan,
            'company_name'          => $company_name,
            'company_address'       => $company_address,
            'company_city'          => $company_city,
            'company_state'         => $company_state,
            'company_phone'         => $company_phone,
            'company_email'         => $company_email,
            'company_logo'          => $company_logo 
        ];

        foreach ($datas as $key => $value) {
            $this->db->set('setting_value', $value);
            $this->db->where('setting_name', $key);
            $query = $this->db->update('m_setting');
        }
        
        return $query;
        
    }
}