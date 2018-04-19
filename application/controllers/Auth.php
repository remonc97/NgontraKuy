<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {

//	public function Add(){
//		if($this->session->nama==NULL){
//			redirect('');
//		}
//
//		$nama = $this->session->nama;
//		$auth = $this->session->auth;
//		$data['nama'] = $nama;
//		$data['auth'] = $auth;
//		$this->load->view('register',$data);
//	}
	
//	public function NewData(){
//		$this->load->view('register');
//	}
	
	public function InsetData(){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$tgllahir = $this->input->post('tgllahir');
		$notelp = $this->input->post('notelp');
		
		$data = array(
		'nama' =>$nama,
		'email' =>$email,
		'password'=> md5($password),
		'tgllahir'=> $tgllahir,		
		'notelp'=>$notelp
		);
		
		$result = $this->CRUDregist->InsertUser($data);
		$data = NULL;
		if ($result){
			redirect('Home');
		}else{
			echo json_encode(array('Gagal' => false));
		}	
	}
	
	public function Edit($id){
		if($this->session->name==NULL){
			redirect('');	
		}
		
		$nama = $this->session->name;
		$auth = $this->session->auth;		
		$result = $this->CRUDregis->getUser($id);
		
		$data['iduser'] = $id;
		$data['data'] = $result;
		$data['nama'] = $nama;
		$data['auth'] = $auth;
		$this->load->view('Edit',$data);
		
	}

	public function EditData(){
		$id = $this->input->post('iduser');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$tgllahir = $this->input->post('tgllahir');
		$notelp = $this->input->post('notelp');
		
		$data = array(
		'nama' => $nama,
		'email' => $email,
		'password'=> md5($password),
		'tgllahir'=>$tgllahir,
		'notelp' =>$notelp
		);
		
		$result = $this->CRUDregist->UpdateUser($id,$data);
		$data = NULL;
		if ($result){
			redirect('Home');
		}else{
			echo json_encode(array('success' => false));
		}
	}

	public function DeleteData($id){
		$result = $this->CRUDregist->DeleteUser($id);
		if ($result){
			redirect('Home');
		}else{
		}
	}
	
//	public function ShowSession(){
//
//		$username = $this->session->username;
//
//		$data['email'] = $email;
//
//		$this->load->view('ShowSession',$data);
//	}

    public function login(){
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
        $db = $this->User->ceklogin($data);
        if($db != null){
            if($this->makesession($db) == true){
                redirect('/','refresh');
            }
        }else{
            redirect('/','refresh');
        }
    }
    public function makesession($db){
        $session = array(
            'email' => $db->email,
            'nama' => $db->nama,
            'auth' => $db->auth,
        );
        $this->session->set_userdata($session);
        return true;
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('/', 'refresh');
    }
}