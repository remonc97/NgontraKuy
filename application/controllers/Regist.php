<?php
class User extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }
 
    public function index()
    {
        $this->load->view('register');
    }
    
    public function register()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama_lengkap', 'trim|required|alpha|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required');
        
		$this->form_validation->set_rules('telp', 'No_Telp', 'trim|required|alpha|min_length[11]|max_length[15]');
        $this->form_validation->set_rules('no_rek', 'No_Rek', 'trim|required|alpha|min_length[1]|max_length[16]');
        
        $data['title'] = 'Register';
        
        if ($this->form_validation->run() === FALSE)
        {            
            $this->load->view('template/header', $data);
            $this->load->view('register');
            $this->load->view('template/footer');
 
        }
        else
        { 
            if ($this->user_model->set_user())
            {                             
                $this->session->set_flashdata('msg_success','Registration Successful!');
                redirect('user/register');            
            }
            else
            {                
                $this->session->set_flashdata('msg_error','Error! Please try again later.');
                redirect('user/register');
            }
        }
    }
    
    public function login()
    {        
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');        
        
        $data['title'] = 'Login';
        
        if ($this->form_validation->run() === FALSE)
        {            
            $this->load->view('template/header', $data);
            $this->load->view('user/login');
            $this->load->view('template/footer');
 
        }
        else
        { 
            if ($user = $this->user_model->get_user_login($email, $password))
            {   
                /*$user_data = array(
                              'email' => $email,
                              'is_logged_in' => true
                         );
                     
                $this->session->set_userdata($user_data);*/
                
                $this->session->set_userdata('email', $email);
                $this->session->set_userdata('id_user', $user['id_users']);
                $this->session->set_userdata('is_logged_in', true);
                
                
                $this->session->set_flashdata('msg_success','Login Successful!');
                redirect('news');                
            }
            else
            {
                $this->session->set_flashdata('msg_error','Login credentials does not match!');
                
                $currentClass = $this->router->fetch_class(); // class = controller
                $currentAction = $this->router->fetch_method(); // action = function
                
                redirect("$currentClass/$currentAction");
                //redirect('user/login');
            }
        }
    }
    
    public function logout()
    {    
        if ($this->session->userdata('is_logged_in')) {
            
            //$this->session->unset_userdata(array('email' => '', 'is_logged_in' => ''));
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('is_logged_in');
            $this->session->unset_userdata('id_user');            
        }
        redirect('news');
    }    
}