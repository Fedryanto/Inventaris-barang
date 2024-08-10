<?php

use Dompdf\Dompdf;

class Pengguna extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->login['role'] != 'petugas' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'pengguna';
		$this->load->model('M_pengguna', 'm_pengguna');
	}

	public function index()
	{
		if ($this->session->login['role'] == 'petugas') {
			$this->session->set_flashdata('error', 'Managemen Administrator hanya untuk admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Data Administrator';
		$this->data['all_pengguna'] = $this->m_pengguna->lihat();
		$this->data['no'] = 1;

		$this->load->view('pengguna/lihat', $this->data);
	}

	public function tambah()
	{
		if ($this->session->login['role'] == 'petugas') {
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Tambah Administrator';

		$this->load->view('pengguna/tambah', $this->data);
	}

	public function proses_tambah()
	{
		if ($this->session->login['role'] == 'petugas') {
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		$data = [
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		];

		if ($this->m_pengguna->tambah($data)) {
			$this->session->set_flashdata('success', 'Data Administrator <strong>Berhasil</strong> Ditambahkan!');
			redirect('pengguna');
		} else {
			$this->session->set_flashdata('error', 'Data Administrator <strong>Gagal</strong> Ditambahkan!');
			redirect('pengguna');
		}
	}

	public function ubah($id)
	{
		if ($this->session->login['role'] == 'petugas') {
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Ubah Administrator';
		$this->data['pengguna'] = $this->m_pengguna->lihat_id($id);

		$this->load->view('pengguna/ubah', $this->data);
	}

	public function proses_ubah($id)
	{
		if ($this->session->login['role'] == 'petugas') {
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}

		$data = [
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
		];

		if ($this->m_pengguna->ubah($data, $id)) {
			$this->session->set_flashdata('success', 'Data Administrator <strong>Berhasil</strong> Diubah!');
			redirect('pengguna');
		} else {
			$this->session->set_flashdata('error', 'Data Administrator <strong>Gagal</strong> Diubah!');
			redirect('pengguna');
		}
	}

	public function hapus($id)
	{
		if ($this->session->login['role'] == 'petugas') {
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}

		if ($this->m_pengguna->hapus($id)) {
			$this->session->set_flashdata('success', 'Data Administrator <strong>Berhasil</strong> Dihapus!');
			redirect('pengguna');
		} else {
			$this->session->set_flashdata('error', 'Data Administrator <strong>Gagal</strong> Dihapus!');
			redirect('pengguna');
		}
	}

	public function export()
	{
		$dompdf = new Dompdf();
		// $this->data['perusahaan'] = $this->m_usaha->lihat();
		$this->data['all_pengguna'] = $this->m_pengguna->lihat();
		$this->data['title'] = 'Laporan Data Administrator';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Landscape');
		$html = $this->load->view('pengguna/report', $this->data, true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data Administrator Tanggal ' . date('d F Y'), array("Attachment" => false));
	}
}