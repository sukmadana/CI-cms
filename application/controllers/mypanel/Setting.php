<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('is_login')) {
            redirect('mypanel/auth', 'refresh');
        }

        $this->load->helper('Main_helper');
        $this->load->model('setting_model');
    }

    public function index()
    {
        $data['title'] = 'General Setting';
        $data['js'] = array('admin/js/general_setting_js');
        $data['content'] = 'admin/setting_general';

        if($this->input->post()) {
            if($this->setting_model->saveGeneralSetting()){
                $this->session->set_flashdata('success','Your setting was updated successfully');
            } else {
                $this->session->set_flashdata('error','Your setting can\'t be update because there are something wrong');
            }
            
        } 

        $this->load->view('admin/main_part', $data);
    }

    public function sitestatus()
    {
        $data['title'] = 'Website Status';
        $data['content'] = 'admin/site_status';
        $this->load->view('admin/main_part', $data);
    }

    
}