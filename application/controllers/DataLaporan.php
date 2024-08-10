<?php

use Dompdf\Dompdf;

class DataLaporan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->data['aktif'] = 'DataLaporan';
	}

	public function index()
	{
		$this->data['title'] = 'Data Laporan';
		$this->data['no'] = 1;
		$this->load->view('DataLaporan/lihat', $this->data);
	}

}
