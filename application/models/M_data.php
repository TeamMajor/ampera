<?php
class M_data extends CI_Model{	

	function kebudayaan(){
			$this->db->select('nama');
			$this->db->from('kebudayaan');
			$query = $this->db->get();
			return $query->result_array();
	}

}