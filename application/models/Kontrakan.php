<?php
/**
 * Created by PhpStorm.
 * User: Chia
 * Date: 14/04/2018
 * Time: 16:48
 */

class Kontrakan extends CI_Model
{
	
	  public function __construct(){
		parent::__construct();
	}
	
    public function getFeatured(){
        return $this->db->get('rumah',11)->result();
    }

	public function InsertKontra($data){

		$checkinsert = false;

		try{

			$this->db->insert('kontrakan',$data);
			$checkinsert = true;
		}catch (Exception $ex) {

			$checkinsert = false;
		}

		return $checkinsert;


	}
	
	public function InsertRumah($data){

		$checkinsert = false;

		try{

			$this->db->insert('rumah',$data);
			$checkinsert = true;
		}catch (Exception $ex) {

			$checkinsert = false;
		}

		return $checkinsert;


	}
	
	 public function get_results($search_term)
    {
        // Use the Active Record class for safer queries.
        $query=$this->db->like('fasilitas',$search_term)->get('rumah');
		
		//$this->db->query("select * from rumah where fasilitas like '%kasur%' "); 

        // Execute the query.
        //$query = $this->db->get();

        // Return the results.
        return $query->result();
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

    public function getRumah($id_rmh){
        return $this->db->select('*')
                        ->from('rumah')
                        ->join('kontrakan','kontrakan.idkontrakan=rumah.idkontrakan')
                        ->join('user','user.iduser=kontrakan.iduser')
                        ->where('idrumah',$id_rmh)->get()->row();
    }

    public function getAllKontrakan($iduser){

		return $this->db->where('iduser',$iduser)->get('kontrakan');
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
