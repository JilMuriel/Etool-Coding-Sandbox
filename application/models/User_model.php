<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function m_login($username, $password) {
		$this->load->database();
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		$query = $this->db->get('tbl_account');

		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}
	public function m_register($id, $data) {
		$this->load->database();
		
		$this->db->where('account_id', $id);
		$this->db->update('tbl_account', $data);
		
		// return $this->db->insert('account', $data);
	}
	public function id_verify($account_id) {
		$this->load->database();
		$this->db->where('account_id', $account_id);

		$query = $this->db->get('tbl_account');
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else {
			return false;
		}
	}
	public function getreq(){
	$this->load->database();
    $query=$this->db->get('tbl_user_student');
    $result=$query->result();
    $num_rows=$query->num_rows();
    $last_three_record=array_slice($result,-3,3,true);
    return array("all_data"=>$result,"num_rows"=>$num_rows,"last_three"=>$last_three_record);
	}
}
?>