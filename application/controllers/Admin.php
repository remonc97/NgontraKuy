<?php
/**
 * Created by PhpStorm.
 * User: Nikko
 * Date: 17/04/2018
 * Time: 17:48
 */
class Admin extends CI_Controller
{
	public function index()
	{
		$data['all'] = $this->Model_Admin->getUser();

		$this->load->view('admin',$data);
	}
	public function Penghuni()
	{
		$data['all'] = $this->Model_Admin->getUser();

		$this->load->view('Admin_Penghuni',$data);
	}
	public function view()
	{
		$data1['one'] = $this->Model_Admin->get1User($this->uri->segment(2));
		$this->load->view('Modal_Admin/ShowPemilik', $data1);
	}
	public function edit()
	{
		$data['one1'] = $this->Model_Admin->get1User($this->uri->segment(2));

		$this->load->view('Admin_Edit', $data);
	}
	public function edit1()
	{
		$kode = $this->uri->segment(3);
		$data = array(
			'email' => $this->input->post('email'),
			'nama' =>$this->input->post('nama'),
			'tgllahir' => $this->input->post('tgllahir'),
			'notelp' => $this->input->post('notelp')
		);
		$query = $this->Model_Admin->update($kode,$data);
		if($query==true){
//				print_r($data);
//				die();
			redirect('Admin','refresh');
		}
	}
	public function delete()
	{
		$kode = $this->uri->segment(2);
		$query = $this->Model_Admin->deleteUser($kode);
		if($query==true){
			redirect('Admin','refresh');
		}
	}

}
