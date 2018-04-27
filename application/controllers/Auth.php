<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {

	public function InsetData(){
		$nama = $this->input->post('namalengkap');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$tgllahir = $this->input->post('tgllahir');
		$notelp = $this->input->post('notelp');
		
		$data = array(
		'namalengkap' =>$nama,
		'email' =>$email,
		'password'=> $password,
		'tgllahir'=> $tgllahir,		
		'notelp'=>$notelp,
            'auth' => '0'
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
		
		$data['idpengguna'] = $id;
		$data['data'] = $result;
		$data['namalengkap'] = $nama;
		$data['auth'] = $auth;
		$this->load->view('Edit',$data);
		
	}

	public function EditData(){
		$id = $this->input->post('idpengguna');
		$nama = $this->input->post('namalengkap');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$tgllahir = $this->input->post('tgllahir');
		$notelp = $this->input->post('notelp');
		
		$data = array(
		'namalengkap' => $nama,
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

    public function login(){
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
        $db = $this->User->ceklogin($data);
        if($db != null){
            if($this->makesession($db) == true){
                if($this->session->userdata('auth')=='0' || $this->session->userdata('auth')=='1'){
                    redirect('/','refresh');
                }else{
                    redirect('Admin','refresh');
                }
            }
        }else{
            redirect('/','refresh');
        }
    }
    public function makesession($db){
        $session = array(
            'idpengguna' => $db->idpengguna,
            'email' => $db->email,
            'namalengkap' => $db->namalengkap,
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
