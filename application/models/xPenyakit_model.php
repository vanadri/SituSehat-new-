<?php
class xPenyakit_model extends CI_model
{

	public function getAllPenyakit()
	{
		return $this->db->get('penyakit')->result_array();
	}

	public function getPenyakitById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('penyakit')->row_array();
	}

	public function cariDataPenyakit()
	{
		$keyword = $this->input->post('keyword', true);
		$where = "penyakit like '%".$keyword."%' OR ket like '%".$keyword."%' OR penyembuhan like '%".$keyword."%'";
		$this->db->where($where);
		return $this->db->get('penyakit')->result_array();
	}
}
