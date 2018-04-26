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
    public function updateisi($data){
        $id = $this->getIdpesan()->idpesan;
        return $this->db->set('isi',
            'Book Request <br/>
                ----------------------<br/>
                Tenant Name : '.$this->session->userdata('namalengkap').
            '<br/>Phone No. : '.$data['notelp'].
            '<br/>Planned Check In Date :'.$data['tglmasuk'].
            '<br/>Planned Check Out Date :'.$data['tglkeluar'].
            '<br/><br/>
                Click this url to confirm the booking request.
                <br.></br.><a href="'
            .site_url('BookConfirm/'.$data['idreservasi'].'_'.$data['idpengguna'].'_'.$data['tglreservasi'].'_'.$data['idkontrakan'].'_'.
                $data['notelp'].'_'.$data['tglmasuk'].'_'.$data['tglkeluar'].'_'.$id.'_'.$this->session->userdata('namalengkap')).
            '"><br/>accept booking request</a><br/><br/>
                Click this url below to decline the booking request.
                <br/><a href="'
            .site_url('BookCancel/').$this->getIdpesan()->idpesan.'">Decline booking request</a>'
            )->where('idpesan',$id)->update('pesan');
    }
    public function requestbook($data){
        $pesan = array(
            'idpengirim' => $data['idpengguna'],
            'idpenerima' => $data['idpenerima'],
            'tglpesan' => $data['tglreservasi'],
            'jenispesan' => 'request',
            'topik' => 'Book Request',
            'isi' =>'',
            'status' => 'submitted',
        );
        return $this->db->insert('pesan',$pesan);
    }
    public function updateconfirm($key){
        return $this->db->set('status','accepted')->where('idpesan',$key)->update('pesan');
    }
    public function updatecancel($key){
        return $this->db->set('status','declined')->where('idpesan',$key)->update('pesan');
    }
    public function sendresponsemsg($key){
        $pesan = array(
            'idpengirim' => $key[1],
            'idpenerima' => $key[1],
            'tglpesan' => date('Y-m-d'),
            'jenispesan' => 'request',
            'topik' => 'Book Request Accepted',
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