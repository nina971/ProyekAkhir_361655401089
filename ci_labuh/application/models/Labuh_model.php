<?php
class Labuh_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	

    public function getAllFiles(){
		$query = $this->db->get('lokasi_labuh');
		return $query->result(); 
	}

   

   
}
?>