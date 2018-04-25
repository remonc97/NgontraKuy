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
        $data['session'] = true;
        $data['iduser']=$this->session->userdata('iduser');
        $data['nama'] = $this->session->userdata('nama');
		if($auth == 0){
			//ini customer
			$data['featured'] = $this->Kontrakan->getFeatured();
		    if($this->User->ceksession() == true){
		        $nama = $this->session->userdata('namalengkap');
		        $email = $this->session->userdata('email');

	          $merge = $this->M_Inbox->getMerge();
	         	$mergeTable = $this->M_Inbox->getMergeTable();
						$detilPesan = $this->M_Inbox->detilPesan();
						$customer = $this->M_Inbox->getCustomer();
						$pemilik = $this->M_Inbox->getPemilik2();
						$pesan = $this->M_Inbox->getAllPesan();
						$data = [
							'mergeTable' => $mergeTable,
							'customer' => $customer,
							'email' => $email,
							'nama' => $nama,
							'session' => true,
							'merge' => $merge,
							'detilPesan' => $detilPesan,
							'pemilik' => $pemilik,
							'pesan' => $pesan
						];

				    $this->load->view('template/header',$data);
				    $this->load->view('InboxCustomer',$data);
				    $this->load->view('modalInbox/customer/EntryPesan',$data);
				    $this->load->view('modalInbox/customer/balasPesan',$data);
				    $this->load->view('modalInbox/customer/HapusPesan',$data);
			    	$this->load->view('template/footer');
	    	}else{
	        redirect('');
	      }
		} if($auth == 1) {
			//ini pemilik
      $data['session'] = true;
      $data['iduser']=$this->session->userdata('iduser');
      $data['nama'] = $this->session->userdata('nama');
			$data['featured'] = $this->Kontrakan->getFeatured();
		    if($this->User->ceksession() == true){
		    	$nama = $this->session->userdata('namalengkap');
		      $email = $this->session->userdata('email');
		      $auth = $this->session->userdata('auth');
					$merge = $this->M_Inbox->getMerge();
					$detilPesan = $this->M_Inbox->detilPesan();
					$pemilik = $this->M_Inbox->getPemilik();
					$pesan = $this->M_Inbox->getAllPesan();
					$data = [
						'auth' => $auth,
						'merge' => $merge,
						'email' => $email,
						'session' => TRUE,
						'nama' => $nama,
						'detilPesan' => $detilPesan,
						'pemilik' => $pemilik,
						'pesan' => $pesan,
					];
			    $this->load->view('template/header');
			    $this->load->view('InboxPemilik',$data);
			    $this->load->view('modalInbox/pemilik/balasPesan',$data);
			    $this->load->view('modalInbox/pemilik/prosesPesan',$data);
			    $this->load->view('modalInbox/pemilik/solvePesan',$data);
				}else{
				redirect('');
				}
			}
		}

	public function kirimPesan()
	{
		$idpesan = $this->input->post('idpesan');
		$tglpesan = $this->input->post('tglpesan');
		$iduser = $this->input->post('pengirim2');
		$jenispesan = $this->input->post('jenispesan');
		$subject = $this->input->post('topik');
		$isipesan = $this->input->post('isipesan');
		$penerima = $this->input->post('namapenerima');

		$tglpesan = date("Y/m/d");
		$jenispesan = "normal";
		$status = "Submitted";

		$data = array(
			'idpesan' => $idpesan,
			'idpengirim' =>$iduser,
			'tglpesan'=> $tglpesan,
			'jenispesan	' =>$jenispesan,
			'topik' => $subject,
			'isi' => $isipesan,
			'idpenerima' => $penerima,
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
		$iduser = $this->input->post('idpengirim');
		$isipesan = $this->input->post('isipesan');
		$penerima = $this->input->post('idpenerima');
		$subject = $this->input->post('topik');

		$tglpesan = date("Y/m/d");
		$jenispesan = "normal";
		$status = "Submitted";

		$data = array(
			'idpesan' => $idpesan,
			'idpengirim' =>$iduser,
			'tglpesan'=> $tglpesan,
			'jenispesan	' =>$jenispesan,
			'topik' => $subject,
			'isi' => $isipesan,
			'idpenerima' => $penerima,
			'status' => $status
		);

		$result = $this->M_Inbox->InsertPesan($data);

		$data = NULL;
		if ($result){
			redirect('Inbox/LihatPesan/'. $iduser.'/'.$penerima);
		}
	}

	public function balasPesanCustomerDetil()
	{
		$idpesan = $this->input->post('idpesan');
		$idpengirim = $this->input->post('idpengirim');
		$isipesan = $this->input->post('isipesan');
		$penerima = $this->input->post('idpenerima');
		$subject = $this->input->post('topik');

		$tglpesan = date("Y/m/d");
		$jenispesan = "normal";
		$status = "Submitted";

		$data = array(
			'idpesan' => $idpesan,
			'idpengirim' =>$idpengirim,
			'tglpesan'=> $tglpesan,
			'jenispesan	' =>$jenispesan,
			'topik' => $subject,
			'isi' => $isipesan,
			'idpenerima' => $penerima,
		);

		$result = $this->M_Inbox->InsertPesan($data);

		$data = NULL;
		if ($result){
			redirect('Inbox/LihatPesan/'. $idpengirim.'/'.$penerima);
		}
	}

	public function balasPesanPemilikDetil()
	{
		$idpesan = $this->input->post('idpesan');
		$idpengirim = $this->input->post('idpengirim');
		$isipesan = $this->input->post('isipesan');
		$penerima = $this->input->post('idpenerima');
		$subject = $this->input->post('topik');

		$tglpesan = date("Y/m/d");
		$jenispesan = "normal";
		$status = "Submitted";
		// $status = "Submitted";

		$data = array(
			'idpesan' => $idpesan,
			'idpengirim' =>$idpengirim,
			'tglpesan'=> $tglpesan,
			'jenispesan	' =>$jenispesan,
			'topik' => $subject,
			'isi' => $isipesan,
			'idpenerima' => $penerima,
		);

		$result = $this->M_Inbox->InsertPesan($data);

		$data = NULL;
		if ($result){
			redirect('Inbox/LihatPesan/'.$penerima.'/'.$idpengirim);
		}
	}

	public function LihatPesan($idpengirim,$idpenerima)
	{
		$auth = $this->session->auth;
    $data['session'] = true;
  	$data['iduser']=$this->session->userdata('iduser');
    $data['nama'] = $this->session->userdata('nama');
		if($auth == 0){
			//ini customer
			$data['featured'] = $this->Kontrakan->getFeatured();
		    if($this->User->ceksession() == true){
		   		$nama = $this->session->userdata('namalengkap');
		      $email = $this->session->userdata('email');

					$merge = $this->M_Inbox->getMerge();
	        $mergeTable = $this->M_Inbox->getMergeTable();
	        $showChat2 = $this->M_Inbox->isiPesan2($idpengirim,$idpenerima);
	        $isiPesanBalas = $this->M_Inbox->isiPesanBalas($idpenerima,$idpengirim);
					$detilPesan = $this->M_Inbox->detilPesan();
					$customer = $this->M_Inbox->getCustomer();
					$pemilik = $this->M_Inbox->getPemilik();
					$pesan = $this->M_Inbox->getAllPesan();
					$data = [
						'customer' => $customer,
						'mergeTable' =>$mergeTable,
						'isiPesanBalas' => $isiPesanBalas,
						'showChat2' =>$showChat2,
						'email' => $email,
						'nama' => $nama,
						'session' => true,
						'merge' => $merge,
						'detilPesan' => $detilPesan,
						'pemilik' => $pemilik,
						'pesan' => $pesan
					];

			    $this->load->view('template/header',$data);
			    $this->load->view('modalInbox/customer/LihatPesan',$data);
			    $this->load->view('template/footer');
	      }else{
	        redirect('');
	      }
		} if($auth == 1) {
			//ini pemilik
        $data['session'] = true;
        $data['iduser']=$this->session->userdata('iduser');
        $data['nama'] = $this->session->userdata('nama');
				$data['featured'] = $this->Kontrakan->getFeatured();
		    if($this->User->ceksession() == true){
		        $nama = $this->session->userdata('namalengkap');
		        $email = $this->session->userdata('email');
		        $auth = $this->session->userdata('auth');

						$merge = $this->M_Inbox->getMerge();
	          $showChat2 = $this->M_Inbox->isiPesan2($idpengirim,$idpenerima);
	          $isiPesanBalas = $this->M_Inbox->isiPesanBalas($idpenerima,$idpengirim);
						$detilPesan = $this->M_Inbox->detilPesan();
						$pesan = $this->M_Inbox->getAllPesan();
						$data = [
							'auth' => $auth,
							'merge' => $merge,
							'email' => $email,
							'isiPesanBalas' => $isiPesanBalas,
							'showChat2' =>$showChat2,
							'session' => TRUE,
							'nama' => $nama,
							'detilPesan' => $detilPesan,
							'pesan' => $pesan,
						];

			    	$this->load->view('template/header',$data);
			    	$this->load->view('modalInbox/pemilik/LihatPesan',$data);
			    	$this->load->view('template/footer');
				}else{
					redirect('');
				}
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

	public function balasPesanCustomer2()
	{
		$idpesan = $this->input->post('idpesan');
		$iduser = $this->input->post('penerima');
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

}
