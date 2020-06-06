<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Muatan_model extends CI_Model {

  

  public function view_by_date($date){
        $this->db->where('DATE(tanggal)', $date); // Tambahkan where tanggal nya
        
    return $this->db->get('muatan')->result();// Tampilkan data transaksi sesuai tanggal yang diinput oleh user pada filter

  }
    
  public function view_by_month($month, $year){
        $this->db->where('MONTH(tanggal)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tanggal)', $year); // Tambahkan where tahun
        
    return $this->db->get('muatan')->result(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
  }
    
  public function view_by_year($year){
        $this->db->where('YEAR(muatan.tanggal)', $year); // Tambahkan where tahun
        
    return $this->db->get('muatan')->result(); // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
  }
    
  public function view_all(){

        $this->db->select('muatan.*, kapal.nama_kapal,nahkoda.nama_nahkoda');
        $this->db->from('muatan');
        $this->db->join('kapal', 'kapal.id = muatan.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = muatan.id_nahkoda');
        // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = periksa_pemenuhan_kewajiban_kapal.id_jurumudi');
        $query = $this->db->get();
        return $query->result();
    
  }
    
    public function option_tahun(){
        $this->db->select('YEAR(muatan.tanggal) AS tahun'); // Ambil Tahun dari field tgl
        $this->db->from('muatan'); // select ke tabel transaksi
        $this->db->order_by('YEAR(muatan.tanggal)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(muatan.tanggal)'); // Group berdasarkan tahun pada field tgl
        
        return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
    }
}