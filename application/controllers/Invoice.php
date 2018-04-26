<?php
/**
 * Created by PhpStorm.
 * User: Samuel Nikko
 * Date: 26/04/2018
 * Time: 20:11
 */
class Invoice extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Model_Admin');
    }

    public function index()
    {
        $id = $this->session->userdata('idpengguna');
        $data['all'] = $this->Model_Admin->getTagihan();
        $data['user'] = $this->Model_Admin->get1User($id);
        $data['session'] = true;
        $data['namalengkap'] = $this->session->userdata('namalengkap');
        $data['result'] ='Konfirmasi Berhasil';
        $this->load->view('Invoices', $data);
    }
    public function view()
    {

    }
    public function confirm()
    {

        $idtagihan = $this->uri->segment(2);

        $result = $this->Model_Admin->Confirm($idtagihan);

        $data = NULL;
        if ($result){
            $id = $this->session->userdata('idpengguna');
            $data['all'] = $this->Model_Admin->getTagihan();
            $data['user'] = $this->Model_Admin->get1User($id);
            $data['session'] = true;
            $data['namalengkap'] = $this->session->userdata('namalengkap');
            $data['result'] ='Konfirmasi Berhasil';
            $this->load->view('Invoices', $data);
        }else{
            $id = $this->session->userdata('idpengguna');
            $data['all'] = $this->Model_Admin->getTagihan();
            $data['user'] = $this->Model_Admin->get1User($id);
            $data['session'] = true;
            $data['namalengkap'] = $this->session->userdata('namalengkap');
            $data['result'] ='Konfirmasi Gagal';
            $this->load->view('Invoices', $data);
        }
    }

}