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
		if($this->User->ceksession()==true){
      #validasi bahwa sessionnya masuk
      $data['session'] = true;

      #mindahin data session ke variabel baru untuk dipassing di view
        $data['iduser']=$this->session->userdata('iduser');
        $data['nama'] = $this->session->userdata('nama');
        $data['auth']=$this->session->userdata('auth');



		$data['datakontrakan'] = $this->Kontrakan->getAllKontrakan($data['iduser']);
    if(isset($data['datakontrakan'])){ #jika query berhasil dijalankan
            $this->load->view('listkontrakan',$data); #jalankan view profil
    }else{
        redirect('/','refresh');
    }
 }

  }
  public function getOneKontrakan(){
    $idkontrakan = $this->uri->segment(2);
    $data['session'] = true;
    $data['auth'] = $this->session->userdata('auth');
    $data['nama'] = $this->session->userdata('nama');
    $data['iduser']=$this->session->userdata('iduser');

    $data['getdata']= $this->Kontrakan->getOneKontrakan($idkontrakan);
    If($data['getdata'] != null){
      $this->load->view('detailkontrakan',$data);
      }
  }

	public function View(){
		$result = $this->Kontrakan->getAllKontrakan();

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
