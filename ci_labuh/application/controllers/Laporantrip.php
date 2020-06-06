<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporantrip extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		
	}

	public function index(){
	$pdf = new FPDF('P','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->Image(base_url() . "assets/images/unnamed.jpg",10,10,20,20);
        $kapal = $this->input->get('kapal');
		$bulan = $this->input->get('bulan');
		$tahun = $this->input->get('tahun');

		$q_bln_tahun = '';
		if (isset($bulan) && isset($tahun)) {
			$q_bln_tahun = "AND MONTH(laporan_kapal_tiba_berangkat.tanggal) = '$bulan' AND YEAR (laporan_kapal_tiba_berangkat.tanggal) = '$tahun'";
		}
		$q_bulan = '';
		$tahun_ini = date('Y');
		if (isset($bulan) && ! isset($tahun)) {
			$q_bulan = "AND MONTH(laporan_kapal_tiba_berangkat.tanggal) = '$bulan' AND YEAR (laporan_kapal_tiba_berangkat.tanggal) = '$tahun_ini'";
		}
		$q_tahun = '';
		if (isset($tahun) && ! isset($bulan)) {
			$q_tahun = " AND YEAR (laporan_kapal_tiba_berangkat.tanggal) = '$tahun'";
		}
		
        $pdf->SetFont('Times','B',14);
        // mencetak string 

        $pdf->Cell(190,7,'KANTOR UNIT PENYELENGGARA PELABUHAN KETAPANG ',0,1,'C');
        $pdf->SetFont('Times','U',11);
        $pdf->Cell(190,7,'Jln. Jend. Gatot Subroto No.2, Ketapang Kec. Kalipuro Kab.Banyuwangi,Jawa Timur 68455 ' ,0,1,'C');
        $pdf->Cell(190,7,' Telp.(0333) 426181' ,0,1,'C');
        $pdf->SetFont('Times','B',12);

        // foreach ($labuh as $key){
        // 	}
        $pdf->Cell(180,7,'LAPORAN TRIP KAPAL  BULANAN : ',0,1,'C');
        $pdf->Cell(180,7,'  PADA BULAN KE : '.$bulan,0,1,'C');
        $pdf->Cell(180,7,'DI KAPAL :'.$kapal,0,1,'C');
        $pdf->Cell(180,7,'TAHUN :' .$tahun,0,1,'C');
    
      // $pdf->SetLineWidth(0);
      //  $pdf->Line(10,37,138,37);
        //$pdf->Image(base_url() . "assets/images/'Dharma_Jala_Prajatama'.jpg",10,10,20,25);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','B',10);
       
        $pdf->Cell(25,6,'Tanggal',1,0);
        $pdf->Cell(25,6,'Jam',1,0);
        $pdf->Cell(25,6,'Trip',1,0);
        $pdf->Cell(25,6,'Lokasi Labuh',1,1);
       
        
        $pdf->SetFont('Times','',10);
        $pdf->SetFillColor(100,100,100);
        
		//$data['muatan'] = $data_kapal;
		 $labuh = $this->db->query('
			SELECT  kapal.nama_kapal as kapal,laporan_kapal_tiba_berangkat.lokasi_labuh,laporan_kapal_tiba_berangkat.jam_tiba,laporan_kapal_tiba_berangkat.tanggal,laporan_kapal_tiba_berangkat.trip_ke FROM laporan_kapal_tiba_berangkat,kapal WHERE laporan_kapal_tiba_berangkat.id_kapal = kapal.id AND kapal.nama_kapal LIKE "'.$kapal.'" '.$q_bulan.' '.$q_tahun.' '.$q_bln_tahun.'GROUP BY kapal,lokasi_labuh,jam_tiba,tanggal,trip_ke')->result();

		//$data['labuh'] = $data_kapal;
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
		$jml_labuh_sandar = 0;
        foreach ($labuh as $row){

            $pdf->Cell(25,6,$row->tanggal,1,0);
            $pdf->Cell(25,6,$row->jam_tiba,1,0);
            $pdf->Cell(25,6,$row->trip_ke,1,0);
            $pdf->Cell(25,6,$row->lokasi_labuh,1,1);
            
           $jml_labuh_sandar += $row->trip_ke;
            
        }

        $pdf->SetFont('Times','B',12);
        $pdf->Cell(180,7,'JUMLAH SEMUA TRIP  : '.$jml_labuh_sandar ,0,1,'C');

        $pdf->Output();
	}

	public function labuh_sandar(){
		$kapal = $this->input->post('kapal');
		$bulan = $this->input->post('filter_bulan');
		$tahun = $this->input->post('filter_tahun');

		$q_bln_tahun = '';
		if (isset($bulan) && isset($tahun)) {
			$q_bln_tahun = "AND MONTH(laporan_kapal_tiba_berangkat.tanggal) = '$bulan' AND YEAR (laporan_kapal_tiba_berangkat.tanggal) = '$tahun'";
		}
		$q_bulan = '';
		$tahun_ini = date('Y');
		if (isset($bulan) && ! isset($tahun)) {
			$q_bulan = "AND MONTH(laporan_kapal_tiba_berangkat.tanggal) = '$bulan' AND YEAR (laporan_kapal_tiba_berangkat.tanggal) = '$tahun_ini'";
		}
		$q_tahun = '';
		if (isset($tahun) && ! isset($bulan)) {
			$q_tahun = " AND YEAR (laporan_kapal_tiba_berangkat.tanggal) = '$tahun'";
		}
		$data_kapal = $this->db->query('
			SELECT DISTINCT kapal.nama_kapal as kapal,
			laporan_kapal_tiba_berangkat.lokasi_labuh,
			laporan_kapal_tiba_berangkat.jam_tiba,
			laporan_kapal_tiba_berangkat.tanggal,
			laporan_kapal_tiba_berangkat.trip_ke,
		    SUM(laporan_kapal_tiba_berangkat.trip_ke) AS jml_labuh_sandar
			 FROM laporan_kapal_tiba_berangkat,kapal
			 WHERE
			 laporan_kapal_tiba_berangkat.id_kapal = kapal.id AND
			 kapal.nama_kapal LIKE "'.$kapal.'" '.$q_bulan.' '.$q_tahun.' '.$q_bln_tahun.'
			 GROUP BY kapal,lokasi_labuh,jam_tiba,tanggal,trip_ke')->result();

		$data['labuh'] = $data_kapal;
		$this->load->view('labuh', $data);
	}



}