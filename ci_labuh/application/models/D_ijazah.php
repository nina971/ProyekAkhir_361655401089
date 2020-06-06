<?php defined('BASEPATH') OR exit('No direct script access allowed');

class D_Ijazah extends CI_Model {
    public function getAll(){
        return $this->db->get('ijazah')->result();
    }
}