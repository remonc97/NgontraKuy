<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
	    if($this->User->ceksession() == true){
	        #validasi bahwa sessionnya masuk
	        $data['session'] = true;

	        #mindahin data session ke variabel baru untuk dipassing di view
            $data['idpengguna']=$this->session->userdata('idpengguna');
            $data['nama'] = $this->session->userdata('namalengkap');
            $data['auth']=$this->session->userdata('auth');

            #nge get data user based on data session yang masuk
            $data['datauser']=$this->User->getUser($data['idpengguna']);
            $data['tagihan'] = $this->Tagihan->getJmlTagihan($data['idpengguna']);

            if(isset($data['datauser'])){ #jika query berhasil dijalankan
                $this->load->view('profiluser',$data); #jalankan view profil
            }
        }else{
            redirect('/','refresh');
        }
  }

}
