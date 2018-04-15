<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_Inbox');
	}

	public function index()
	{
		$detilPesan = $this->M_Inbox->detilPesan();
		$pemilik = $this->M_Inbox->getPemilik();
		$pesan = $this->M_Inbox->getAllPesan();
		$data = [
			'detilPesan' => $detilPesan,
			'pemilik' => $pemilik,
			'pesan' => $pesan
		];
	    $this->load->view('template/header');
	    $this->load->view('InboxCustomer',$data);
	    $this->load->view('modalInbox/EntryPesan',$data);
	    $this->load->view('modalInbox/LihatPesan',$data);
	    $this->load->view('modalInbox/HapusPesan',$data);
	    $this->load->view('template/footer');
	}

	public function kirimPesan()
	{
		$idpesan = $this->input->post('idpesan');
		$tglpesan = $this->input->post('tglpesan');
		$penerima = $this->input->post('penerima');
		$jenispesan = $this->input->post('jenispesan');
		$isipesan = $this->input->post('isipesan');

		$tglpesan = date("Y/m/d");

		$status = "Delivered";

		$data = array(
			'idpesan' => $idpesan,
			'iduser' =>$penerima,
			'tglpesan'=> $tglpesan,
			'jenispesan' =>$jenispesan,
			'isi' => $isipesan,
			'status' => $status
		);

		$result = $this->M_Inbox->InsertPesan($data);

		$data = NULL;
		if ($result){
			$this->session->set_flashdata('pesan','Pesan Berhasil Dikirim');
	   		redirect('Inbox');
		}else{
			$this->session->set_flashdata('pesanGagal','Data Tidak Berhasil Disimpan');
    		redirect('Admin/Petani');
		}
	}

	public function hapusPesan($idpesan)
	{
		$this->M_Inbox->deletePesan($idpesan);
		$this->session->set_flashdata('pesan','Data Berhasil Dihapus');
		redirect('Inbox');
	}
}
