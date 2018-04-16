<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class CRUDregist extends CI_Model{
	
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    //insert into user table
   
	public function InsertUser($data){	
		$checkinsert = false;
		try{
			$this->db->insert('user',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			
			$checkinsert = false;
		}
		
		return $checkinsert; 
	}
	
	public function readUser($user,$password){
		$result = $this->db->where('UPPER(email)', strtoupper($user))->where('password',md5($password))->limit(1)->get('email');
		return $result->row();
	}
	
	public function getAllUser(){
		$result = $this->db->get('user');
		return $result->result();
	}
	
	public function getUser($id){
		$result = $this->db->where('iduser',$id)->get('email');
		return $result->row();
	}
	
	public function UpdateUser($id,$data){
		$checkupdate = false;
		
		try{
			$this->db->where('iduser',$id);
			$this->db->update('user', $data);
			$checkupdate = true;
		}catch (Exception $ex) {
			$checkupdate = false;
		}
		
		return $checkupdate; 
	}
	
	public function DeleteUser($id){
		$checkupdate = false;
		
		try{
			$this->db->where('iduser',$id);
			$this->db->delete('user');
			$checkupdate = true;
		}catch (Exception $ex) {
			$checkupdate = false;
		}
		
		return $checkupdate;
	}
	
 		

    //send verification email to user's email id
    function sendEmail($to_email)
    {
        $from_email = 'puspabudiarti17@gmail.com'; //change this to yours
        $subject = 'Verify Your Email Address';
        $message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://www.mydomain.com/user/verify/' . md5($to_email) . '<br /><br /><br />Thanks<br />Mydomain Team';
        
        //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.mydomain.com'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = '********'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        
        //send mail
        $this->email->from($from_email, 'Mydomain');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
    }
    
    //activate user account
    function verifyEmailID($key)
    {
        $data = array('status' => 1);
        $this->db->where('md5(email)', $key);
        return $this->db->update('user', $data);
    }
}