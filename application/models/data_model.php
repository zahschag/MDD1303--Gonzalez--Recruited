<?php
class Data_model extends CI_Model {
	function getAll() {
		$this->db->select('user_fullname, user_name');
		$this->db->from('users');
		$this->db->where('user_id', 1);
		
		$q = $this->db->get();
		
		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
}