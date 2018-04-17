<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['featured'] = $this->Kontrakan->getFeatured();
	    if($this->User->ceksession() == true){
	        $data['session'] = true;
	        $data['nama'] = $this->session->userdata('nama');
            $this->load->view('home',$data);
        }else{
            $this->load->view('home',$data);
        }
	}
	public function Agents(){
	    $this->load->view('agents');
    }
	public function About(){
	    $this->load->view('about');
    }
	public function Contact(){
	    $this->load->view('contact');
    }
}
