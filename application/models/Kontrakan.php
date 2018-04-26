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
        return $this->db->get('kontrakan',11)->result();
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

			$this->db->insert('kontrakan',$data);
			$checkinsert = true;
		}catch (Exception $ex) {

			$checkinsert = false;
		}

	}
	public function UpdateAuth($ubah){

	
		$checkinsert = false;

		try{
			$this->db->update('pengguna',$idpengguna, array('ubah' => $ubah));
			$checkinsert = true;
		}catch (Exception $ex) {

			$checkinsert = false;
		}

		return $checkinsert;

	}
	 public function get_results($search_term)
    {
        // Use the Active Record class for safer queries.
        $query=$this->db->like('fasilitas',$search_term)->get('kontrakan');

		
		//$this->db->query("select * from rumah where fasilitas like '%kasur%' "); 

        // Execute the query.
        //$query = $this->db->get();

        // Return the results.
        return $query->result();
    }

    public function getKontrakan($idkontrakan){
        return $this->db->select('*')
                        ->from('kontrakan')
                        ->join('pengguna','pengguna.idpengguna=kontrakan.idpengguna')
                        ->where('idkontrakan',$idkontrakan)->get()->row();
    }

    public function getAllKontrakan($idpengguna){

		return $this->db->where('idpengguna',$idpengguna)->get('kontrakan')->result();
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

    public function getNamaPemilik($idpengguna){
        return $this->db->select('namalengkap')->where('idpengguna',$idpengguna)->get('pengguna')->row();
    }

    public function checkAvailability($idkontrakan){
        return $this->db->where('idkontrakan',$idkontrakan)->where('status','available')->get('kontrakan')->row();
    }
    public function getData($idtagihan){
        return $this->db->select('kontrakan.*')
            ->from('tagihan')
            ->join('reservasi','tagihan.idreservasi = reservasi.idreservasi')
            ->join('kontrakan','reservasi.idpengguna = kontrakan.idpengguna')
            ->where('tagihan.idtagihan',$idtagihan)
            ->get()->row();
    }
}
