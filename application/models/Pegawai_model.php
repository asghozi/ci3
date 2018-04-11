<?php 

/**
 * summary
 */
class Pegawai_model extends CI_Model
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }

    public function getDataPegawaiSemua () {
    	$query = $this->db->query("SELECT * FROM pegawai");
		return $query->result_array();
    }

    public function insertPegawai() {
    	$data = array(
    			'namaPegawai' => $this->input->post('nama'),
    			'alamatPegawai' => $this->input->post('alamat'),
    			'tglLahir' => $this->input->post('tgl_lahir'),

    		);
    	$this->db->insert('pegawai', $data);
    }

    public function getPegawai($id) {
    	$this->db->where('idpegawai', $id);
    	$query = $this->db->get('pegawai');
    	return $query->result();
    }

    public function updateById($id) {
    	$data = array(
    		'namaPegawai' => $this->input->post('nama'),
    		'alamatPegawai' => $this->input->post('alamat'),
    		'tglLahir' => $this->input->post('tgl_lahir'),
    		);

    	$this->db->where('idpegawai', $id);
    	$this->db->update('pegawai', $data);
    }

    public function deleteById($id) {
    	$this->db->where('idpegawai', $id);
    	$this->db->delete('pegawai');
    }
}
 ?>