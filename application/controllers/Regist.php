<?php
/**
 * Created by PhpStorm.
 * User: Chia
 * Date: 14/04/2018
 * Time: 16:44
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class CRUD extends CI_Controller {

	public function __construct() {
		parent::__construct();	
		$this->load->model('CRUDregist');			
	}
	
	//assume as view
	public function index()
	{
		if($this->session->nama==NULL){
			redirect('');	
		}
		
		$allUser = $this->CRUDregist->getAllUser();
		$nama = $this->session->nama;
		$data['nama'] = $nama;
		$data['datauser'] = $allUser;
		$data['menu'] = $menu;
		$this->load->view('ListUser',$data);
	}
	//insert view
	public function Add(){
		if($this->session->nama==NULL){
			redirect('');	
		}
		
		$nama = $this->session->nama;
		$data['nama'] = $nama;
		$data['menu'] = $menu;
		$this->load->view('registrasi',$data);
	}
	
	//edit view
	public function Edit($id){
		if($this->session->nama==NULL){
			redirect('');	
		}
		
		$nama = $this->session->nama;
		$result = $this->CRUDregist->getUser($id);
		
		$data['data'] = $result;
		$data['nama'] = $nama;
		$this->load->view('Edit',$data);
	}
	
	
	//insert
	public function InsetData(){
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$nama = $this->input->post('name');
		$tgllahir = $this->input->post('tgllahir');
		$notelp = $this->input->post('notelp');
		
		$data['email'] = $email;
		$data['password'] = $password;
		$data['nama'] = $nama;
		
	
			$this->load->view('register',$data);
		
	}
	
	public function EditData(){
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$nama = $this->input->post('name');
		$tgllahir = $this->input->post('tgllahir');
		$notelp = $this->input->post('notelp');
		$id = $this->input->post('iduser');
		
		$data = array(
		'email' =>$email,
		'password'=> md5($password),
		'nama'=>$nama
		);
		
		$result = $this->CRUDregis->UpdateUser($iduser,$data);
		
		$data = NULL;
		if($result){
			redirect('Auth');	
		}else{
			
			$email = $this->session->email;
			$data['nama'] = $nama;
			$data['result'] = "Gagal";
			$this->load->view('Edit',$data);
		}
	}
	
	public function DeleteData($id){
		$result = $this->CRUDregist->DeleteUser($id);
		
		if($result){
			redirect('Auth');	
		}else{
			
			$email = $this->session->email;
			$data['nama'] = $nama;
			$data['result'] = "Gagal";
			$this->load->view('Auth',$data);
		}
	}
}