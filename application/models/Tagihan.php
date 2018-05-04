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
        return $this->db->select('count(reservasi.idpengguna) as "jumlah"')
            ->from('reservasi')
            ->join('detilreservasi','reservasi.idreservasi = detilreservasi.idreservasi')
            ->join('tagihan','detilreservasi.idreservasi = tagihan.idreservasi')
            ->where('reservasi.idpengguna',$idpengguna)
            ->where('tagihan.statusbayar','0')
            ->get()
            ->row();
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
    public function getDataTagihan($idtagihan){
        return $this->db->where('idtagihan',$idtagihan)->get('tagihan')->row();
    }

    public function getTagihan($idpengguna)
    {
        return $this->db->select('tagihan.*')
            ->from('tagihan')
            ->join('reservasi','tagihan.idreservasi = reservasi.idreservasi')
            ->join('pengguna','reservasi.idpengguna = pengguna.idpengguna')
            ->where('pengguna.idpengguna',$idpengguna)
            ->get()->result();

    }
    public function confirm($idtagihan)
    {
        try{
            $q = $this->db->set('statusbayar','1')->where('idtagihan',$idtagihan)->update('tagihan');
        }catch(Exception $e){
            die($e);
        }
        return $q;
    }
}