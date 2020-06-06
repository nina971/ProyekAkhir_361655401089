<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D_Jurumudi extends CI_Model {

	public function getStat(){
        return $this->db->get('mjurumudi')->result();
    }
    // public function get($id){
    //     $this->db->select('pernyataan_nahkoda.*, kapal.nama_kapal');
    //     $this->db->from('pernyataan_nahkoda');
    //     $this->db->join('kapal', 'kapal.id = pernyataan_nahkoda.id_kapal');
    //     $this->db->where('id_pernyataan_nahkoda', $id);
    //     $query = $this->db->get()->result();
    //     return $query;
    //     //$this->db->where('id_pernyataan_nahkoda', $id)->get('pernyataan_nahkoda')->row();
    // }

}

/* End of file kapal.php */
/* Location: ./application/models/kapal.php */