<?php
class Login_model extends CI_Model{

	protected $_table = 'profile';

	public function check_username($username){
		//check if username (from param) already exist in db or not, return true / false
		return (sizeof($this->db->get_where($this->_table, ['username', $username])->result_array()[0]) > 0);
	}

	public function login($data) {
		//check if data (consist of username and password) exist/found in db, return true / false
		$this->db->where('username', $data['username']);
		$is_available = $this->db->get($this->_table)->result_array();
		return (sizeof($is_available) > 0) && ($is_available['password'] == $data['password']);

	}

	public function insert_new_profle($data){
		//insert data (consist of username, password, and profile pic filename) to table, return true if insert works and vice versa
		return $this->db->insert($this->_table, $data);
		// return true; //delete if not necessary, it's just there to prevent error
	}

	public function get_profile($username){
		//select 1 row profile based on username (from param) and return it, if the data is not found then return false
		$this->db->where('username', $username);
		$data = $this->db->get($this->_table)->result_array();
		return $data;
	}
}
?>