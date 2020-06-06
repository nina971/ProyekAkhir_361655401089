<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuanmodel extends CI_Model{

	function create($table,$data1){
		$query = $this->db->insert($table,$data1);
		return $this->db->insert_id();
	}

	function createspb($table,$data1){
		$query = $this->db->insert($table,$data1);
		return $this->db->insert_id();
	}

	function createtiba($table,$data2){
		$query = $this->db->insert($table,$data2);
		return $this->db->insert_id();
	}

	function createnahkoda($table,$data3){
		$query = $this->db->insert($table,$data3);
		return $this->db->insert_id();
	}

	function createpengikatan($table,$data4){
		$query = $this->db->insert($table,$data4);
		return $this->db->insert_id();
	}

	function createdokumen($table,$data5){
		$query = $this->db->insert($table,$data5);
		return $this->db->insert_id();
	}

	function createkewajiban($table,$data6){
		$query = $this->db->insert($table,$data6);
		return $this->db->insert_id();
	}

	function createmanifest($table,$data7){
		$query = $this->db->insert($table,$data7);
		return $this->db->insert_id();
	}
	



	
}

