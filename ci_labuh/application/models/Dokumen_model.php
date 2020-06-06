<?php
class Dokumen_model extends CI_Model {
	
	
 public function getTable(){
        $this->db->select('periksa_dokumen_kapal.*, kapal.nama_kapal,nahkoda.nama_nahkoda');
        $this->db->from('periksa_dokumen_kapal');
        $this->db->join('kapal', 'kapal.id = periksa_dokumen_kapal.id_kapal');
         $this->db->join('nahkoda', 'nahkoda.id = periksa_dokumen_kapal.id_nahkoda');
        // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = periksa_dokumen_kapal.id_jurumudi');
        $query = $this->db->get();
        return $query->result();
    }
	
	public function get($id=NULL){
        $this->db->select('periksa_dokumen_kapal.*, kapal.nama_kapal,nahkoda.nama_nahkoda');
        $this->db->from('periksa_dokumen_kapal');
        $this->db->join('kapal', 'kapal.id = periksa_dokumen_kapal.id_kapal');
         $this->db->join('nahkoda', 'nahkoda.id = periksa_dokumen_kapal.id_nahkoda');
        // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = periksa_dokumen_kapal.id_jurumudi');
        $this->db->where('id_periksa_dokumen', $id);
        $query = $this->db->get()->result();
        return $query;
        //$this->db->where('id_pernyataan_nahkoda', $id)->get('pernyataan_nahkoda')->row();
    }

    
	
}
?>