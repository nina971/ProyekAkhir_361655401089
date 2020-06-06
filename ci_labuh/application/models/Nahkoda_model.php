<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nahkoda_model extends CI_Model {



    public function getTable(){
        $this->db->select('pernyataan_nahkoda.*, kapal.nama_kapal,nahkoda.nama_nahkoda');
        $this->db->from('pernyataan_nahkoda');
        $this->db->join('kapal', 'kapal.id = pernyataan_nahkoda.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = pernyataan_nahkoda.id_nahkoda');
        // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = periksa_pemenuhan_kewajiban_kapal.id_jurumudi');
        $query = $this->db->get();
        return $query->result();
    }

     public function get($id = NULL){
        $this->db->select('pernyataan_nahkoda.*, kapal.nama_kapal,kapal.nama_agen,nahkoda.nama_nahkoda');
        $this->db->from('pernyataan_nahkoda');
        $this->db->join('nahkoda', 'nahkoda.id = pernyataan_nahkoda.id_nahkoda');
        // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = periksa_pemenuhan_kewajiban_kapal.id_jurumudi');
        $this->db->join('kapal', 'kapal.id = pernyataan_nahkoda.id_kapal');
        $this->db->where('id_pernyataan_nahkoda', $id);
        $query = $this->db->get()->result();
        return $query;
        //$this->db->where('id_pernyataan_nahkoda', $id)->get('pernyataan_nahkoda')->row();
    }


   

    
    
   
   

}

