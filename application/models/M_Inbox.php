<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Inbox extends CI_Model {

  public function __construct()
  {
		parent::__construct();
	}

	public function InsertPesan($data){

		$checkinsert = false;
		try{
			$this->db->insert('pesan',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
	}

  public function getNamaPenerima($idpenerima)
  {
    $result = $this->db->query("SELECT * FROM pengguna where idpengguna ='".$idpenerima."'");
    return $result->result();
  }

  public function getAllPesan()
  {
		$result = $this->db->get('pesan');
		return $result->result();
	}


  public function detilPesan2($id)
  {
    $result = $this->db->query("SELECT * FROM pengguna,pesan WHERE pengguna.idpengguna = pesan.idpengirim and namalengkap ='".$id."'");
    return $result->result();
  }

  public function detilPesan()
  {
    $result = $this->db->query("SELECT * FROM pengguna,pesan WHERE pengguna.idpengguna = pesan.idpengirim group by pesan.idpengirim");
    return $result->result();
  }

  public function isiPesan($idpengirim,$idpenerima)
  {
    $result = $this->db->query("SELECT * FROM pesan WHERE idpengirim = '".$idpengirim."' AND idpenerima = '".$idpenerima."'");
    return $result->result();
  }

  public function getPemilik()
  {
    $result = $this->db->query("SELECT * FROM pengguna where auth = 1");
    return $result->result();
  }

  public function getCustomer2($namalengkap)
  {
    $result = $this->db->query("SELECT * FROM pengguna WHERE namalengkap = '".$namalengkap."'");
    return $result->result();
  }

  public function getCustomer()
  {
    $result = $this->db->query("SELECT * FROM pengguna where auth = 0");
    return $result->result();
  }

  public function getIsi($iduser)
  {
    $result = $this->db->query("SELECT tglpesan,isi from pesan where idpengguna = '".$iduser."'");
    return $result->result();
  }

  public function getMerge()
  {
    $result = $this->db->query("SELECT * FROM pengguna,pesan WHERE pengguna.idpengguna = pesan.idpengirim GROUP BY idpenerima");
    return $result->result();
  }   

  public function getMergeCustomer()
  {
    $result = $this->db->query("SELECT * FROM pengguna,pesan WHERE pengguna.idpengguna = pesan.idpengirim and auth = 0 group by topik");
    return $result->result();
  }  

  public function deletePesan($id)
  {
    $this->db->where('idpenerima', $id);
     $this->db->delete('pesan');
  }

  public function prosesPesan($idpesan,$data)
  {
    $this->db->where('idpesan',$idpesan);
    $this->db->update('pesan',$data);
  }

  // public function BalasPesanCustomer($data){

  //   $checkinsert = false;
  //   try{
  //     $this->db->insert('pesancustomer',$data);
  //     $checkinsert = true;
  //   }catch (Exception $ex) {
  //     $checkinsert = false;
  //   }
  //   return $checkinsert;
  // }

  // public function getPesanCustomer($idpesan)
  // {
  //   $result = $this->db->query("SELECT * FROM pesancustomer,pesan WHERE pesan.iduser = pesancustomer.iduser and pesancustomer.idpesan = '".$idpesan."'  group by id");
  //   return $result->result(); 
  // }

  // public function getTampilPesanCustomer($penerima)
  // {
  //   $result = $this->db->query("SELECT * FROM user,pesan where pesan.iduser = user.iduser and penerima = '".$penerima."'");
  //   return $result->result(); 
  // }

}
