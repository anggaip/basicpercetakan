<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_barang extends CI_Model {

	public function get($table, $where="") {
		$g = $this->db->query("SELECT * FROM $table ".$where);
		return $g->result_array();
	}

	public function insert($table, $data) {
		$i = $this->db->insert($table, $data);
		return $i;
	}

	public function update($table, $data, $where) {
		$u = $this->db->update($table, $data, $where);
		return $u;
	}

	public function delete($table, $where)
	 {
		$d = $this->db->delete($table, $where);
		return $d;
	}

}

/* End of file  M_barang*/
/* Location: ./application/models/M_barang */