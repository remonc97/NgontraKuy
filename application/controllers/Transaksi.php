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
            $data['nama'] = $this->session->userdata('namalengkap');
            $data['idreservasi'] = $this->Book->makeID();
            $data['idkontrakan'] = $key;
            $data['kontrakan'] = $this->Kontrakan->getOneKontrakan($data['idkontrakan']);
            $data['pemilik'] = $this->Kontrakan->getNamaPemilik($data['kontrakan']->idpengguna);
            $this->load->view('formbooking', $data);
        }
    }
    #proses request book kontrakan
    public function requestbooking(){
        $key = explode("_",$this->uri->segment(3));
        $data = array(
            'idreservasi' => $key[0],
            'idpengguna' => $this->session->userdata('idpengguna'),
            'idpenerima' => $this->input->post('idpenerima'),
            'tglreservasi' => $this->input->post('tglreservasi'),
            'idkontrakan' => $key[1],
            'notelp' => $this->input->post('notelp'),
            'tglmasuk' => $this->input->post('tglmasuk'),
            'tglkeluar' => $this->input->post('tglkeluar'),
        );

        if($this->Pesan->requestbook($data) == true){
            echo "<script>alert('booking successful')</script>";
            $this->session->set_flashdata('successbook','true');
            redirect('','refresh');
        }else{
            echo "<script>alert('booking failed')</script>";
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