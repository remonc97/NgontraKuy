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
	
	 public function get_results($search_term='default')
    {
        // Use the Active Record class for safer queries.
        $this->db->select('*');
        $this->db->from('rumah');
        $this->db->like('fasilitas',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }
	
}