<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('is_login')){
            redirect('mypanel/auth','refresh');
        }

        $this->load->model('user_model');
        $this->load->helper('Main_helper');
    }

    public function index()
    {
        $data['users'] = $this->user_model->getUserData();

        $data['title'] = 'User';
        $data['content'] = 'admin/user_list';
        $this->load->view('admin/main_part',$data);
    }

    public function add()
    {
        $data['title'] = 'Create new user';
        $data['content'] = 'admin/user_add';
        $this->load->view('admin/main_part',$data);
    }

    public function store()
    {
        $terms = $this->input->post('terms');
        $user = $this->user_model;
        $validation = $this->form_validation;


        if($terms == '1') {
            if($user->cekUsername()) {
                $this->session->set_flashdata('error', 'Username is already registered.');
                redirect('mypanel/user/add');

            } else {
                $validation->set_rules($user->rules());
                $validation->set_rules('password','Password', 'trim|required|xss_clean');
                if($validation->run()) {
                    $user->save();
                    $this->session->set_flashdata('success', 'User Data created succesfully.');
                    
                    redirect('mypanel/user','refresh');
                    
                }else {
                    redirect('mypanel/user/add');
                }
                

            }
            
        } else {
            $this->session->set_flashdata('error', 'Please check and agree our terms!');
            redirect('mypanel/user/add');
        }

        // $this->add();
    }

    public function edit($id = null)
    {
        if (!isset($id)) show_404();

        $data['user'] = $this->user_model->getById($id);
        $data['title'] = 'Edit user';
        $data['content'] = 'admin/user_edit';
        $this->load->view('admin/main_part',$data);
    }

    public function update($id = null)
    {
        if (!isset($id)) show_404();

        $terms = $this->input->post('terms');
        $user = $this->user_model;
        $validation = $this->form_validation;


        if($terms == '1') {
            if($user->cekUsername()) {
                
                $validation->set_rules($user->rules());
                if($validation->run()) {
                    $user->update($id);
                    $this->session->set_flashdata('success', 'User Data was updated succesfully.');
                    
                    redirect('mypanel/user','refresh');
                    
                }else {
                    redirect('mypanel/user/edit/'.$id);
                }
            } else {
                
                $this->session->set_flashdata('error', 'Username can\'t be modified.');
                redirect('mypanel/user/edit/'.$id);

            }
            
        } else {
            $this->session->set_flashdata('error', 'Please check and agree our terms!');
            redirect('mypanel/user/edit/'.$id);
        }
    }

    public function delete($id = null) 
    {
        if (!isset($id)) show_404();
        
        if ($this->user_model->delete($id)) {
            redirect(site_url('mypanel/user'));
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change password';
        $data['content'] = 'admin/user_change_password';

        $this->form_validation->set_rules('password', 'password', 'required', [
                    'required'	=>	'Kolom ini tidak boleh kosong',
                    'min_length'=>	'Minimal 5 karakter']);
        $this->form_validation->set_rules('new_password', 'new_password', 'required|min_length[5]', [
                    'required'	=>	'Kolom ini tidak boleh kosong',
                    'min_length'=>	'Minimal 5 karakter']);
        $this->form_validation->set_rules('new_password_confirm', 'new_password_confirm', 'required|matches[new_password]', [
                    'required'	=>	'Kolom ini tidak boleh kosong',
                    'matches'	=>	'Konfirmasi sandi baru harus sama']);
        

        if($this->form_validation->run() == TRUE) {
            $this->user_model->cek_ganti_password();
        } else {
            $this->load->view('admin/main_part',$data);
        }
    }
}