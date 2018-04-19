<?php
/**
 * Created by PhpStorm.
 * User: Chia
 * Date: 18/04/2018
 * Time: 21:01
 */

class Tagihan extends CI_Model
{
    public function getJmlTagihan($idbooking){
        return $this->db->query("select count(idbooking) from tagihan where idbooking = ".$idbooking);
    }
}