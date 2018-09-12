<?php
class M_Index extends CI_Model 
{
	public function __construct()
	{
		$this->load->database();
	}

	public function checkExistNomorInduk($nomorInduk, $username)
	{
		$checkExistNomorInduk 		= "	SELECT		COUNT(*) AS status_nomor_induk
										FROM 		smk7smg_prakerin.`user` as pklusr
										WHERE 		(
														pklusr.nomor_induk='".$nomorInduk."'
														OR 	pklusr.username='".$username."'
													);";
		$queryCheckExistNomorInduk 	= 	$this->db->query($checkExistNomorInduk);
		$hasilCheckExistNomorInduk 	= 	$queryCheckExistNomorInduk->result_array();

		return $hasilCheckExistNomorInduk[0]['status_nomor_induk'];
	}
	
	public function registerNewUser($register)
	{
		$this->db->insert('smk7smg_prakerin.`user`', $register);
	}

	public function validasiLogin($username, $password)
	{
		$validasiLogin 		= "	SELECT 		COUNT(*) AS status_login
								FROM 		smk7smg_prakerin.`user` as pklusr
								WHERE 		(
												pklusr.username='".$username."'
												OR 	pklusr.nomor_induk='".$username."'
											)
											AND 	pklusr.`password`='".$password."';";
		$queryValidasiLogin	=	$this->db->query($validasiLogin);
		$hasilValidasiLogin	= 	$queryValidasiLogin->result_array();
		return $hasilValidasiLogin[0]['status_login'];
	}

	public function ambilDataLogin($username)
	{
		$ambilDataLogin 		= "	SELECT		pklusr.nomor_induk as nomor_induk,
												pklusr.username as username,
												pklusr.fullname as nama_lengkap,
												pklusr.setting_id as setting_id
									FROM 		smk7smg_prakerin.`user` as pklusr
									WHERE 		(
													pklusr.username='".$username."'
													OR 	pklusr.nomor_induk='".$username."'
												);";
		$queryAmbilDataLogin 	= 	$this->db->query($ambilDataLogin);
		return 	$queryAmbilDataLogin->result_array();
	}
}