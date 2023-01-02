<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
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
		$data['page'] = 'home';
		$data['title'] = $this->title;
		$this->load->view('master_front', $data);
	}
	public function profile()
	{
		return "ok";
	}

	public function plan()
	{
		if (!isset($_SESSION['user'])) {
			$this->session->set_flashdata('error', 'Anda Belum Login');
			redirect('login');
		}
		$id = $_SESSION['user']['id_user'];

		$data['page'] = 'plan';
		$data['title'] = 'Plan Deposit';
		$data['user'] = $this->CRUD->join_left_where_row('users', 'history_pakets', 'users.id_hpaket=history_pakets.id_hpaket', 'users.id_user', $id);
		$data['pakets'] = $this->CRUD->get_where_orderBy('pakets', 'nama_paket !=', 'FREE', 'harga_paket', 'ASC');
		$data['deposits'] = $this->CRUD->getDeposits();
		$data['withdraws'] = $this->CRUD->getWithDraws();
		$this->load->view('Front/master', $data);
	}

	public function faq()
	{
		$data['page'] = 'faq';
		$data['title'] = 'Frequently Asked Questions FAQ';
		$this->load->view('Front/master', $data);
	}
}
