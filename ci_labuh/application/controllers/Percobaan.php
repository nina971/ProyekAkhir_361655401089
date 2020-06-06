<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('LaporanModel');
	}


	public function index(){

	$kapal = $this->input->post('kapal');
		$data_kapal = $this->db->query('
			SELECT kapal.nama_kapal as kapal,
			laporan_kapal_tiba_berangkat.tanggal_tiba_berangkat,
			laporan_kapal_tiba_berangkat.truck_besar,
			laporan_kapal_tiba_berangkat.truck_sedang,
			laporan_kapal_tiba_berangkat.truck_trailer, 
		    laporan_kapal_tiba_berangkat.bus_besar,
			laporan_kapal_tiba_berangkat.bus_mini,
			laporan_kapal_tiba_berangkat.kendaraan_keluarga,
			laporan_kapal_tiba_berangkat.sepeda_motor,
			laporan_kapal_tiba_berangkat.barang,
			laporan_kapal_tiba_berangkat.penumpang, 
			laporan_kapal_tiba_berangkat.hewan,
			laporan_kapal_tiba_berangkat.truck_besar + laporan_kapal_tiba_berangkat.truck_sedang+laporan_kapal_tiba_berangkat.truck_trailer+laporan_kapal_tiba_berangkat.bus_besar+laporan_kapal_tiba_berangkat.bus_mini+laporan_kapal_tiba_berangkat.kendaraan_keluarga+laporan_kapal_tiba_berangkat.sepeda_motor+laporan_kapal_tiba_berangkat.barang+laporan_kapal_tiba_berangkat.penumpang+laporan_kapal_tiba_berangkat.hewan as jumlah_muatan
			 FROM laporan_kapal_tiba_berangkat,kapal
			 WHERE
			 laporan_kapal_tiba_berangkat.id_kapal = kapal.id AND
			 kapal.nama_kapal LIKE "'.$kapal.'"')->result();
		$total = $this->db->query('SELECT
kapal.nama_kapal AS kapal,(SUM(b.truck_besar) + SUM(b.truck_sedang) + SUM(b.truck_trailer) + SUM(b.bus_besar) + SUM(b.bus_mini) + SUM(b.hewan) + SUM(b.kendaraan_keluarga) + SUM(b.sepeda_motor) + SUM(b.barang) + SUM(b.penumpang)) AS Total
FROM laporan_kapal_tiba_berangkat as b, kapal
WHERE b.id_kapal = kapal.id AND kapal.nama_kapal LIKE "'.$kapal.'"
GROUP BY kapal.nama_kapal')->result();


	if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; 
		if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                $url_cetak = 'laporanrekap/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $transaksi = $this->LaporanModel->view_by_month($bulan, $tahun);
            }

        }

    
		$data['totals'] = $total;
		$this->load->view('rasa',$data);

	}

}
