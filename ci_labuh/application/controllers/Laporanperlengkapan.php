<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanperlengkapan extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		
	}

	public function cari_alat(){
		$kapal = $this->input->post('kapal');

		$data_kapal = $this->db->query('
			SELECT kapal.nama_kapal as kapal,
			SUM(pernyataan_nahkoda.jumlah_alat_navigasi + pernyataan_nahkoda.jumlah_alat_penolong + pernyataan_nahkoda.jumlah_alat_pemadam_kebakaran + pernyataan_nahkoda.jumlah_pencegahan_pencemaran) as jumlah_alat
			 FROM kapal,pernyataan_nahkoda
			 WHERE
			 pernyataan_nahkoda.id_kapal = kapal.id 
			 GROUP BY id_kapal')->result();
		// $data['alat'] = $data_kapal;
		$data['alat'] = json_encode( $data_kapal );
		$this->load->view('alat',$data);
	}

	public function perlengkapan(){

		$kapal = $this->input->post('kapal');

		$data_kapal = $this->db->query('
			SELECT kapal.nama_kapal as kapal,
			kapal.nama_agen,
			jumlah_alat_navigasi, jumlah_alat_penolong, jumlah_pencegahan_pencemaran, jumlah_alat_pemadam_kebakaran,
			SUM(pernyataan_nahkoda.jumlah_alat_navigasi + pernyataan_nahkoda.jumlah_alat_penolong + pernyataan_nahkoda.jumlah_alat_pemadam_kebakaran + pernyataan_nahkoda.jumlah_pencegahan_pencemaran) as jumlah_alat
			 FROM kapal,pernyataan_nahkoda
			 WHERE
			 pernyataan_nahkoda.id_kapal = kapal.id AND
			 kapal.nama_kapal LIKE "'.$kapal.'" ')->result();
		$data['navigasi'] = $data_kapal;
		$this->load->view('perlengkapan',$data);

	}



}

//pernyataan_nahkoda.jumlah_alat_navigasi + pernyataan_nahkoda.jumlah_alat_penolong + pernyataan_nahkoda.jumlah_alat_pemadam_kebakaran + pernyataan_nahkoda.jumlah_pencegahan_pencemaran as jumlah_alat
// kapal.nama_kapal LIKE "'.$kapal.'" 