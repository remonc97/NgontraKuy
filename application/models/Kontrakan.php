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
                        ->join('kontrakan','kontrakan.idkontrakan=rumah.idkontrakan')
                        ->join('user','user.iduser=kontrakan.iduser')
                        ->where('idrumah',$id_rmh)->get()->row();
    }

    public function getAllKontrakan(){

		$result = $this->db->get('kontrakan');
		return $result->result();
	}

  public function DeleteKontrakan($idkontrakan){
  		$checkupdate = false;

  		try{
  			$this->db->where('idkontrakan',$idkontrakan);
  			$this->db->delete('kontrakan');
  			$checkupdate = true;
  		}catch (Exception $ex) {

  			$checkupdate = false;
  		}

  		return $checkupdate;

  	}

    public function getOneKontrakan($idkontrakan){
      return $this->db->where('idkontrakan',$idkontrakan)->get('kontrakan')->row();
    }

}
