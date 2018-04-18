<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
	    if($this->User->ceksession() == true){
          $auth=$this->session->auth;
	        $data['session'] = true;
          $data['iduser']=$this->session->userdata('iduser');
	        $data['nama'] = $this->session->userdata('nama');
          $data['auth']=$auth;
            $this->load->view('profiluser',$data);
        }else{
            $this->load->view('profiluser',$data);
        }
  }
  
}
