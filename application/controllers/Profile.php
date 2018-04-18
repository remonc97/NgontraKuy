<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
	    if($this->User->ceksession() == true){
	        $data['session'] = true;
          $data['iduser']=$this->session->userdata('iduser');
	        $data['nama'] = $this->session->userdata('nama');
            $this->load->view('profiluser',$data);
        }else{
            $this->load->view('profiluser',$data);
        }
  }
  public function view($iduser){
    if($this->session->nama==null){
      redirect('');
    }
    $nama=$this->session->nama;
    $auth=$this->session->auth;
    $result=$this->User->getUser($iduser);
    $data['data']=$result;
    $data['nama']=$nama;
    $data['auth']=$auth;
    $this->load->view('profiluser',$data);
    }
}
