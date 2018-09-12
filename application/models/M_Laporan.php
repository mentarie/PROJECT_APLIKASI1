<?php
class M_Laporan extends CI_Model 
{
	public function __construct()
	{
		$this->load->database();
	}

	public function ambilBab3($nomor_induk)
	{
		$this->db->select('*');
		$this->db->from('smk7smg_prakerin.laporan_bab3');
		$this->db->where('nomor_induk=', $nomor_induk);

		return $this->db->get()->result_array();
	}

	public function insertBab3($bab3_create)
	{
		$this->db->insert('smk7smg_prakerin.laporan_bab3', $bab3_create);
	}

	public function updateBab3($bab3_update, $idBab3)
	{
		$this->db->where('bab3_id=', $idBab3);
		$this->db->update('smk7smg_prakerin.laporan_bab3', $bab3_update);
	}
}