<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('is_login')) {
        //     redirect('mypanel/dashboard', 'refresh');
        // }

        
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['title'] = 'Login Administrator';
        $this->load->view('admin/login', $data);

        
        // echo base_url();
    }
    
    public function login()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required', [
            'required'	=>	'Kolom ini tidak boleh kosong',
            'valid_email'=>	'Username tidak valid']);
        $this->form_validation->set_rules('password', 'password', 'trim|required', [
                    'required'	=>	'Kolom ini tidak boleh kosong']);
        if($this->form_validation->run() == FALSE) {
           $this->index();
        }else {
            // Valid Input
            $username		=	$this->input->post('username');
            $password	    =	$this->input->post('password');

            $cekadm = $this->log_mod($username);
            if($cekadm) {
                if(password_verify($password, $cekadm['admin_password'])) {
                    $admin = array (
                        'adminid'					=>	$cekadm['id'],
                        'adminuname'				=>	$cekadm['admin_username'],
                        'adminame'					=>	$cekadm['admin_name'],
                        'adminmail'					=>	$cekadm['admin_email'],
                        'adminsandi'				=>	$cekadm['admin_sandi'],
                        'adminfoto'					=>	$cekadm['admin_foto'],
                        'adminrole'					=>	$cekadm['admin_role'],
                        'is_login'				    =>	TRUE
                    );

                    $this->session->set_userdata($admin);
                    redirect('mypanel/dashboard');
                }else {
                    $this->session->set_flashdata('error','Password anda salah');
                    redirect('mypanel/auth');
                }
            }else {
                $this->session->set_flashdata('error','Info login tidak terdaftar');
                redirect('mypanel/auth');
            }

        }
    }

    private function log_mod($email) {
		$this->db->where('admin_username', $email);
		// $this->db->or_where('admin_email', $email);
		return $this->db->get('m_admin')->row_array();
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
		redirect('mypanel/auth');
    }

}
