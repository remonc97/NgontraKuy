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
                Tenant Name: '.$this->session->userdata('nama').
                'Phone No.  : '.$data['notelp'].
                'Planned Check In Date :'.$data['tglcheckin'].
                'Planned Check Out Date :'.$data['tglcheckout'].
                '<br/><br/>Click this url to confirm the booking request.<br.></br.>'.site_url(md5('confirm').'/'.$data['idbooking'].'-'.$data['iduser'].'-'.$data['tglbooking'].'-'.$data['idrumah'].'-'.
                    $data['notelp'].'-'.$data['tglcheckin'].'-'.$data['tglcheckout']).'<br/><br/>Click this url below to decline the booking request.<br/><br/>'.site_url('Booking/cancel/').$this->getIdpesan()->idpesan,
            'status' => 'submitted'
        );
        return $this->db->insert('pesan',$pesan);
    }
    public function update($key){
        return $this->db->where('idpesan',$key)->update('pesan',array('status' => 'declined'));
    }
}