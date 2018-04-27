<?php
/**
 * Created by PhpStorm.
 * User: Samuel Nikko
 * Date: 26/04/2018
 * Time: 20:11
 */
class Invoice extends CI_Controller
{
    public function index()
    {
        $data['all'] = $this->Model_Admin->getUser();
        $data['session'] = true;
        $data['namalengkap'] = $this->session->userdata('namalengkap');
        $this->load->view('Invoices', $data);
    }

}