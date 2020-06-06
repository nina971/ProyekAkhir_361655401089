<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permohonan_model extends CI_Model {



    public function getTable(){
        $this->db->select('permohonan_spb.*, kapal.nama_kapal,nahkoda.nama_nahkoda');
         $this->db->from('permohonan_spb');
        $this->db->join('kapal', 'kapal.id = permohonan_spb.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = permohonan_spb.id_nahkoda');
        // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = permohonan_spb.id_jurumudi');
        //$this->db->where('id_permohonan_spb', $id);
        $query = $this->db->get()->result();
        return $query;
        
       
    }
    


    public function get($id=NULL){
        $this->db->select('permohonan_spb.*, kapal.*,nahkoda.nama_nahkoda');
         $this->db->from('permohonan_spb');
        $this->db->join('kapal', 'kapal.id = permohonan_spb.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = permohonan_spb.id_nahkoda');
        // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = permohonan_spb.id_jurumudi');
        $this->db->where('id_permohonan_spb', $id);
        $query = $this->db->get()->result();
        return $query;
        //$this->db->where('id_pernyataan_nahkoda', $id)->get('pernyataan_nahkoda')->row();
    }

   

   

    public function  profil($data, $id){
        return $this->db->where('id_permohonan_spb', $id)->get('permohonan_spb', $data);
    }

   
   

}

