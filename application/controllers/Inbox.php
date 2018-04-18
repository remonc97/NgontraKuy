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
		$auth = $this->session->auth;
		if($auth == 0){

			//ini customer
			$data['featured'] = $this->Kontrakan->getFeatured();
		    if($this->User->ceksession() == true){
		        $nama = $this->session->userdata('nama');
		        $email = $this->session->userdata('email');
	            
	            $mergeCustomer = $this->M_Inbox->getMergeCustomer();
				$detilPesan = $this->M_Inbox->detilPesan();
				$customer = $this->M_Inbox->getCustomer();
				$pemilik = $this->M_Inbox->getPemilik();
				$pesan = $this->M_Inbox->getAllPesan();
				$data = [
					'customer' => $customer,
					'email' => $email,
					'nama' => $nama,
					'session' => true,
					'mergeCustomer' => $mergeCustomer,
					'detilPesan' => $detilPesan,
					'pemilik' => $pemilik,
					'pesan' => $pesan
				];

			    $this->load->view('template/header',$data);
			    $this->load->view('InboxCustomer',$data);
			    $this->load->view('modalInbox/customer/EntryPesan',$data);
			    $this->load->view('modalInbox/customer/balasPesan',$data);
			    $this->load->view('modalInbox/customer/LihatPesan',$data);
			    $this->load->view('modalInbox/customer/HapusPesan',$data);
			    $this->load->view('template/footer');
	        }else{
	            redirect('');
	        }	
		} if($auth == 1) {

			//ini pemilik
			$data['featured'] = $this->Kontrakan->getFeatured();
		    if($this->User->ceksession() == true){
		        $nama = $this->session->userdata('nama');
		        $email = $this->session->userdata('email');
		        $auth = $this->session->userdata('auth');

				$merge = $this->M_Inbox->getMerge();
				$detilPesan = $this->M_Inbox->detilPesan();
				$customer = $this->M_Inbox->getCustomer2();
				$pesan = $this->M_Inbox->getAllPesan();
				$data = [
					'auth' => $auth,
					'merge' => $merge,
					'email' => $email,
					'session' => TRUE,
					'nama' => $nama,
					'detilPesan' => $detilPesan,
					'customer' => $customer,
					'pesan' => $pesan,
				];
			    $this->load->view('template/header');
			    $this->load->view('InboxPemilik',$data);
			    $this->load->view('modalInbox/pemilik/LihatPesan',$data);
			    $this->load->view('modalInbox/pemilik/balasPesan',$data);
			    $this->load->view('modalInbox/pemilik/prosesPesan',$data);
			    $this->load->view('modalInbox/pemilik/solvePesan',$data);
			    $this->load->view('template/footer');
			}else{
				redirect('');
			}
		}
	}

	

	public function kirimPesan()
	{
		$idpesan = $this->input->post('idpesan');
		$tglpesan = $this->input->post('tglpesan');
		$iduser = $this->input->post('pengirim');
		$jenispesan = $this->input->post('jenispesan');
		$subject = $this->input->post('subject');
		$isipesan = $this->input->post('isipesan');
		$penerima = $this->input->post('penerima');

		$tglpesan = date("Y/m/d");

		$status = "Submitted";

		$data = array(
			'idpesan' => $idpesan,
			'iduser' =>$iduser,
			'tglpesan'=> $tglpesan,
			'jenispesan' =>$jenispesan,
			'subject' => $subject,
			'isi' => $isipesan,
			'penerima' => $penerima,
			'status' => $status
		);

		$result = $this->M_Inbox->InsertPesan($data);

		$data = NULL;
		if ($result){
			$this->session->set_flashdata('pesan','Pesan Berhasil Dikirim');
	   		redirect('Inbox');
		}else{
			$this->session->set_flashdata('pesanGagal','Pesan Tidak Berhasil Disimpan');
    		redirect('Inbox');
		}
	}

	public function hapusPesan($idpesan)
	{
		$this->M_Inbox->deletePesan($idpesan);
		$this->session->set_flashdata('pesan','Pesan Berhasil Dihapus');
		redirect('Inbox');
	}

	public function balasPesanCustomer()
	{
		$idpesan = $this->input->post('idpesan');
		$iduser = $this->input->post('pengirim');
		$isipesan = $this->input->post('isipesan');

		$tglpesan = date("Y/m/d");

		$status="Submitted";

		$data = array(
			'idpesan' =>$idpesan,
			'iduser' =>$iduser,
			'pesancustomer' => $isipesan
		);

		$result = $this->M_Inbox->BalasPesanCustomer($data);

		$data = NULL;
		if ($result){
			$this->session->set_flashdata('pesan','Pesan Berhasil Dikirim');
	   		redirect('Inbox');
		}else{
			$this->session->set_flashdata('pesanGagal','Pesan Tidak Berhasil Disimpan');
    		redirect('Inbox');
		}
	}




////////////////////////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////PEMILIK//////////////////////////////////////////////////////


	public function prosesPesan()
	{
		$idpesan = $this->input->post('idpesan');

		$status = "On Process";

		$data = array(
			'status' => $status
		);

		$result = $this->M_Inbox->prosesPesan($idpesan,$data);

		$data = NULL;
		if (!$result){
			$this->session->set_flashdata('pesan','Pesan Berhasil Diproses');
	   		redirect('Inbox');
		}else{
			$this->session->set_flashdata('pesanGagal','Pesan Tidak Berhasil Diproses');
    		redirect('Inbox');
		}	
	}

	public function solvePesan()
	{
		$idpesan = $this->input->post('idpesan');

		$status = "Solved";

		$data = array(
			'status' => $status
		);

		$result = $this->M_Inbox->prosesPesan($idpesan,$data);

		$data = NULL;
		if (!$result){
			$this->session->set_flashdata('pesan','Pesan Berhasil Diproses');
	   		redirect('Inbox');
		}else{
			$this->session->set_flashdata('pesanGagal','Pesan Tidak Berhasil Diproses');
    		redirect('Inbox');
		}	
	}

	public function balasPesan()
	{
		$idpesan = $this->input->post('idpesan');
		$tglpesan = $this->input->post('tglpesan');
		$penerima = $this->input->post('penerima');
		$jenispesan = $this->input->post('jenispesan');
		$isipesan = $this->input->post('isipesan');

		$tglpesan = date("Y/m/d");

		$status="Submitted";

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
			$this->session->set_flashdata('pesanGagal','Pesan Tidak Berhasil Disimpan');
    		redirect('Inbox');
		}
	}



}
