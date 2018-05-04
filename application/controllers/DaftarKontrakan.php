<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarKontrakan extends CI_Controller {


	public function __construct() {
		parent::__construct();
	}

	//assume as view
	public function index()
	{
		if($this->User->ceksession()==true){
            #validasi bahwa sessionnya masuk
            $data['session'] = true;

            #mindahin data session ke variabel baru untuk dipassing di view
            $data['idpengguna']=$this->session->userdata('idpengguna');
            $data['namalengkap'] = $this->session->userdata('namalengkap');
            $data['auth']=$this->session->userdata('auth');
		    $data['datakontrakan'] = $this->Kontrakan->getAllKontrakan($data['idpengguna']);
            $this->load->view('listkontrakan',$data); #jalankan view profil

        }

    }
    public function getOneKontrakan(){
        $idkontrakan = $this->uri->segment(2);
        $data['session'] = true;
        $data['auth'] = $this->session->userdata('auth');
        $data['namalengkap'] = $this->session->userdata('namalengkap');
        $data['idpengguna']=$this->session->userdata('idpengguna');
        $data['getdata']= $this->Kontrakan->getOneKontrakan($idkontrakan);
        If($data['getdata'] != null){
            $this->load->view('detailkontrakan',$data);
        }
    }

	public function View(){
		$result = $this->Kontrakan->getAllKontrakan($this->session->userdata('idpengguna'));

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
