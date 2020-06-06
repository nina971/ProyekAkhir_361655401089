<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiba_model extends CI_Model {



    public function getTable(){
        $this->db->select('laporan_kapal_tiba_berangkat.*, kapal.nama_kapal, kapal.nama_agen,nahkoda.nama_nahkoda,laporan_kapal_tiba_berangkat.tanggal_tiba_berangkat');
        $this->db->from('laporan_kapal_tiba_berangkat');
        $this->db->join('kapal', 'kapal.id = laporan_kapal_tiba_berangkat.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = laporan_kapal_tiba_berangkat.id_nahkoda');
       // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = laporan_kapal_tiba_berangkat.id_jurumudi');
        $query = $this->db->get();
        return $query->result();
    }

public function get($id = NULL){
        $this->db->select('laporan_kapal_tiba_berangkat.*, kapal.nama_kapal,kapal.nama_agen,nahkoda.nama_nahkoda');
        $this->db->from('laporan_kapal_tiba_berangkat');
        $this->db->join('kapal', 'kapal.id = laporan_kapal_tiba_berangkat.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = laporan_kapal_tiba_berangkat.id_nahkoda');
       // $this->db->join('lokasi_pelabuhan', 'lokasi_pelabuhan.id = laporan_kapal_tiba_berangkat.id_lokasi');
        //$this->db->join('jurumudi', 'jurumudi.id_jurumudi = laporan_kapal_tiba_berangkat.id_jurumudi');
        $this->db->where('id_tiba_berangkat', $id);
        $query = $this->db->get()->result();
        return $query;
        //$this->db->where('id_pernyataan_nahkoda', $id)->get('pernyataan_nahkoda')->row();
    }

    public function view_by_date($date){
        $this->db->where('DATE(tanggal_tiba_berangkat)', $date); // Tambahkan where tanggal nya
        $this->db->select('nahkoda.nama_nahkoda,
            kapal.nama_kapal,
            laporan_kapal_tiba_berangkat.tanggal_tiba_berangkat,');
        $this->db->from('laporan_kapal_tiba_berangkat');
        $this->db->join('kapal', 'kapal.id = laporan_kapal_tiba_berangkat.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = laporan_kapal_tiba_berangkat.id_nahkoda');
        $query = $this->db->get();
        return $query->result();
    }

    public function view_by_month($month, $year){
        $this->db->where('MONTH(tanggal_tiba_berangkat)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tanggal_tiba_berangkat)', $year); // Tambahkan where tahun
         $this->db->select('nahkoda.nama_nahkoda,
            kapal.nama_kapal,
            laporan_kapal_tiba_berangkat.tanggal_tiba_berangkat,');
        $this->db->from('laporan_kapal_tiba_berangkat');
        $this->db->join('kapal', 'kapal.id = laporan_kapal_tiba_berangkat.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = laporan_kapal_tiba_berangkat.id_nahkoda');
        $query = $this->db->get();
        return $query->result();
        
    }

    public function view_by_year($year){
        $this->db->where('YEAR(tanggal_tiba_berangkat)', $year); // Tambahkan where tahun
         $this->db->select('nahkoda.nama_nahkoda,
            kapal.nama_kapal,
            laporan_kapal_tiba_berangkat.tanggal_tiba_berangkat,');
        $this->db->from('laporan_kapal_tiba_berangkat');
        $this->db->join('kapal', 'kapal.id = laporan_kapal_tiba_berangkat.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = laporan_kapal_tiba_berangkat.id_nahkoda');
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

