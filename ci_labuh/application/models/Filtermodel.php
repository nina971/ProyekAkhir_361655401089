<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Filtermodel extends CI_Model {

	function getLaporan(){
		//tampilkan semua laporan yang dibutuhkan 
		$this->db->select('nahkoda.nama_nahkoda,
			kapal.nama_kapal,
			laporan_kapal_tiba_berangkat.jumlah_abk,
			laporan_kapal_tiba_berangkat.tanggal_tiba_berangkat,
			permohonan_spb.jumlah_awak,
			permohonan_spb.jumlah_muatan,
			permohonan_spb.jumlah_penumpang,
			permohonan_spb.pelabuhan_tujuan,
			pernyataan_nahkoda.stabilitas_kapal_tolak');
        $this->db->from('laporan_kapal_tiba_berangkat');
        $this->db->join('kapal', 'kapal.id = laporan_kapal_tiba_berangkat.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = laporan_kapal_tiba_berangkat.id_nahkoda');
        $this->db->join('permohonan_spb', 'permohonan_spb.id_permohonan_spb = laporan_kapal_tiba_berangkat.id_tiba_berangkat');
         $this->db->join('pernyataan_nahkoda', 'pernyataan_nahkoda.id_pernyataan_nahkoda = laporan_kapal_tiba_berangkat.id_tiba_berangkat');
        $query = $this->db->get();
        return $query->result();
	}

	public function view_by_date($date){
        $this->db->where('DATE(tanggal_tiba_berangkat)', $date); // Tambahkan where tanggal nya
		$this->db->select('nahkoda.nama_nahkoda,
			kapal.nama_kapal,
			laporan_kapal_tiba_berangkat.jumlah_abk,
			laporan_kapal_tiba_berangkat.tanggal_tiba_berangkat,
			permohonan_spb.jumlah_awak,
			permohonan_spb.jumlah_muatan,
			permohonan_spb.jumlah_penumpang,
			permohonan_spb.pelabuhan_tujuan,
			pernyataan_nahkoda.stabilitas_kapal_tolak');
        $this->db->from('laporan_kapal_tiba_berangkat');
        $this->db->join('kapal', 'kapal.id = laporan_kapal_tiba_berangkat.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = laporan_kapal_tiba_berangkat.id_nahkoda');
        $this->db->join('permohonan_spb', 'permohonan_spb.id_permohonan_spb = laporan_kapal_tiba_berangkat.id_tiba_berangkat');
         $this->db->join('pernyataan_nahkoda', 'pernyataan_nahkoda.id_pernyataan_nahkoda = laporan_kapal_tiba_berangkat.id_tiba_berangkat');
        $query = $this->db->get();
        return $query->result();
	}

	public function view_by_month($month, $year){
        $this->db->where('MONTH(tanggal_tiba_berangkat)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tanggal_tiba_berangkat)', $year); // Tambahkan where tahun
        $this->db->select('nahkoda.nama_nahkoda,
			kapal.nama_kapal,
			laporan_kapal_tiba_berangkat.jumlah_abk,
			laporan_kapal_tiba_berangkat.tanggal_tiba_berangkat,
			permohonan_spb.jumlah_awak,
			permohonan_spb.jumlah_muatan,
			permohonan_spb.jumlah_penumpang,
			permohonan_spb.pelabuhan_tujuan,
			pernyataan_nahkoda.stabilitas_kapal_tolak');
        $this->db->from('laporan_kapal_tiba_berangkat');
        $this->db->join('kapal', 'kapal.id = laporan_kapal_tiba_berangkat.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = laporan_kapal_tiba_berangkat.id_nahkoda');
        $this->db->join('permohonan_spb', 'permohonan_spb.id_permohonan_spb = laporan_kapal_tiba_berangkat.id_tiba_berangkat');
         $this->db->join('pernyataan_nahkoda', 'pernyataan_nahkoda.id_pernyataan_nahkoda = laporan_kapal_tiba_berangkat.id_tiba_berangkat');
        $query = $this->db->get();
        return $query->result();
        
	}

	public function view_by_year($year){
        $this->db->where('YEAR(tanggal_tiba_berangkat)', $year); // Tambahkan where tahun
        $this->db->select('nahkoda.nama_nahkoda,
			kapal.nama_kapal,
			laporan_kapal_tiba_berangkat.jumlah_abk,
			laporan_kapal_tiba_berangkat.tanggal_tiba_berangkat,
			permohonan_spb.jumlah_awak,
			permohonan_spb.jumlah_muatan,
			permohonan_spb.jumlah_penumpang,
			permohonan_spb.pelabuhan_tujuan,
			pernyataan_nahkoda.stabilitas_kapal_tolak');
        $this->db->from('laporan_kapal_tiba_berangkat');
        $this->db->join('kapal', 'kapal.id = laporan_kapal_tiba_berangkat.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = laporan_kapal_tiba_berangkat.id_nahkoda');
        $this->db->join('permohonan_spb', 'permohonan_spb.id_permohonan_spb = laporan_kapal_tiba_berangkat.id_tiba_berangkat');
         $this->db->join('pernyataan_nahkoda', 'pernyataan_nahkoda.id_pernyataan_nahkoda = laporan_kapal_tiba_berangkat.id_tiba_berangkat');
        $query = $this->db->get();
        return $query->result();
	}

	public function option_tahun(){
        $this->db->select('YEAR(tanggal_tiba_berangkat) AS tahun'); // Ambil Tahun dari field tgl
        $this->db->from('laporan_kapal_tiba_berangkat'); // select ke tabel transaksi
        $this->db->order_by('YEAR(tanggal_tiba_berangkat)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tanggal_tiba_berangkat)'); // Group berdasarkan tahun pada field tgl
        
        return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
    }



}