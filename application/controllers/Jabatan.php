<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function index($idPegawai)
	{
		$this->load->model('pegawai_model');		
		$data["jabatan_list"] = $this->pegawai_model->getJabatanByPegawai($idPegawai);
		$this->load->view('jabatan', $data);
	}

	public function create($idPegawai)
	{
		// idPegawai = 1
		$this->load->helper('url','form');	
		$this->load->library('form_validation');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_rules('tanggalMasuk', 'tanggalMasuk', 'trim|numberic');
		$this->form_validation->set_rules('tanggalKeluar', 'tanggalKeluar', 'trim|numberic');
		$this->load->model('pegawai_model');	
		$data["jabatan_list"] = $this->pegawai_model->getJabatanByPegawai($idPegawai);
		if($this->form_validation->run()==FALSE){
			$this->load->view('tambah_jabatan_view',$data);
		}else{
			$this->pegawai_model->insertJabatan($idPegawai);
			$this->load->view('tambah_jabatan_view',$data);
		}
	}

	public function update()
	{
		
	}

	public function delete()
	{
		
	}
}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */

 ?>