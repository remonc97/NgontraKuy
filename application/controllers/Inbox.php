<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

	public function index()
	{
	    $this->load->view('template/header');
	    $this->load->view('InboxCustomer');
	    $this->load->view('modalInbox/EntryPesan');
	    $this->load->view('template/footer');
	}
}
