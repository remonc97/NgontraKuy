<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TaKon extends CI_Controller {
	
	public function __construct() {
		parent::__construct();	
		$this->load->model('Kontrakan');
			
	}

	public function index()
	{
		$this->load->view('Home');
	}
}
