<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi_model extends CI_Model {



  public function get_pesan(){
  	$query = $this->db->query('SELECT * FROM notifikasi');
  	return $query->result_array();
  }

  public function insert_data($data,$table){
  	$this->db->insert($table,$data);
  }

    
   

}

