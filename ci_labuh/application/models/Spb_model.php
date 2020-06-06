<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spb_model extends CI_Model {



    public function getTable(){
       $this->db->select('unggahspb.*, kapal.nama_kapal,kapal.kebangsaan,kapal.imo, kapal.tanda_panggilan,nahkoda.nama_nahkoda,mjurumudi.NIK,mjurumudi.nama_jurumudi');
        $this->db->from('unggahspb');
        $this->db->join('kapal', 'kapal.id = unggahspb.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = unggahspb.id_nahkoda');
        $this->db->join('mjurumudi', 'mjurumudi.id_nahkoda = unggahspb.id_nahkoda');
        $query = $this->db->get();
        return $query->result();
    }

    public function get($id = NULL){
        $this->db->select('unggahspb.*, kapal.nama_kapal,kapal.kebangsaan,kapal.imo, kapal.tanda_panggilan,kapal.grosstons,nahkoda.nama_nahkoda,nama_dokumen, 
diterbitkan_pada, 
diterbitkan_oleh, mjurumudi.NIK,mjurumudi.nama_jurumudi');
        $this->db->from('unggahspb');
        //$this->db->from('upload_dokumen');
        $this->db->join('kapal', 'kapal.id = unggahspb.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = unggahspb.id_nahkoda');
        $this->db->join('upload_dokumen', 'upload_dokumen.id_nahkoda = unggahspb.id_nahkoda');
         $this->db->join('mjurumudi', 'mjurumudi.id_nahkoda = unggahspb.id_nahkoda');
        $this->db->where('id_spb', $id);
        $query = $this->db->get()->result();
        return $query;
        //$this->db->where('id_pernyataan_nahkoda', $id)->get('pernyataan_nahkoda')->row();
    }

    public function insert($data){
        return $this->db->insert('unggahspb', $data);
    }
    public function  update($data, $id){
        return $this->db->where('id_spb', $id)->update('unggahspb', $data);
    }

    public function delete($id){
        return $this->db->where('id_spb', $id)->delete('unggahspb');
    }
        public function download($id){
        $query = $this->db->get_where('unggahspb',array('id_spb'=>$id));
        return $query->row_array();
    }


   
   

}

