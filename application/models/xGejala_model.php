<?php
class xGejala_model extends CI_model
{

	public function getAllGejala()
	{
		return $this->db->get('gejala')->result_array();
	}

	public function getGejalaById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('gejala')->row_array();
	}

	public function cariDataGejala()
	{
		$keyword = $this->input->post('keyword', true);
		$where = "gejala like '%".$keyword."%'";
		$this->db->where($where);
		return $this->db->get('gejala')->result_array();
	}
}
