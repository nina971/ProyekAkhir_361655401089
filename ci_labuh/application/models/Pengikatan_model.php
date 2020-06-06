<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengikatan_model extends CI_Model {



    public function getTable(){
        $this->db->select('pernyataan_pengikatan.*, kapal.nama_kapal,nahkoda.nama_nahkoda');
        $this->db->from('pernyataan_pengikatan');
        $this->db->join('kapal', 'kapal.id = pernyataan_pengikatan.id_kapal');
         $this->db->join('nahkoda', 'nahkoda.id = pernyataan_pengikatan.id_nahkoda');
        // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = pernyataan_pengikatan.id_jurumudi');
        $query = $this->db->get();
        return $query->result();
    }

    



   

    public function get($id){
       $this->db->select('pernyataan_pengikatan.*, kapal.nama_kapal,kapal.nama_agen,nahkoda.nama_nahkoda');
        $this->db->from('pernyataan_pengikatan');
        $this->db->join('kapal', 'kapal.id = pernyataan_pengikatan.id_kapal');
         $this->db->join('nahkoda', 'nahkoda.id = pernyataan_pengikatan.id_nahkoda');
        // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = pernyataan_pengikatan.id_jurumudi');
        $this->db->where('id_pengikatan', $id);
        $query = $this->db->get()->result();
        return $query;
        //$this->db->where('id_pernyataan_nahkoda', $id)->get('pernyataan_nahkoda')->row();
    }

    

   
   

}

