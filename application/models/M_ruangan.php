<?php

class M_ruangan extends CI_Model{
	protected $_table = 'data_ruangan';

	public function lihat(){
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function jumlah(){
		$query = $this->db->get($this->_table);
		return $query->num_rows();
	}

	public function lihat_rak(){
		$query = $this->db->select('nama_ruangan');
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function lihat_id($kode_ruangan){
		$query = $this->db->get_where($this->_table, ['kode_ruangan' => $kode_ruangan]);
		return $query->row();
	}

	public function tambah($data){
		return $this->db->insert($this->_table, $data);
	}

	public function ubah($data, $kode_ruangan){
		$query = $this->db->set($data);
		$query = $this->db->where(['kode_ruangan' => $kode_ruangan]);
		$query = $this->db->update($this->_table);
		return $query;
	}

	public function hapus($kode_ruangan){
		return $this->db->delete($this->_table, ['kode_ruangan' => $kode_ruangan]);
	}
}