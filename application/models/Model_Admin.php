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
	public function update($kode,$data)
	{
		try{
			$this->db->where('iduser', $kode);
			$q = $this->db->update('user',$data);
		}catch(Exception $e){
			die($e);
		}
		return $q;
	}
	public function deleteUser($data)
	{
		try{
			$this->db->where('iduser', $data);
			$q = $this->db->delete('user');
		}catch(Exception $die){
			die($die);
		}
		return $q;
	}
}
