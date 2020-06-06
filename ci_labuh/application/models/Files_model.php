<?php
class Files_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	

	public function getLaporan()
	{

		$this->db->select('laporan_kapal_tiba_berangkat.*, kapal.nama_kapal, nahkoda.nama_nahkoda, jurumudi.nama');
        $this->db->from('laporan_kapal_tiba_berangkat');
        $this->db->join('kapal', 'kapal.id = laporan_kapal_tiba_berangkat.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = laporan_kapal_tiba_berangkat.id_nahkoda');
        $this->db->join('jurumudi', 'jurumudi.id_jurumudi = laporan_kapal_tiba_berangkat.id_jurumudi');
		// $this->db->select(' laporan_kapal_tiba_berangkat.nama_nahkoda, jurumudi.nama  permohonan_spb.tempat_permohonan, periksa_dokumen_kapal.nama_nahkoda, pernyataan_nahkoda.jumlah_muatan, pernyataan_pengikatan.truck_sedang,periksa_pemenuhan_kewajiban_kapal.jasa_labuh,manifest_penumpang.nama_penumpang');
  //       $this->db->from('permohonan_spb');
  //       $this->db->join('laporan_kapal_tiba_berangkat','laporan_kapal_tiba_berangkat.id_tiba_berangkat=permohonan_spb.id_permohonan_spb');
  //       $this->db->join('periksa_dokumen_kapal','periksa_dokumen_kapal.id_periksa_dokumen = permohonan_spb.id_permohonan_spb');
  //       $this->db->join('pernyataan_nahkoda','pernyataan_nahkoda.id_pernyataan_nahkoda = permohonan_spb.id_permohonan_spb');
  //       $this->db->join('pernyataan_pengikatan','pernyataan_pengikatan.id_pengikatan = permohonan_spb.id_permohonan_spb');
  //         $this->db->join('periksa_pemenuhan_kewajiban_kapal','periksa_pemenuhan_kewajiban_kapal.id_pemenuhan_kewajiban = permohonan_spb.id_permohonan_spb');
  //       $this->db->join('manifest_penumpang','manifest_penumpang.id_manifest = permohonan_spb.id_permohonan_spb');
       
        $query = $this->db->get();
        return $query->result();
	}
	
	

	
}
