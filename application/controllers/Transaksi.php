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
        $key = explode("+",$this->uri->segment(2));
        $data['idbooking'] = $key[0];
        $data['idrumah'] = $key[1];
        $this->load->view('formbooking',$data);
    }
    #proses request book kontrakan
    public function requestbooking(){
        $key = explode("+",$this->uri->segment(3));
        $data = array(
            'idbooking' => $key[0],
            'iduser' => $this->session->userdata('iduser'),
            'tglbooking' => date('yyyy-mm-dd'),
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
            $key = explode("-",$this->uri->segment(3));
            if($this->Book->insert($key) == true){
                $this->session->set_flashdata('confirm','true');
                redirect('Inbox','refresh');
            }
        }
    }
    #proses cancel booking kontrakan
    public function cancel(){
        if(md5('cancel') == $this->uri->segment(2)){
            $key = $this->uri->segment(3);
            if($this->Pesan->update($key) == true){
                $this->session->set_flashdata('cancel','true');
                redirect('Inbox','refresh');
            }
        }
    }
}