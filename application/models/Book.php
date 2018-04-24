<?php
/**
 * Created by PhpStorm.
 * User: Chia
 * Date: 15/04/2018
 * Time: 15:07
 */

class Book extends CI_Model
{
    public function insert($key){
        $data = array(
            'idreservasi' => $key[0],
            'idpengguna' => $key[1],
            'tglreservasi' => $key[2],
        );
        $data1 = array(
            'idreservasi' => $key[0],
            'idkontrakan' => $key[3],
            'notelp' => $key[4],
            'tglmasuk' => $key[5],
            'tglkeluar' => $key[6],
        );
        $booking = $this->db->insert('reservasi',$data);
        $detail = $this->db->insert('detilreservasi',$data1);

        if($booking == true && $detail == true){
            return true;
        }else{
            return false;
        }
    }

    public function makeID(){
        $res = "";
        $next = 0;
        $query = $this->db->select('ifnull(max(convert(right(idreservasi,7), signed integer)), 0) as kode')->get('reservasi')->row();
        $next = ($query->kode)+1;
        if($query->kode != 0){
            $res = "000000" . $next;
            $res = "B" . substr($res,strlen($res)-7);
        }else{
            $res = "B0000001";
        }
        return $res;
    }
}