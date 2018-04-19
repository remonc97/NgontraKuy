<?php
/**
 * Created by PhpStorm.
 * User: Chia
 * Date: 15/04/2018
 * Time: 21:24
 */

class Pesan extends CI_Model
{
    public function getIdpesan(){
        return $this->db->select('ifnull(max(idpesan),0) as idpesan')->get('pesan')->row();
    }
    public function requestbook($data){
        $pesan = array(
            'iduser' => $data['iduser'],
            'tglpesan' => $data['tglbooking'],
            'jenispesan' => 'request',
            'subject' => 'Book Request',
            'isi' =>
                'Book Request <br/>
                ----------------------<br/>
                Tenant Name : '.$this->session->userdata('nama').
                '<br/>Phone No. : '.$data['notelp'].
                '<br/>Planned Check In Date :'.$data['tglcheckin'].
                '<br/>Planned Check Out Date :'.$data['tglcheckout'].
                '<br/><br/>
                Click this url to confirm the booking request.
                <br.></br.>'
                .site_url('Booking/'.md5('confirm').'/'.$data['idbooking'].'_'.$data['iduser'].'_'.$data['tglbooking'].'_'.$data['idrumah'].'_'.
                    $data['notelp'].'_'.$data['tglcheckin'].'_'.$data['tglcheckout'].'_'.$this->getIdpesan()->idpesan).'_'.$this->session->userdata('nama').
                '<br/><br/>
                Click this url below to decline the booking request.
                <br/><br/>'
                .site_url('Booking/cancel/').$this->getIdpesan()->idpesan,
            'status' => 'submitted',
        );
        return $this->db->insert('pesan',$pesan);
    }
    public function updateconfirm($key){
        return $this->db->where('idpesan',$key)->update('pesan',array('status' => 'accepted'));
    }
    public function updatecancel($key){
        return $this->db->where('idpesan',$key)->update('pesan',array('status' => 'declined'));
    }
    public function sendresponsemsg($key){
        $pesan = array(
            'iduser' => $key[1],
            'tglpesan' => date('yyyy-mm-dd'),
            'jenispesan' => 'request',
            'subject' => 'Book Request Accepted',
            'isi' =>
                'Congrats, You have successfully booked this kontrakan! <br/>
                Here are your kontrakan booking details:<br/>
                Booking ID : '.$key[0].
                'Tenant Name : '.$key[8].
                '<br/>Phone No. : '.$key[4].
                '<br/>Booking Date : '.$key[2].
                '<br/>Planned Check In Date :'.$key[5].
                '<br/>Planned Check Out Date :'.$key[6].
                '<br/><br/>',
            'status' => 'submitted',
        );
        return $this->db->insert('pesan',$pesan);
    }

}