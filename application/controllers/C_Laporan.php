<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Laporan extends CI_Controller 
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
		$this->load->model('M_Laporan');

		date_default_timezone_set('Asia/Jakarta');
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
		$this->load->view('template/V_Header');
		$this->load->view('template/V_Sidemenu');
		$this->load->view('template/V_Footer');
	}

	public function bab3()
	{
		$this->sessionCheck();

		$nomor_induk 		=	$this->session->nomor_induk;

		$data['bab3'] 		=	$this->M_Laporan->ambilBab3($nomor_induk);

		$data['highlight_laporan'] 			= 	'active';
		$data['highlight_laporan_bab3']		= 	'active';

		$this->load->view('template/V_Header');
		$this->load->view('template/V_Sidemenu', $data);
		$this->load->view('laporan/V_Laporan_Index', $data);
		$this->load->view('template/V_Footer');		
	}

	public function bab3_modification()
	{
		$this->sessionCheck();

		$nomor_induk 		=	$this->session->nomor_induk;

		$detailBab3 		= 	$this->input->post('txaRincianBab3');
		$idBab3 			=	$this->encryption->decrypt(str_replace(array('-', '_', '~'), array('+', '/', '='), $this->input->post('idBab3')));

		if($idBab3=='-')
		{
			$waktuEksekusi 	=	date('Y-m-d H:i:s');
			$bab3_create 	=	array(
									'nomor_induk'	=>	$nomor_induk,
									'bab3_detail'	=>	$detailBab3,
									'entry_time'	=>	$waktuEksekusi
								);
			$this->M_Laporan->insertBab3($bab3_create);
		}
		else
		{
			$waktuEksekusi 	=	date('Y-m-d H:i:s');
			$bab3_update 	=	array(
									'bab3_detail'				=>	$detailBab3,
									'entry_last_updated_time'	=>	$waktuEksekusi
								);
			$this->M_Laporan->updateBab3($bab3_update, $idBab3);
		}

		redirect('laporan_bab3');
	}
}
