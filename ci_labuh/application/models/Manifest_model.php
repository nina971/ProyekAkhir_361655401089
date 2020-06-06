<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manifest_model extends CI_Model {

    public function getManifest($id){
        $this->db->select('manifest_penumpang.*, kapal.id,  kapal.nama_kapal');
        $this->db->from('manifest_penumpang');
        $this->db->join('kapal', 'kapal.id = manifest_penumpang.id_kapal');
        //$this->db->join('nahkoda', 'nahkoda.id = pernyataan_pengikatan.id_nahkoda');
        // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = manifest_penumpang.id_jurumudi');
        $this->db->where('kapal.id', $id);
        $query = $this->db->get();
        return $query->result();
    
    }

     public function getTable(){
        $this->db->select('manifest_penumpang.*, kapal.nama_kapal,kapal.nama_agen');
        $this->db->from('manifest_penumpang');
        $this->db->join('kapal', 'kapal.id = manifest_penumpang.id_kapal');
       // $this->db->join('nahkoda', 'nahkoda.id = pernyataan_pengikatan.id_nahkoda');
        // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = manifest_penumpang.id_jurumudi');
        $query = $this->db->get();
        return $query->result();
    }




     
   
   
   //SELECT tbl_names.id, tbl_section.id, name, section
  //FROM tbl_names
  //JOIN tbl_section ON tbl_section.id = tbl_names.id 

}

