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
	
	/*public function InsetRumah(){
		$config['upload_path']          = './assets/images/rumah'; //call paath
		$config['allowed_types']        = 'gif|jpg|png|gif';	//type file upload
		$config['file_name'] 			='gambar';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('gambar');
		$file_name = $this->upload->data();
		
		$nmrumah = $this->input->post('nmrumah');
		$dayatampung = $this->input->post('dayatampung');
		$ukuran = $this->input->post('ukuran');
		$harga = $this->input->post('harga');
		$idkontrakan = $this->input->post('idkontrakan');
		$fasilitas = $this->input->post('fasilitas');
		$gambar = $this->input->post('gambar');
		$status = $this->input->post('status');
		$idrumah = $this->input->post('idrumah');
		
		$data = array(
		'nmrumah' =>$nmrumah,
		'dayatampung'=> $dayatampung,
		'ukuran'=>$ukuran,
		'harga' => $harga,
		'fasilitas' => $fasilitas,
		'gambar' => $gambar,
		'status' => $status,
		'idkontrakan'=>$idkontrakan
		
		);
		
		$result = $this->Kontrakan->InsertRumah($data);
		
		$data = NULL;
		if ($result){
			redirect('Home');
		}else{
			echo json_encode(array('success' => false));
		}
	
	}*/
	
	public function InsetRumah(){
		
		$config['upload_path'] = './assets/images/rumah/';
		$config['allowed_types'] = 'jpeg|jpg|gif|png';
		$config['max_size']= 100;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		
		$this->load->library('upload',$config);
		
		//kalau dia sukses diupload
		if($this->upload->do_upload('testupload')){
			
		$notelp = $this->input->post('notelp');
		$harga = $this->input->post('harga');
		$deskripsi = $this->input->post('deskripsi');
		$gambar = $this->input->post('gambar');
		$alamat = $this->input->post('alamat');
		$iduser = $this->input->post('iduser');
		$idkontrakan = $this->input->post('idkontrakan');
		
		//kirim data ke view
		$nama = $this->session->name;
		$data['nama'] = $nama;
		$data['upload_data'] = $this->upload->data();
		$data['error'] = NULL;
			
		
		$this->load->view('UploadFile',$data);
			
		//kalau dia gagal
		}else{
			
			$menu = array(
			"crudbiasa" => "active",
			"crudjson" => "",
			"crudvalidaiton" => ""
		
		);
		
		$data['menu'] = $menu;
		//kirim data ke view
		$nama = $this->session->name;
		$data['nama'] = $nama;
		$data['error'] = $this->upload->display_errors();
		$data['upload_data'] = NULL;
		
			$this->load->view('UploadFile',$data);
		}	
	}
	
	public function Search(){
		// Retrieve the posted search term.
        $search_term = $this->input->post('search');

        // Use a model to retrieve the results.
        $data['results'] = $this->Kontrakan->get_results($search_term);

        // Pass the results to the view.
        $this->load->view('hasil',$data);
	}
	
}
