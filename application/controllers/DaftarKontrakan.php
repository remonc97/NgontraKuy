<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarKontrakan extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('Kontrakan');

	}

	//assume as view
	public function index()
	{
		if($this->session->name==NULL){
			redirect('');
		}

		$allKontrakan = $this->Kontrakan->getAllKontrakan();
		$nama = $this->session->name;
		$data['nama'] = $nama;
		$data['datakontrakan'] = $allKontrakan;
		$this->load->view('listkontrakan',$data);
	}

	public function View($idkontrakan){
		$result = $this->Kontrakan->getKontrakan($idkontrakan);

		$data['data'] = $result;

		$this->load->view('listkontrakan',$data);
	}


	public function DeleteData($idkontrakan){
		$result = $this->Kontrakan->DeleteKontrakan($idkontrakan);

		if($result){
			redirect('DaftarKontrakan');
		}else{

			$nama = $this->session->name;
			$data['nmkontrakan'] = $nmkontrakan;
			$data['result'] = "Gagal";
			$this->load->view('DaftarKontrakan',$data);
		}
	}

}
