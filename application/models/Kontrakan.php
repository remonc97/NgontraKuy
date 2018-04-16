<?php
/**
 * Created by PhpStorm.
 * User: Chia
 * Date: 14/04/2018
 * Time: 16:48
 */

class Kontrakan extends CI_Model
{
    public function getFeatured(){
        return $this->db->get('rumah',11)->result();
    }
    public function getOne($idrumah){
        return
            $this->db->select('*')
                ->from('kontrakan')
                ->join('rumah','kontrakan.idkontrakan= rumah.idkontrakan')
                ->where('rumah.idrumah',$idrumah)
                ->get()
                ->row();
    }
}