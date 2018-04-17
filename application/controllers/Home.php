<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kontrakan');
	}

	public function index()
	{
	    $data['featured'] = $this->Kontrakan->getFeatured();
		$this->load->view('home',$data);
	}
}
