<?php
class Model_page extends CI_Model
{

	function semua($table) {
    return $this->db->get($table)->num_rows();
	}

	function total_proses($table) {
    return $this->db->get_where($table, array('status'=>1));
	}

	function total_diambil($table) {
    return $this->db->get_where($table, array('status'=>2));
	}

	function tampil($table){
		return $this->db->get_where($table);
	}

	function proses($table){
		return $this->db->get_where($table, array('status'=>1));
	}

	function diambil($table){
		return $this->db->get_where($table, array('status'=>2));
	}

	function tambah($table,$data){
		$this->db->insert($table,$data);
	}

	function edit_barang($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function ambil($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function cancel($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}