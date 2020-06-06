<?php
class M_total extends CI_Model{

	//hitung jumlah kendaraan

	public function get($id = NULL){
        $this->db->select('muatan.*, kapal.nama_kapal,kapal.nama_agen,nahkoda.nama_nahkoda');
        $this->db->from('muatan');
        $this->db->join('kapal', 'kapal.id = muatan.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = muatan.id_nahkoda');
        //$this->db->join('lokasi_pelabuhan', 'lokasi_pelabuhan.id = laporan_kapal_tiba_berangkat.id_lokasi');
        //$this->db->join('jurumudi', 'jurumudi.id_jurumudi = laporan_kapal_tiba_berangkat.id_jurumudi');
        $this->db->where('muatan.id', $id);
        $query = $this->db->get()->result();
        return $query;
        //$this->db->where('id_pernyataan_nahkoda', $id)->get('pernyataan_nahkoda')->row();
    }


}
 