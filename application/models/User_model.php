<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function m_login($username, $password) {
		$this->load->database();
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$query = $this->db->get('tbl_login_view');

		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}
	public function m_register() {
		$this->load->database();
		$data = array(
			'username' => $this->input->post('txtusername'),
			'password' => md5($this->input->post('txtpassword')),
			'email' => $this->input->post('txtemail'),
			'fname' => $this->input->post('txtfname'),
			'lname' => $this->input->post('txtlname')
		);
		return $this->db->insert('tbl_user', $data);
	}
}
?>