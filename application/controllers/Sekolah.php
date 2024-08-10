<?php

class Sekolah extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_sekolah', 'm_sekolah');
		$this->data['aktif'] = 'sekolah';
	}

	public function index(){
		$this->data['title'] = 'Profil Sekolah';
		$this->data['sekolah'] = $this->m_sekolah->lihat();
		$this->load->view('sekolah', $this->data);
	}

	public function proses_ubah(){
		$data = [
			'nama_sekolah' => $this->input->post('nama_sekolah'),
			'nama_kepsek' => $this->input->post('nama_kepsek'),
			'no_telepon' => $this->input->post('no_telepon'),
			'alamat' => $this->input->post('alamat'),
		];

		if($this->m_sekolah->ubah($data)){
			$this->session->set_flashdata('success', 'Profil Sekolah <strong>Berhasil</strong> Diubah!');
			redirect('sekolah');
		} else {
			$this->session->set_flashdata('error', 'Profil Sekolah <strong>Gagal</strong> Diubah!');
			redirect('sekolah');
		}
	}
}