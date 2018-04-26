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
		
		$data = array();
            $filesCount = count($_FILES['gambar']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['gambar']['name'] = $_FILES['gambar']['name'][$i];
                $_FILES['gambar']['type'] = $_FILES['gambar']['type'][$i];
                $_FILES['gambar']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
                $_FILES['gambar']['error'] = $_FILES['gambar']['error'][$i];
                $_FILES['gambar']['size'] = $_FILES['gambar']['size'][$i];
			
		$config['upload_path']          = './assets/images/rumah'; //call paath
		$config['allowed_types'] = 'jpeg|jpg|gif|png';//type file upload
		$this->load->library('upload', $config);
		
		$nmkontrakan = $this->input->post('nmkontrakan'); 
		$notelp = $this->input->post('notelp');
		$harga = $this->input->post('harga');
		$deskripsi = $this->input->post('deskripsi');
		//$gambar = $this->input->post('gambar');
		$alamat = $this->input->post('alamat');
		$fasilitas = $this->input->post('fasilitas');
		$kota = $this->input->post('kota');
		$ukuran = $this->input->post('ukuran');
		$status = $this->input->post('status');
        $idpengguna=$this->session->userdata('idpengguna'); 
		$auth = $this->session->userdata('auth');
		$idkontrakan = $this->input->post('idkontrakan');
		
		if($this->upload->do_upload('gambar')){ //dari sini akan kebuat keterangan ttg data yg diupload
		$data[$i]['upload_data'] = $this->upload->data(); //trus keterangannya masuk ke variabel
		
		foreach ($data[$i]['upload_data'] as $item => $value) { //ini ngeloop data yg keupload, kayak file type, file name, blabla, full path, dsb
			if ($item == 'file_name') { //kita cuma mau ambil file name nya aja beserta format filenya kan?
				$gambar = $value; //ini dia ngesave file name si gambar berdasarkan data yg keupload
				break;
			}
		}
		$data = array(
		'nmkontrakan' =>$nmkontrakan,
		'notelp' =>$notelp,
		'deskripsi'=> $deskripsi,
		'alamat'=>$alamat,
		'harga' => $harga,
		'fasilitas' => $fasilitas,
		'gambar' => $gambar, //nanti filenamenya kesimpen disini
		'kota' => $kota,
		'ukuran' => $ukuran,
		'status' => $status,
		'idpengguna'=>$idpengguna
		
		);
		
		$ubah = array(
		'auth' => true,
		'idpengguna' => $idpengguna
		);
		
		$result = $this->Kontrakan->UpdateAuth($ubah);
		$result = $this->Kontrakan->InsertRumah($data);
		
			redirect('Home');
		}else{
					
			echo json_encode(array('success' => false));
		}
		/*$data = NULL;
		if ($result){
			redirect('Home');
		}else{
			echo json_encode(array('success' => false));
		}*/
		
			}
	}
	
	/*public function InsetRumah(){
		
		$config['upload_path'] = './assets/images/rumah/';
		$config['allowed_types'] = 'jpeg|jpg|gif|png';
		$config['max_size']= 100;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		
		$this->load->library('upload',$config);
		
		//kalau dia sukses diupload
		if($this->upload->do_upload('gambar')){
			
		$notelp = $this->input->post('notelp');
		$harga = $this->input->post('harga');
		$deskripsi = $this->input->post('deskripsi');
		$gambar = $this->input->post('gambar');
		$alamat = $this->input->post('alamat');
		$fasilitas = $this->input->post('fasilitas');
		$kota = $this->input->post('kota');
		$iduser = $this->input->post('iduser');
		$idkontrakan = $this->input->post('idkontrakan');
		
		$data = array(
		'notelp' =>$notelp,
		'deskripsi'=> $deskripsi,
		'alamat'=>$alamat,
		'harga' => $harga,
		'fasilitas' => $fasilitas,
		'gambar' => $gambar,
		'kota' => $kota,
		'iduser'=>$iduser
		
		);
		$result = $this->Kontrakan->InsertRumah($data);
		
		var_dump($result);
		exit;
		$this->load->view('Home',$data);
		//kalau dia gagal
		}else{
			echo json_encode(array('success' => false));
		}	
	}*/
	
	public function Search(){
		// Retrieve the posted search term.
        $search_term = $this->input->post('search');

        // Use a model to retrieve the results.
        $data['results'] = $this->Kontrakan->get_results($search_term);

        // Pass the results to the view.
        $this->load->view('hasil',$data);
	}
	
}
