<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->data['hasil'] = $this->model_crud->getUser('data_putri');
		$this->load->view('welcome_message', $this->data);
	}

	public function form_input()
	{
		$this->load->view('form_input');
	}

	public function insert()
	{
		$nama =$_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$asal = $_POST['asal'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$data = array('Nama' => $nama,'No_HP' => $no_hp,'Asal' => $asal,'Tanggal_Lahir' => $tanggal_lahir);
		$tambah = $this->model_crud->tambahData('data_putri',$data);
		if($tambah > 0){
			redirect('Welcome\index');
		}
		else{
			echo 'Failed';
		}
	}

	public function delete($id)
	{
		$hapus  = $this -> model_crud->hapusData('data_putri',$id);
		if($hapus > 0){
			redirect('Welcome\index');
		}
		else{
			echo 'Failed';
		}
	}

	public function form_edit($id){
		$this->data['dataEdit'] = $this->model_crud->dataEdit('data_putri',$id);
		$this->load->view('form_edit',$this->data);
	}

	public function update($id)
	{
		$nama =$_POST['nama'];
		$no_hp = $_POST['no_hp'];
		$asal = $_POST['asal'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$data = array('Nama' => $nama,'No_HP' => $no_hp,'Asal' => $asal,'Tanggal_Lahir' => $tanggal_lahir);
		$edit = $this->model_crud->editData('data_putri',$data,$id);
		if($edit > 0){
			redirect('Welcome\index');
		}
		else{
			echo 'Failed';
		}
	}
}
