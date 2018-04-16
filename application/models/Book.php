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
            'idbooking' => $key[0],
            'iduser' => $key[1],
            'tglbooking' => $key[2],
        );
        $data1 = array(
            'idbooking' => $key[0],
            'idrumah' => $key[3],
            'notelp' => $key[4],
            'tglcheckin' => $key[5],
            'tglcheckout' => $key[6],
        );
        $booking = $this->db->insert('booking',$data);
        $detail = $this->db->insert('detilbooking',$data1);

        if($booking == true && $detail == true){
            return true;
        }else{
            return false;
        }
    }
}