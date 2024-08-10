<?php

class M_barang extends CI_Model{
	protected $_table = 'barang';

	public function lihat(){
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	function getAll()
    {
        $this->db->order_by('barang.kode_barang desc');
        return $this->db->get('barang');
    }
	function totalRows($table)
	{
		return $this->db->count_all_results($table);
    }
	public function jumlah(){
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}

	public function lihat_stok(){
		$query = $this->db->get_where($this->_table, 'stok >= 0');
		return $query->result();
	}

	public function lihat_id($kode_barang){
		$query = $this->db->get_where($this->_table, ['kode_barang' => $kode_barang]);
		return $query->row();
	}

	public function lihat_nama_barang($nama_barang){
		$query = $this->db->select('*');
		$query = $this->db->where(['nama_barang' => $nama_barang]);
		$query = $this->db->get($this->_table);
		return $query->row();
	}

	public function tambah($data){
		return $this->db->insert($this->_table, $data);
		
	}

    function getGambar($kode_barang)
    {
        $this->db->select('image');
        $this->db->from('barang');
        $this->db->where('kode_barang', $kode_barang);
        return $this->db->get();
    }

	public function plus_stok($stok, $nama_barang){
		$query = $this->db->set('stok', 'stok+' . $stok, false);
		$query = $this->db->where('nama_barang', $nama_barang);
		$query = $this->db->update($this->_table);
		return $query;
	}

	public function min_stok($stok, $nama_barang){
		$query = $this->db->set('stok', 'stok-' . $stok, false);
		$query = $this->db->where('nama_barang', $nama_barang, 'stok >= 0');
		$query = $this->db->update($this->_table);
		return $query;
	}

	public function ubah($data, $kode_barang){
		$query = $this->db->set($data);
		$query = $this->db->where(['kode_barang' => $kode_barang]);
		$query = $this->db->update($this->_table);
		return $query;
	}

	public function hapus($kode_barang){
		return $this->db->delete($this->_table, ['kode_barang' => $kode_barang]);
	}
}