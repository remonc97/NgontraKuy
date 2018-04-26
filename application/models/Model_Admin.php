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
		$hasil = $this->db->get('pengguna');
		return $hasil->result();
	}
	public function get1User($id){
		$hasil = $this->db->where('idpengguna',$id)->get('pengguna')->row();
		return $hasil;
	}
	public function update($kode,$data)
	{
		try{
			$this->db->where('idpengguna', $kode);
			$q = $this->db->update('pengguna',$data);
		}catch(Exception $e){
			die($e);
		}
		return $q;
	}
	public function deleteUser($data)
	{
		try{
			$this->db->where('idpengguna', $data);
			$q = $this->db->delete('pengguna');
		}catch(Exception $die){
			die($die);
		}
		return $q;
	}
}
