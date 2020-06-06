<?php defined('BASEPATH') OR exit('No direct script access allowed');

class D_Laporan extends CI_Model {
    public function getAll(){
        return $this->db->get('kelola_laporan')->result();
    }
}