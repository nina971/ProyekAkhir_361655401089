<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LaporanModel extends CI_Model {
	public function view_by_date($date){
        $this->db->where('DATE(tgl)', $date); // Tambahkan where tanggal nya
        
		 $this->db->select('laporan.*,  kapal.nama_kapal');
        $this->db->from('laporan');
        $this->db->join('kapal', 'kapal.id = laporan.id_kapal');
        $query = $this->db->get();
        return $query->result();
	}

	 public function getTable(){
       
    }

      public function insert($data){
        return $this->db->insert('laporan', $data);
    }

    public function get($id){
        return $this->db->where('id', $id)->get('laporan')->row();
    }

    public function  update($data, $id){
        return $this->db->where('id', $id)->update('laporan', $data);
    }

    public function delete($id){
        return $this->db->where('id', $id)->delete('laporan');
    }
    
	public function view_by_month($month, $year){
        $this->db->where('MONTH(tanggal_tiba_berangkat)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tanggal_tiba_berangkat)', $year); // Tambahkan where tahun
        
		 $this->db->select('laporan_kapal_tiba_berangkat.*,  kapal.nama_kapal');
        $this->db->from('laporan_kapal_tiba_berangkat');
        $this->db->join('kapal', 'kapal.id = laporan_kapal_tiba_berangkat.id_kapal');
        $query = $this->db->get();
        return $query->result();
         // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
	}
    
	public function view_by_year($year){
        $this->db->where('YEAR(tgl)', $year); // Tambahkan where tahun
        
		 $this->db->select('laporan.*,  kapal.nama_kapal');
        $this->db->from('laporan');
        $this->db->join('kapal', 'kapal.id = laporan.id_kapal');
        $query = $this->db->get();
        return $query->result();// Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
	}

    
	public function view_all(){
		 $this->db->select('laporan.*,  kapal.nama_kapal');
        $this->db->from('laporan');
        $this->db->join('kapal', 'kapal.id = laporan.id_kapal');
         
        $query = $this->db->get();
        return $query->result(); // Tampilkan semua data transaksi
	}

    
    
    public function option_tahun(){
        $this->db->select('YEAR(tgl) AS tahun'); // Ambil Tahun dari field tgl
        $this->db->from('laporan'); // select ke tabel transaksi
        $this->db->order_by('YEAR(tgl)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tgl)'); // Group berdasarkan tahun pada field tgl
        
        return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
    }

    
}
