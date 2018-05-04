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
    }

    public function index()
    {
        if($this->User->ceksession() == true) {

            $data['session'] = true;
            $data['namalengkap'] = $this->session->userdata('namalengkap');
            $data['idpengguna']=$this->session->userdata('idpengguna');
            $data['nama'] = $this->session->userdata('namalengkap');
            $data['auth']=$this->session->userdata('auth');

            $data['all'] = $this->Tagihan->getTagihan($data['idpengguna']);
            $data['tagihan1'] = $this->Tagihan->getJmlTagihan($data['idpengguna']);
            $this->load->view('Invoices', $data);
        }else{
            redirect('/','refresh');
        }
    }
    public function view()
    {
        if($this->User->ceksession() == true){
            $idtagihan = $this->uri->segment(2);
            $data['tagihanuser'] = $this->Tagihan->getDataTagihan($idtagihan);
            $data['idpengguna']=$this->session->userdata('idpengguna');
            $data['namalengkap'] = $this->session->userdata('namalengkap');
            $data['auth']=$this->session->userdata('auth');
            $data['session'] = true;

            $data['tagihan'] = $this->Tagihan->getJmlTagihan($data['idpengguna']);
            $data['datatagihan'] = $this->Kontrakan->getData($idtagihan);
            $data['datakontrakan'] = $this->Kontrakan->getDataUntukTagihan($data['datatagihan']->idreservasi);
            $data['owner'] = $this->Kontrakan->getNamaPemilik($data['datakontrakan']->idpengguna);

            if($data['tagihan'] != null){
                $this->load->view('isitagihan',$data);
            }else{
                redirect('Invoices','refresh');
            }
        }else{
            redirect('/','refresh');
        }

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