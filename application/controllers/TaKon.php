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
	
	//insert
	public function InsetData(){
		
		$nmkontrakan = $this->input->post('nmkontrakan');
		$notelp = $this->input->post('notelp');
		$deskripsi = $this->input->post('deskripsi');
		$alamat = $this->input->post('alamat');
		$idkontrakan = $this->input->post('idkontrakan');
		$iduser = $this->input->post('iduser');
		
		$data = array(
		'nmkontrakan' =>$nmkontrakan,
		'notelp'=> $notelp,
		'deskripsi'=>$deskripsi,
		'alamat' => $alamat,
		'iduser'=>$iduser
		
		);
		
		$result = $this->Kontrakan->InsertKontra($data);
		
		$data = NULL;
		if ($result){
			redirect('Home');
		}else{
			echo json_encode(array('success' => false));
		}
	
	}
	
	public function InsetRumah(){
		
		$nmrumah = $this->input->post('nmrumah');
		$dayatampung = $this->input->post('dayatampung');
		$ukuran = $this->input->post('ukuran');
		$harga = $this->input->post('harga');
		$idkontrakan = $this->input->post('idkontrakan');
		$id = $this->input->post('iduser');
		
		$data = array(
		'nmrumah' =>$nmrumah,
		'dayatampung'=> $dayatampung,
		'ukuran'=>$ukuran,
		'harga' => $harga,
		'iduser'=>$iduser
		
		);
		
		$result = $this->Kontrakan->InsertKontra($data);
		
		$data = NULL;
		if ($result){
			redirect('Home');
		}else{
			echo json_encode(array('success' => false));
		}
	
	}
	
}
