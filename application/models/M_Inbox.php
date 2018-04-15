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

  public function getAllPesan()
  {
		$result = $this->db->get('pesan');
		return $result->result();
	}

  public function detilPesan()
  {
    $result = $this->db->query("SELECT * FROM user,pesan WHERE user.iduser = pesan.iduser;");
    return $result->result();
  }

  public function getPemilik()
  {
    $result = $this->db->query("SELECT * FROM user where auth = 1");
    return $result->result();
  }

  public function deletePesan($id)
  {
    $this->db->where('idpesan', $id);
     $this->db->delete('pesan');
  }

}
