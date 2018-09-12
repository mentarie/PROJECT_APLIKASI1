<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Jurnal extends CI_Controller 
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->model('M_Jurnal');
	}

	public function sessionCheck()
	{
		if(!($this->session->logged_in)) 
		{
			redirect('login');			
		}
	}

	public function index()
	{
		$this->sessionCheck();
		redirect('daftar_jurnal/index');
	}

	public function daftar_index()
	{
		$this->sessionCheck();

		$nomor_induk 		= 	$this->session->nomor_induk;

		$data['daftarJurnal'] 		= 	$this->M_Jurnal->ambilDaftarJurnal($nomor_induk);

		$data['highlight_jurnal'] 			= 	'active';
		$data['highlight_daftar_jurnal']	= 	'active';

		$this->load->view('template/V_Header');
		$this->load->view('template/V_Sidemenu', $data);
		$this->load->view('jurnal/V_Jurnal_Index', $data);
		$this->load->view('template/V_Footer');
	}

	public function daftar_create()
	{
		$this->sessionCheck();

		$nomor_induk 		= 	$this->session->nomor_induk;

		$data['highlight_jurnal'] 			= 	'active';
		$data['highlight_daftar_jurnal']	= 	'active';

		$this->form_validation->set_rules('txtTanggalJurnal', 'Tanggal Jurnal', 'required');
		$this->form_validation->set_rules('txaRincianJurnal', 'Rincian Jurnal', 'required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('template/V_Header');
			$this->load->view('template/V_Sidemenu', $data);
			$this->load->view('jurnal/V_Jurnal_Create', $data);
			$this->load->view('template/V_Footer');
		}
		else
		{
			$jurnalTanggal		=	date('Y-m-d', strtotime($this->input->post('txtTanggalJurnal')));
			$jurnalRincian 		=	filter_var(($this->input->post('txaRincianJurnal')), FILTER_SANITIZE_MAGIC_QUOTES, FILTER_SANITIZE_SPECIAL_CHARS);

			$statusJurnal		=	$this->M_Jurnal->cekStatusJurnal($jurnalTanggal, $nomor_induk);

			if($statusJurnal!=0)
			{
				redirect('daftar_jurnal/create');
			}
			else
			{
				$jurnal 	=	array(
									'nomor_induk'	=>	$nomor_induk,
									'journal_date'	=>	$jurnalTanggal,
									'journal_detail'=>	$jurnalRincian
								);
				$this->M_Jurnal->inputJurnal($jurnal);
				redirect('daftar_jurnal/index');				
			}
		}
		
	}

	public function daftar_update($idJurnal)
	{
		$this->sessionCheck();

		$nomor_induk 		= 	$this->session->nomor_induk;

		$data['id']			=	$idJurnal;

		$idJurnalDecoded	=	$this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '/', '='), $idJurnal));

		$data['highlight_jurnal'] 			= 	'active';
		$data['highlight_daftar_jurnal']	= 	'active';

		$data['detailJurnal']		=	$this->M_Jurnal->ambilDaftarJurnalDetail($idJurnalDecoded);

		$this->form_validation->set_rules('txtTanggalJurnal', 'Tanggal Jurnal', 'required');
		$this->form_validation->set_rules('txaRincianJurnal', 'Rincian Jurnal', 'required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('template/V_Header');
			$this->load->view('template/V_Sidemenu', $data);
			$this->load->view('jurnal/V_Jurnal_Update', $data);
			$this->load->view('template/V_Footer');
		}
		else
		{
			$jurnalTanggal		=	date('Y-m-d', strtotime($this->input->post('txtTanggalJurnal')));
			$jurnalRincian 		=	filter_var(($this->input->post('txaRincianJurnal')), FILTER_SANITIZE_MAGIC_QUOTES, FILTER_SANITIZE_SPECIAL_CHARS);

			$jurnal 	=	array(
								'nomor_induk'				=>	$nomor_induk,
								'journal_date'				=>	$jurnalTanggal,
								'journal_detail'			=>	$jurnalRincian,
								'entry_last_updated_time'	=>	date('Y-m-d H:i:s')
							);
			$this->M_Jurnal->updateJurnal($jurnal, $idJurnalDecoded);
			redirect('daftar_jurnal/index');
		}
		
	}

	public function daftar_delete()
	{
		$idJurnalHapus	=	$this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '/', '='), ($this->input->post('txtIDJurnalHapus'))));

		$this->M_Jurnal->deleteJurnal($idJurnalHapus);
		redirect('daftar_jurnal/index');
	}
}
