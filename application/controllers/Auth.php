<?php
/**
 * Created by PhpStorm.
 * User: Chia
 * Date: 14/04/2018
 * Time: 16:44
 */

class Auth extends CI_Controller
{
    public function login(){
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
        $db = $this->User->ceklogin($data);
        if($db != null){
            if($this->makesession($db) == true){
                redirect('/','refresh');
            }
        }else{
            redirect('/','refresh');
        }
    }
    public function makesession($db){
        $session = array(
            'iduser' => $db->iduser,
            'email' => $db->email,
            'nama' => $db->nama,
            'auth' => $db->auth,
        );
        $this->session->set_userdata($session);
        return true;
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('/', 'refresh');
    }
}
