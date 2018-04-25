<?php
/**
 * Created by PhpStorm.
 * User: Chia
 * Date: 18/04/2018
 * Time: 21:01
 */

class Tagihan extends CI_Model
{
    public function getJmlTagihan($idpengguna){
//        return $this->db->select('idtagihan,count(idpengguna) as "jumlah"')
//            ->from('reservasi')
//            ->join('detilreservasi','reservasi.idreservasi = detilreservasi.idreservasi')
//            ->where('idpengguna',$idpengguna)
//            ->get()->row();

    }
    public function getHargaKontrakan($idkontrakan){
        return $this->db->select('harga')->where('idkontrakan',$idkontrakan)->get('kontrakan')->row();
    }
    public function buatTagihan($data){
        $data1 = array(
            'idreservasi' => $data[0],
            'tgltagihan' => date('Y-m-d', strtotime($data[5] .' +30 day')),
            'totaltagihan' => $this->getHargaKontrakan($data[3])->harga,
            'statusbayar' => '0',
        );
        return $this->db->insert('tagihan',$data1);
    }
}