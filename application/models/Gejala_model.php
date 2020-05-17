<?php
class Gejala_model extends CI_model
{

	public function getAllGejala()
	{
		return $this->db->get('gejala')->result_array();
	}

	public function tambahDataGejala()
	{
		$data = [
			"gejala" => $this->input->post('gejala', true),
			"ket" => $this->input->post('ket', true),
		];
		return $this->db->insert('gejala', $data);
	}

	public function hapusDataGejala($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('gejala');
	}

	public function getGejalaById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('gejala')->row_array();
	}

	public function ubahDataGejala($id)
	{
		$data = [
			"gejala" => $this->input->post('gejala', true),
			"ket" => $this->input->post('ket', true),
		];
		$this->db->where('id', $id);
		return $this->db->update('gejala', $data);
	}

	public function cariDataGejala()
	{
		$keyword = $this->input->post('keyword', true);
		$where = "gejala like '%".$keyword."%'";
		$this->db->where($where);
		return $this->db->get('gejala')->result_array();
	}
}
