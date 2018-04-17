<?php
/**
 * Created by PhpStorm.
 * User: Nikko
 * Date: 17/04/2018
 * Time: 17:51
 */
class Model_Admin extends CI_Model
{
	public function getUser(){
		$hasil = $this->db->get('user');
		return $hasil->result();
	}
	public function get1User($id){
		$hasil = $this->db->where('iduser',$id)->get('user')->row();
		return $hasil;
	}
}
