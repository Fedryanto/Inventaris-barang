<?php

use Dompdf\Dompdf;

class Ruangan extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if($this->session->login['role'] != 'petugas' && $this->session->login['role'] != 'admin') redirect();
		$this->load->model('M_ruangan', 'm_ruangan');
		$this->data['aktif'] = 'ruangan';
	}

	public function index(){
		$this->data['title'] = 'Data Ruangan';
		$this->data['all_ruangan'] = $this->m_ruangan->lihat();
		$this->data['no'] = 1;

		$this->load->view('ruangan/lihat', $this->data);
	}

	public function tambah(){
		if ($this->session->login['role'] == 'petugas'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Tambah Ruangan';

		$this->load->view('ruangan/tambah', $this->data);
	}

	public function proses_tambah(){
		if ($this->session->login['role'] == 'petugas'){
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		$data = [
			'kode_ruangan' => $this->input->post('kode_ruangan'),
			'nama_ruangan' => $this->input->post('nama_ruangan'),
		];

		if($this->m_ruangan->tambah($data)){
			$this->session->set_flashdata('success', 'Data Ruangan <strong>Berhasil</strong> Ditambahkan!');
			redirect('ruangan');
		} else {
			$this->session->set_flashdata('error', 'Data Ruangan <strong>Gagal</strong> Ditambahkan!');
			redirect('ruangan');
		}
	}

	public function ubah($kode_ruangan){
		if ($this->session->login['role'] == 'petugas'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Ubah Ruangan';
		$this->data['ruangan'] = $this->m_ruangan->lihat_id($kode_ruangan);

		$this->load->view('ruangan/ubah', $this->data);
	}

	public function proses_ubah($kode_ruangan){
		if ($this->session->login['role'] == 'petugas'){
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}

		$data = [
			'kode_ruangan' => $this->input->post('kode_ruangan'),
			'nama_ruangan' => $this->input->post('nama_ruangan'),
		];

		if($this->m_ruangan->ubah($data, $kode_ruangan)){
			$this->session->set_flashdata('success', 'Data Ruangan <strong>Berhasil</strong> Diubah!');
			redirect('ruangan');
		} else {
			$this->session->set_flashdata('error', 'Data Ruangan <strong>Gagal</strong> Diubah!');
			redirect('ruangan');
		}
	}

	public function hapus($kode_ruangan){
		if ($this->session->login['role'] == 'petugas'){
			$this->session->set_flashdata('error', 'Hapus data hanya untuk admin!');
			redirect('dashboard');
		}
		
		if($this->m_ruangan->hapus($kode_ruangan)){
			$this->session->set_flashdata('success', 'Data Ruangan <strong>Berhasil</strong> Dihapus!');
			redirect('ruangan');
		} else {
			$this->session->set_flashdata('error', 'Data Ruangan <strong>Gagal</strong> Dihapus!');
			redirect('ruangan');
		}
	}

	public function export(){
		$dompdf = new Dompdf();
		$this->data['all_ruangan'] = $this->m_ruangan->lihat();
		$this->data['title'] = 'Laporan Data Ruangan';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Landscape');
		$html = $this->load->view('ruangan/report', $this->data, true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data Ruangan Tanggal ' . date('d F Y'), array("Attachment" => false));
	}
}