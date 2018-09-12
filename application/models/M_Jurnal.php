<?php
class M_Jurnal extends CI_Model 
{
	public function __construct()
	{
		$this->load->database();
	}

	public function ambilDaftarJurnal($nomor_induk)
	{

		$ambilDaftarJurnal 			= "	SELECT 		pkljrnl.journal_id as id_jurnal,
													pkljrnl.journal_date as tanggal_jurnal,
													pkljrnl.journal_detail as jurnal_detail,
													pkljrnl.entry_time as waktu_input
										FROM 		smk7smg_prakerin.daily_journal as pkljrnl
										WHERE 		pkljrnl.nomor_induk='".$nomor_induk."'
										ORDER BY 	pkljrnl.journal_date DESC;";
		$queryAmbilDaftarJurnal		=	$this->db->query($ambilDaftarJurnal);			

		return $queryAmbilDaftarJurnal->result_array();
	}

	public function ambilDaftarJurnalDetail($idJurnal)
	{
		$ambilDaftarJurnalDetail 			= "	SELECT 		pkljrnl.journal_id as id_jurnal,
															pkljrnl.journal_date as tanggal_jurnal,
															pkljrnl.journal_detail as jurnal_detail,
															pkljrnl.entry_time as waktu_input
												FROM 		smk7smg_prakerin.daily_journal as pkljrnl
												WHERE 		pkljrnl.journal_id=".$idJurnal."
												ORDER BY 	pkljrnl.journal_date DESC;";
		$queryAmbilDaftarJurnalDetail		=	$this->db->query($ambilDaftarJurnalDetail);			

		return $queryAmbilDaftarJurnalDetail->result_array();
	}

	public function inputJurnal($jurnal)
	{
		$this->db->insert('smk7smg_prakerin.daily_journal', $jurnal);
	}

	public function updateJurnal($jurnal, $idJurnalDecoded)
	{
		$this->db->where('journal_id', $idJurnalDecoded);
		$this->db->update('smk7smg_prakerin.daily_journal', $jurnal);
	}

	public function deleteJurnal($idJurnalHapus)
	{
		$this->db->where('journal_id', $idJurnalHapus);
		$this->db->delete('smk7smg_prakerin.daily_journal');
	}

	public function cekStatusJurnal($jurnalTanggal, $nomor_induk)
	{
		$cekStatusJurnal 			= "	SELECT		COUNT(*) as status_jurnal
										FROM 		smk7smg_prakerin.daily_journal AS pkljrnl
										WHERE 		pkljrnl.nomor_induk='".$nomor_induk."'
													AND 	pkljrnl.journal_date='".$jurnalTanggal."'";
		$queryCekStatusJurnal 		= 	$this->db->query($cekStatusJurnal);
		$hasilCekStatusJurnal 		= 	$queryCekStatusJurnal->result_array();
		return $hasilCekStatusJurnal[0]['status_jurnal'];
	}
}