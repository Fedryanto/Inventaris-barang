<?php

use Dompdf\Dompdf;

class Barang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->login['role'] != 'petugas' && $this->session->login['role'] != 'admin') redirect();
		$this->data['aktif'] = 'barang';
		$this->load->model('M_barang', 'm_barang');
		$this->load->model('M_ruangan', 'm_ruangan');
		$this->load->helper('url', 'form'); 
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->data['title'] = 'Data Barang';
		$this->data['all_barang'] = $this->m_barang->lihat();
		$this->data['no'] = 1;
	
		$this->load->view('barang/lihat', $this->data);
	
	}

	function getAll()
    {
        $this->db->order_by('barang.kode_barang desc');
        return $this->db->get('barang');
    }

	public function tambah()
	{
		if ($this->session->login['role'] == 'petugas') {
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Tambah Barang';
		$this->data['all_ruangan'] = $this->m_ruangan->lihat();

		$this->load->view('barang/tambah', $this->data);
	}

	public function proses_tambah()
	{
		if ($this->session->login['role'] == 'petugas') {
			$this->session->set_flashdata('error', 'Tambah data hanya untuk admin!');
			redirect('dashboard');
		}

		$config['upload_path']    = './assets/img/barang/';
		$config['allowed_types']  = 'gif|jpg|png|jpeg';
	 	$config['max_size']       = 5120;
	 	$config['file_name']       = 'item-'.date('ymd'). '-'.substr(md5(rand()),0,10);
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')){
			$image = $this->upload->data();

		$data = [
			'image' => $image['file_name'],
			'kode_barang' => $this->input->post('kode_barang'),
			'nama_barang' => $this->input->post('nama_barang'),
			'nama_ruangan' => $this->input->post('nama_ruangan'),
			'stok' => $this->input->post('stok'),
			'satuan' => $this->input->post('satuan'),
			
		];
			$this->m_barang->tambah($data);
			#$data = array('image' => $this->upload->data());
			//$image = $this->upload->data();
			//$this->upload->do_upload('image');
			$this->session->set_flashdata('success', 'Data Barang <strong>Berhasil</strong> Ditambahkan!'); 
			redirect('barang'); 
		
		} else {
				$this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Ditambahkan!');
				redirect('barang');
		}

	}

	public function ubah($kode_barang)
	{
		if ($this->session->login['role'] == 'petugas') {
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}

		$this->data['title'] = 'Ubah Barang';
		$this->data['barang'] = $this->m_barang->lihat_id($kode_barang);
		$this->data['all_ruangan'] = $this->m_ruangan->lihat();
		
		$this->load->view('barang/ubah', $this->data);
	}

	public function proses_ubah($kode_barang)
	{
		if ($this->session->login['role'] == 'petugas') {
			$this->session->set_flashdata('error', 'Ubah data hanya untuk admin!');
			redirect('dashboard');
		}
		if(!empty($_FILES['image']['name'])) {
			$config['upload_path']    = './assets/img/barang/';
			$config['allowed_types']  = 'gif|jpg|png|jpeg';
	 		$config['max_size']       = 5120;
	 		$config['file_name']       = 'item-'.date('ymd'). '-'.substr(md5(rand()),0,10);
			$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')){
					$image = $this->upload->data();

					$data = [
						'image' => $image['file_name'],
						'kode_barang' => $this->input->post('kode_barang'),
						'nama_barang' => $this->input->post('nama_barang'),
						'nama_ruangan' => $this->input->post('nama_ruangan'),
						'stok' => $this->input->post('stok'),
						'satuan' => $this->input->post('satuan'),
			
						];

							//$data = [
							//'kode_barang' => $this->input->post('kode_barang'),
							//'nama_barang' => $this->input->post('nama_barang'),
							//'nama_ruangan' => $this->input->post('nama_ruangan'),
							//'stok' => $this->input->post('stok'),
							//'satuan' => $this->input->post('satuan'),
							//];
					$g = $this->m_barang->getGambar($kode_barang)->row_array();
					unlink('./assets/imgbarang/'.$g['image']);
					$this->m_barang->ubah($data, $kode_barang);

					$this->session->set_flashdata('success', 'Data Barang <strong>Berhasil</strong> Diubah!');
					redirect('barang');
				} else {
					$this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Diubah!');
					redirect('barang');
					}
		}
		else{
			$data = [
				'kode_barang' => $this->input->post('kode_barang'),
				'nama_barang' => $this->input->post('nama_barang'),
				'nama_ruangan' => $this->input->post('nama_ruangan'),
				'stok' => $this->input->post('stok'),
				'satuan' => $this->input->post('satuan'),
			];
	
			if ($this->m_barang->ubah($data, $kode_barang)) {
				$this->session->set_flashdata('success', 'Data Barang <strong>Berhasil</strong> Diubah!');
				redirect('barang');
			} else {
				$this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Diubah!');
				redirect('barang');
			}
		}

	}

	public function hapus($kode_barang)
	{
		if ($this->session->login['role'] == 'petugas') {
			$this->session->set_flashdata('error', 'Hapus data hanya untuk admin!');
			redirect('dashboard');
		}

		if ($this->m_barang->hapus($kode_barang)) {
			$this->session->set_flashdata('success', 'Data Barang <strong>Berhasil</strong> Dihapus!');
			redirect('barang');
		} else {
			$this->session->set_flashdata('error', 'Data Barang <strong>Gagal</strong> Dihapus!');
			redirect('barang');
		}
	}

	public function export()
	{
		$dompdf = new Dompdf();
		$this->data['all_barang'] = $this->m_barang->lihat();
		$this->data['title'] = 'Laporan Data Barang';
		$this->data['no'] = 1;

		$dompdf->setPaper('A4', 'Landscape');
		$html = $this->load->view('barang/report', $this->data, true);
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream('Laporan Data Barang Tanggal ' . date('d F Y'), array("Attachment" => false));
	}
}
