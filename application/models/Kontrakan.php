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
    public function getRumah($id_rmh){
        return $this->db->select('*')
                        ->from('rumah')
                        ->join('kontrakan','kontrakan.idkontrakan=idkontrakan')
                        ->join('user','user.iduser=kontrakan.iduser')
                        ->where('idrumah',$id_rmh)->get()->row();
    }
}
