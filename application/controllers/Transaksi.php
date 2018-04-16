<?php
/**
 * Created by PhpStorm.
 * User: Chia
 * Date: 15/04/2018
 * Time: 11:50
 */

class Transaksi extends CI_Controller
{
    #nampilin form untuk booking
    public function formbooking(){
        if($this->User->ceksession() == true) {
            $key = $this->uri->segment(2);
            $data['session'] = true;
            $data['nama'] = $this->session->userdata('nama');
            $data['idbooking'] = $this->Book->makeID();
            $data['idrumah'] = $key;
            $this->load->view('formbooking', $data);
        }
    }
    #proses request book kontrakan
    public function requestbooking(){
        $key = explode("_",$this->uri->segment(3));
        $data = array(
            'idbooking' => $key[0],
            'iduser' => $this->session->userdata('iduser'),
            'tglbooking' => $this->input->post('tglbooking'),
            'idrumah' => $key[1],
            'notelp' => $this->input->post('notelp'),
            'tglcheckin' => $this->input->post('cekin'),
            'tglcheckout' => $this->input->post('cekout'),
        );
        if($this->Pesan->requestbook($data) == true){
            $this->session->set_flashdata('successbook','true');
            redirect('','refresh');
        }
    }
    #proses booking kontrakan
    public function book(){
        if(md5('confirm') == $this->uri->segment(2)){
            $key = explode("_",$this->uri->segment(3));
            if($this->Book->insert($key) == true){
                if($this->confirm($key) == true){
                    $this->session->set_flashdata('confirm','true');
                    redirect('Inbox','refresh');
                }
            }
        }
    }
    #proses update statuspesan to 'accepted'
    public function confirm($key){
        if($this->Pesan->updateconfirm($key[7]) == true){
            #kirim pesan balik ke user, bahwa pemilik sudah konfirmasi booking
            if($this->Pesan->sendresponsemsg($key) == true){
                $this->session->set_flashdata('confirm','true');
                redirect('Inbox','refresh');
            }
        }
    }
    #proses update statuspesan to 'declined'
    public function cancel(){
        if(md5('cancel') == $this->uri->segment(2)){
            $key = $this->uri->segment(3);
            #update status pesan menjadi declined
            if($this->Pesan->updatecancel($key) == true){
                $this->session->set_flashdata('cancel','true');
                redirect('Inbox','refresh');
            }
        }
    }
}