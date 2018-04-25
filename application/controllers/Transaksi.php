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
            if($this->Kontrakan->checkAvailability($key) != null && ($this->session->userdata('auth') == 0 || $this->session->userdata('auth') == 1)){
                $data['session'] = true;
                $data['nama'] = $this->session->userdata('namalengkap');
                $data['idreservasi'] = $this->Book->makeID();
                $data['idkontrakan'] = $key;
                $data['kontrakan'] = $this->Kontrakan->getOneKontrakan($data['idkontrakan']);
                $data['pemilik'] = $this->Kontrakan->getNamaPemilik($data['kontrakan']->idpengguna);
                $this->load->view('formbooking', $data);
            }else if($this->Kontrakan->checkAvailability($key) == null && ($this->session->userdata('auth') == 0 || $this->session->userdata('auth') == 1)){
                echo "<script>alert('sorry you cannot book this kontrakan, it is not available. check again later.')</script>";
                redirect('HomeDetails/'.$key,'refresh');
            }else if($this->session->userdata('auth') == 2){
                echo "<script>alert('sorry you cannot book this kontrakan, it is not available. check again later.')</script>";
                redirect('Admin','refresh');
            }else{
                echo "<script>alert('sorry you cannot book this kontrakan, it is not available. check again later.')</script>";
                redirect('/','refresh');
            }
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
            if($this->Pesan->updateisi($data) == true){
                echo "<script>alert('booking successful')</script>";
                $this->session->set_flashdata('successbook','true');
                redirect('','refresh');
            }
        }else{
            echo "<script>alert('booking failed')</script>";
        }
    }
    #proses booking kontrakan
    public function book(){
        $key = explode("_",$this->uri->segment(2));
        if($this->Book->insert($key) == true){
            if($this->confirm($key) == true){
                $this->session->set_flashdata('confirm','true');
                redirect('Inbox','refresh');
            }else{
                die('no2');
            }
        }else{
            die('no1');
        }
    }
    #proses update statuspesan to 'accepted'
    public function confirm($key){
        if($this->Pesan->updateconfirm($key[7]) == true){
            #kirim pesan balik ke user, bahwa pemilik sudah konfirmasi booking
            if($this->Pesan->sendresponsemsg($key) == true){
                #get data 1 kontrakan
                if($this->Tagihan->buatTagihan($key)==true){
                    $this->session->set_flashdata('confirm','true');
                    echo "<script>alert('booking confirmed and invoice made')</script>";
                    redirect('Inbox','refresh');
                }else{
                    echo "<script>alert('booking confirmed but cannot make invoice')</script>";
                    redirect('/','refresh');
                }
            }
        }
    }
    #proses update statuspesan to 'declined'
    public function cancel(){
        $key = $this->uri->segment(2);
        #update status pesan menjadi declined
        if($this->Pesan->updatecancel($key) == true){
            $this->session->set_flashdata('cancel','true');
            echo "<script>alert('booking canceled')</script>";
            redirect('Inbox','refresh');
        }
    }
}