<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai extends CI_Controller{

	public function index()
	{
		$this->load->model('Pegawai_model');
		$data["pegawai_list"] = 
		$this->Pegawai_model->getDataPegawaiSemua();
		$this->load->view('Pegawai',$data);
	}

	public function create() {
    	$this->load->model('pegawai_model');
    	$this->form_validation->set_rules('nama', 'Nama Pegawai', 'trim|required');
    	$this->form_validation->set_rules('alamat', 'Alamat Pegawai', 'trim|required');
    	$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir Pegawai', 'trim|required');
       
            array(
                'required'      => 'Isi %s donk, males amat.',
            );

    	if ($this->form_validation->run()==FALSE) {
    		$this->load->view('tambah_pegawai_view');
    	}else {
    		$this->pegawai_model->insertPegawai();
    		$this->load->view('tambah_pegawai_sukses');
    	}
        
    }
 	
 	
 	public function update($id) {
    	$this->load->model('pegawai_model');
    	$this->form_validation->set_rules('nama', 'Nama Pegawai', 'trim|required');
    	$this->form_validation->set_rules('alamat', 'Alamat Pegawai', 'trim|required');
    	$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir Pegawai', 'trim|required');
            array(
                'required'      => 'Isi %s lah, hadeeh.',
             );

    	$data['pegawai']=$this->pegawai_model->getPegawai($id);

    	if ($this->form_validation->run()==FALSE) {
    		$this->load->view('update_pegawai_view', $data);
    	}else {
    		$this->pegawai_model->updateById($id);
    		$this->load->view('edit_sukses');
    	}
    }
	
	 public function delete($id) {
    	$this->load->model('pegawai_model');

    	$data['pegawai']=$this->pegawai_model->getPegawai($id);
    	$this->pegawai_model->deleteById($id);
    	$this->load->view('delete_sukses');
    }
}
?>