<?php defined('BASEPATH') OR exit('No direct script access allowed');

class D_Abk extends CI_Model {
    public function getAll(){
        return $this->db->get('abk')->result();
    }
}