<?php
/**
 * Created by PhpStorm.
 * User: Chia
 * Date: 15/04/2018
 * Time: 9:30
 */

class User extends CI_Model
{
    public function ceklogin($db){
        return $this->db->where('email',$db['email'])->where('password',$db['password'])->get('user')->row();
    }
    public function ceksession(){
        if($this->session->userdata('email') != null){
            return true;
        }else{
            return false;
        }
    }
    public function getUser($iduser){
        return $this->db->where('iduser',$iduser)->get('user')->row();
    }
}
