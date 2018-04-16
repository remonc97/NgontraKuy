
/**
 * Created by PhpStorm.
 * User: Chia
 * Date: 14/04/2018
 * Time: 16:44
 */
 
 
/*
class Auth extends CI_Controller
{
    public function login(){

    }
}
*/


<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 
	 */
	 
	public function __construct() {
		parent::__construct();	
			$this->load->model('CRUDregist');
	}
	
	//default function when program first running
	public function index()
	{
		$this->load->view('register');
	}
	
	
	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wikipedia extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->model('CRUDregist');
	}

	//Buat View
	public function index()
	{
		if($this->session->name==NULL){
			redirect('');
		}
		
		$menu = array(
			"crudbiasa" => "active",
			"crudjson" => "",
			"crudvalidaiton" => ""
		);

		$alluser = $this->CRUDregist->getAlluser();
		$nama = $this->session->nama;
		$auth = $this->session->auth;
		$data['nama'] = $nama;
		$data['datauser'] = $alluser;
		$data['menu'] = $menu;
		$data['auth'] = $auth;
		$this->load->view('Home',$data);
	}

	public function Add(){
		if($this->session->nama==NULL){
			redirect('');	
		}
		
		$menu = array(
			"crudbiasa" => "active",
			"crudjson" => "",
			"crudvalidaiton" => ""
		
		);
		$nama = $this->session->nama;
		$auth = $this->session->auth;
		$data['nama'] = $nama;
		$data['menu'] = $menu;
		$data['auth'] = $auth;
		$this->load->view('register',$data);
	}
	
	public function NewData(){
		$this->load->view('register');
	}
	
	public function InsetData(){
		$nama = $this->input->post('nama');
		$tgllahir = $this->input->post('tgllahir');
		$notelp = $this->input->post('notelp');
		
		$data = array(
		'nama' =>$nama,
		'tgllahir'=> $tgllahir,
		'notelp'=>$notelp
		);
		
		$result = $this->CRUDregist->InsertUser($data);
		$data = NULL;
		if ($result){
			redirect('Auth');
		}else{
			echo json_encode(array('Gagal' => false));
		}
	
	}
	
	public function Edit($id){
		if($this->session->name==NULL){
			redirect('');	
		}
		$menu = array(
			"crudbiasa" => "active",
			"crudjson" => "",
			"crudvalidaiton" => ""
		
		);
		$nama = $this->session->name;
		$auth = $this->session->auth;		
		$result = $this->CRUDregis->getUser($id);
		
		$data['iduser'] = $id;
		$data['data'] = $result;
		$data['nama'] = $nama;
		$data['auth'] = $auth;
		$data['menu'] = $menu;
		$this->load->view('Edit',$data);
		
	}

	public function EditData(){
		$id = $this->input->post('iduser');
		$nama = $this->input->post('nama');
		$tgllahir = $this->input->post('tgllahir');
		$notelp = $this->input->post('notelp');
		
		$data = array(
		'nama' => $nama,
		'tgllahir'=>$tgllahir,
		'notelp' =>$notelp
		);
		
		$result = $this->CRUDregist->UpdateUser($id,$data);
		$data = NULL;
		if ($result){
			redirect('Auth');	
		}else{
			echo json_encode(array('success' => false));
		}
	}
	
	
	/*
	public function View($id){
		if($this->session->name==NULL){
			redirect('');	
		}
		$menu = array(
			"crudbiasa" => "active",
			"crudjson" => "",
			"crudvalidaiton" => ""
		);
		
		$nama = $this->session->name;
		$auth = $this->session->auth;
		$result = $this->WikipediaModel->getBuku($id);
		
		$data['data'] = $result;
		$data['nama'] = $nama;
		$data['auth'] = $auth;
		$data['menu'] = $menu;
		$this->load->view('View2',$data);
	}
	*/
	
	public function DeleteData($id){
		$result = $this->CRUDregist->DeleteUser($id);
		if ($result){
			redirect('Auth');
		}else{
		}
	}
	
}
	
	
	
	
	
	
	public function authnodatabase(){
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		
		$newdata = array('email'  => $email);
		
		$this->session->set_userdata($newdata);
		$data['email'] = $email;
		
		//kondsi if
		if($email=="admin"){
			
			$this->load->view('Gatau',$data);
			
		}else{
			
			$this->load->view('error');
		}
	}
	
	public function auth(){
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$checkUser = $this->CRUDregist->readUser($email,$password);
	
	
		if($checkUser==NULL){
				
			$this->load->view('register');	
				
		}else{
			$newdata = array(
				'name'  => $checkUser->nama,
				'email'  => $checkUser->email,
				'auth'=>$checkUser->auth
			  );
			//set seassion
			$this->session->set_userdata($newdata);
			redirect('home');
		}
	}
	
	public function logout(){
		
		$sess_array = $this->session->all_userdata();
		
		foreach($sess_array as $key =>$val){
		if($key!='email'
		  && $key!='name'     
		  && $key!='RESERVER_KEY_HERE')$this->session->unset_userdata($key);
		}
		redirect('');
		//redirect to default controller and index function
		//$this->load->view('Login2');	
		
		
	}
	
	public function ShowSession(){
		
		$username = $this->session->username;
		
		$data['email'] = $email;
		
		$this->load->view('ShowSession',$data);
	}
	
	
}
