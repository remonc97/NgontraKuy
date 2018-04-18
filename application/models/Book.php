<?php
/**
 * Created by PhpStorm.
 * User: Chia
 * Date: 15/04/2018
 * Time: 15:07
 */

class Book extends CI_Model
{
    public function getIdBooking($iduser){
        return $this->db->where('iduser',$iduser)->get('booking')->row();
    }
}