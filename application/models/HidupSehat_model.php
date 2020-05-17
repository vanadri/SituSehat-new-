<?php
class HidupSehat_model extends CI_model
{

	public function getAllHidupSehat()
	{
		return $this->db->get('sehat')->result_array();
	}

	public function tambahDataHidupSehat()
	{
		$data = [
			"sehat" => $this->input->post('sehat', true),
			"dampak" => $this->input->post('dampak', true),
		];
		return $this->db->insert('sehat', $data);
	}

	public function hapusDataHidupSehat($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('sehat');
	}

	public function getHidupSehatById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('sehat')->row_array();
	}

	public function ubahDataHidupSehat($id)
	{
		$data = [
			"sehat" => $this->input->post('sehat', true),
			"dampak" => $this->input->post('dampak', true),
		];
		$this->db->where('id', $id);
		return $this->db->update('sehat', $data);
	}

	public function cariDataHidupSehat()
	{
		$keyword = $this->input->post('keyword', true);
		$where = "sehat like '%".$keyword."%' OR dampak like '%".$keyword."%'";
		$this->db->where($where);
		return $this->db->get('sehat')->result_array();
	}
}
