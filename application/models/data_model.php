<?php

class Data_model extends Model{
	
	function getAll(){
		$q = $this->db->get('data');
		
		if($q->num_rows() > 0){
			foreach($q->result() as $row){
				
			$data[] = $row;
			
			}
			return $data;
		}
	}
}
?>

