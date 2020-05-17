<?php
class xHidupSehat_model extends CI_model
{

	public function getAllHidupSehat()
	{
		return $this->db->get('sehat')->result_array();
	}

	public function getHidupSehatById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('sehat')->row_array();
	}

	public function cariDataHidupSehat()
	{
		$keyword = $this->input->post('keyword', true);
		$where = "sehat like '%".$keyword."%' OR dampak like '%".$keyword."%'";
		$this->db->where($where);
		return $this->db->get('sehat')->result_array();
	}
}
