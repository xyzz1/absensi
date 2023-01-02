<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->model('CRUD');
		$this->title = "Absensi";
	}
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
	public function index()
	{
		$data['page'] = 'profile';
		$data['title'] = $this->title;
		$this->load->view('master_front', $data);
	}

	public function login()
	{
		$data['page'] = 'login';
		$data['title'] = $this->title;
		$this->load->view('master_front', $data);
	}

	public function logout()
	{
		$data['page'] = 'logout';
		$data['title'] = $this->title;
		$this->load->view('master_front', $data);
	}

	public function edit()
	{
		$data['page'] = 'profile-edit';
		$data['title'] = $this->title;
		$this->load->view('master_front', $data);
	}

}
