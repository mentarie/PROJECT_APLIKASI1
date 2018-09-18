<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Index extends CI_Controller 
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
		$this->load->model('M_Index');
		$this->load->helper('url');
	}

	public function index()
	{

		$this->load->view('index');
	}
	public function login_register()
	{

		$this->load->view('login_register');
	}
	public function manage_event()
	{

		$this->load->view('manage_event');
	}
	public function manage_event_2()
	{

		$this->load->view('manage_event_2');
	}
	public function dashboard_tracking()
	{

		$this->load->view('dashboard_tracking');
	}

}
