<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
	    if($this->User->ceksession() == true){
          // die('masuk');
          $auth=$this->session->auth;
	        $data['session'] = true;
          $iduser=$this->uri->segment(2);
          $datauser=$this->User->getUser($iduser);
          $data['datauser']=$datauser;
	        $data['nama'] = $this->session->userdata('nama');
          $data['auth']=$auth;
            $this->load->view('profiluser',$data);
        }else{
            redirect('/','refresh');
        }
  }

}
