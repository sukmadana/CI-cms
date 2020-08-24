<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function rules() {
		return [
			[
				'field'	=> 'username',
				'label'	=> 'Username',
				'rules'	=> 'trim|required'
			],
			[
				'field'	=> 'email',
				'label'	=> 'Email',
				'rules'	=> 'trim|required|valid_email'
			],
			[
				'field'	=> 'name',
				'label'	=> 'Name',
				'rules'	=> 'trim|required'
			],
			[
				'field'	=> 'role',
				'label'	=> 'User Role',
				'rules'	=> 'trim|required'
			]
		];
	}

	public function getUserData() {
		$this->db->from('m_admin');
		$query = $this->db->get();
		return $query->result();
	}

	public function getAll() {
		return $this->db->get('m_admin')->result();
	}

	public function getById($id) {
		return $this->db->get_where('m_admin', ['id' => $id])->row();
	}

	public function cekUsername() {
		$username = $this->input->post('username');

		$this->db->where('admin_username', $username);
		$query = $this->db->get('m_admin');
		
		if ($query->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function save() {
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		$email		= $this->input->post('email');
		$name		= $this->input->post('name');
		$foto		= 'default.jpg';
		$role		= $this->input->post('role');
		$status		= '1';

		$data = [
			"admin_username"	=> $username,
			"admin_password"	=> password_hash($password, PASSWORD_BCRYPT),
			"admin_email"		=> $email,
			"admin_name"		=> $name,
			"admin_foto"		=> $foto,
			"admin_role"		=> $role,
			"admin_status"		=> $status
		];

		return $this->db->insert('m_admin', $data);
	}

	public function update($id) {

		$username	= $this->input->post('username');
		$email		= $this->input->post('email');
		$name		= $this->input->post('name');
		$role		= $this->input->post('role');
		$status		= $this->input->post('status');

		$data = [
			"admin_username"	=> $username,
			"admin_email"		=> $email,
			"admin_name"		=> $name,
			"admin_role"		=> $role,
			"admin_status"		=> $status
		];

		$this->db->where('id', $id);
		return $this->db->update('m_admin', $data);
	}

	public function delete($id) {
		$this->db->where('id', $id);
		return $this->db->delete('m_admin');
	}

	public function cek_ganti_password() {
		$password = $this->input->post('password');
		$new_password = password_hash($this->input->post('new_password'), PASSWORD_DEFAULT);
		$cek = $this->db->get_where('m_admin',['id' => $this->session->userdata('adminid')])->row_array();

		if(password_verify($password, $cek['admin_password'])) {
			$this->db->set('admin_password', $new_password);
			$this->db->where('id', $this->session->userdata('adminid'));
			$this->db->update('m_admin');
			$this->session->set_flashdata('success', 'Sandi anda berhasil diperbaharui');
			redirect('mypanel/user/changePassword');
		}else {
			$this->session->set_flashdata('error', 'Konfirmasi kata sandi salah');
			redirect('mypanel/user/changePassword');
		}
	}


}