<?php
/**
 * Created by PhpStorm.
 * User: Nikko
 * Date: 17/04/2018
 * Time: 17:48
 */
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Model_Admin');
	}
	public function index()
	{
		$data['all'] = $this->Model_Admin->getUser();

		$this->load->view('admin',$data);
	}
	public function Penghuni()
	{
		$data['all'] = $this->Model_Admin->getUser();

		$this->load->view('Admin_Penghuni',$data);
	}
	public function view()
	{
		$data1['one'] = $this->Model_Admin->get1User($this->uri->segment(2));
		$this->load->view('Modal_Admin/ShowPemilik', $data1);
	}
}
