<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller{

	public function index()
	{
		$this->load->model('Pegawai_model');
		$data["Pegawai_list"] = 
		$this->Pegawai_model->getDataPegawai();
		$this->load->view('Pegawai',$data)
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');

		if ($this->form_validation->run()==FALSE){
				$this->load->view('tambah_pegawai_view');
		}else{
			$this->load->view('tambah_pegawai_sukses');
		}
	}

	public function delete()
	{
	
	}	
	}
}
?>