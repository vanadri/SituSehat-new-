<?php
class Penyakit_model extends CI_model
{

	public function getAllPenyakit()
	{
		return $this->db->get('penyakit')->result_array();
	}

	public function tambahDataPenyakit()
	{
		$data = [
			"penyakit" => $this->input->post('penyakit', true),
			"ket" => $this->input->post('ket', true),
			"penyembuhan" => $this->input->post('penyembuhan', true),
		];
		return $this->db->insert('penyakit', $data);
	}

	public function hapusDataPenyakit($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('penyakit');
	}

	public function getPenyakitById($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('penyakit')->row_array();
	}

	public function ubahDataPenyakit($id)
	{
		$data = [
			"penyakit" => $this->input->post('penyakit', true),
			"ket" => $this->input->post('ket', true),
			"penyembuhan" => $this->input->post('penyembuhan', true),
		];
		$this->db->where('id', $id);
		return $this->db->update('penyakit', $data);
	}

	public function cariDataPenyakit()
	{
		$keyword = $this->input->post('keyword', true);
		$where = "penyakit like '%".$keyword."%' OR ket like '%".$keyword."%' OR penyembuhanlike '%".$keyword."%'";
		$this->db->where($where);
		return $this->db->get('penyakit')->result_array();
	}
}
