<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanrekap extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		
	}

	
	// public function index()
	// {
	// 	$this->load->view('coba');
	// }
	
	public function cari_kapal(){
		$kapal = $this->input->post('kapal');
		$bulan = $this->input->post('filter_bulan');
		$tahun = $this->input->post('filter_tahun');

		$q_bln_tahun = '';
		if (isset($bulan) && isset($tahun)) {
			$q_bln_tahun = "AND MONTH(muatan.tanggal) = '$bulan' AND YEAR (muatan.tanggal) = '$tahun'";
		}
		$q_bulan = '';
		$tahun_ini = date('Y');
		if (isset($bulan) && ! isset($tahun)) {
			$q_bulan = "AND MONTH(muatan.tanggal) = '$bulan' AND YEAR (muatan.tanggal) = '$tahun_ini'";
		}
		$q_tahun = '';
		if (isset($tahun) && ! isset($bulan)) {
			$q_tahun = " AND YEAR (muatan.tanggal) = '$tahun'";
		}

		
		$data_kapal = $this->db->query('
			SELECT  kapal.nama_kapal as kapal,
			kapal.nama_agen,
			muatan.tanggal,
			muatan.truck_besar,
			muatan.truck_sedang,
			muatan.truck_trailer, 
		    muatan.bus_besar,
			muatan.bus_mini,
			muatan.kendaraan_keluarga,
			muatan.sepeda_motor,
			muatan.jumlah_muatan
			 FROM muatan,kapal 
			 WHERE
			 muatan.id_kapal = kapal.id AND
			 kapal.nama_kapal LIKE "'.$kapal.'" '.$q_bulan.' '.$q_tahun.' '.$q_bln_tahun.'
			 GROUP BY kapal, nama_agen, truck_besar, truck_trailer,bus_besar, bus_mini,kendaraan_keluarga,sepeda_motor,tanggal,truck_sedang,jumlah_muatan')->result();

		$data['muatan'] = $data_kapal;
		$this->load->view('coba', $data);
	}

	public function grafikmuatan()
	{
		$tahun = $this->input->post('filter_tahun');
		$kapal = $this->input->post('kapal');

		//filter tahun
		$q_tahun = '';
		if (isset($tahun) && ! isset($bulan)) {
			$q_tahun = " AND YEAR (muatan.tanggal) = '$tahun'";
		}

		//filter kapal
		$q_kapal = '';
		if  ( !isset($kapal) ) {
			$q_kapal = " AND kapal.nama_kapal LIKE '$kapal' ";
		}

		$data_muatan = $this->db->query('SELECT kapal.nama_kapal as kapal, SUM(muatan.jumlah_muatan) as total, MONTHNAME(muatan.tanggal) as month_name FROM muatan,kapal WHERE muatan.id_kapal = kapal.id AND kapal.nama_kapal LIKE "'.$kapal.'" '.$q_tahun.' GROUP BY MONTH(muatan.tanggal)')->result();

		$hasil['data_kendaraan'] = json_encode($data_muatan);
		$this->load->view('grafikmuatan',$hasil);
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

	public function sandar()
	{
		$tahun = $this->input->post('filter_tahun');
		$kapal = $this->input->post('kapal');

		//filter tahun
		$q_tahun = '';
		if (isset($tahun) && ! isset($bulan)) {
			$q_tahun = " AND YEAR (laporan_kapal_tiba_berangkat.tanggal) = '$tahun'";
		}

		//filter kapal
		// $q_kapal = '';
		// if  ( !isset($kapal) ) {
		// 	$q_kapal = " AND kapal.nama_kapal LIKE '$kapal' ";
		// }

		$data_muatan = $this->db->query('SELECT kapal.nama_kapal as kapal, SUM(laporan_kapal_tiba_berangkat.trip_ke) as labuh, MONTHNAME(laporan_kapal_tiba_berangkat.tanggal) as month_name FROM laporan_kapal_tiba_berangkat,kapal WHERE laporan_kapal_tiba_berangkat.id_kapal = kapal.id AND kapal.nama_kapal LIKE "'.$kapal.'" '.$q_tahun.' GROUP BY MONTH(laporan_kapal_tiba_berangkat.tanggal)')->result();

		$hasil['sandar'] = json_encode($data_muatan);
		$this->load->view('sandar',$hasil);
	}

	public function cetak(){
		$kapal = $this->input->get('kapal');
		$bulan = $this->input->get('bulan');
		$tahun = $this->input->get('tahun');

		$q_bln_tahun = '';
		if (isset($bulan) && isset($tahun)) {
			$q_bln_tahun = "AND MONTH(muatan.tanggal) = '$bulan' AND YEAR (muatan.tanggal) = '$tahun'";
		}
		$q_bulan = '';
		$tahun_ini = date('Y');
		if (isset($bulan) && ! isset($tahun)) {
			$q_bulan = "AND MONTH(muatan.tanggal) = '$bulan' AND YEAR (muatan.tanggal) = '$tahun_ini'";
		}
		$q_tahun = '';
		if (isset($tahun) && ! isset($bulan)) {
			$q_tahun = " AND YEAR (muatan.tanggal) = '$tahun'";
		}

		
		$data_kapal = $this->db->query('
			SELECT  kapal.nama_kapal as kapal,
			kapal.nama_agen,
			muatan.tanggal,
			muatan.truck_besar,
			muatan.truck_sedang,
			muatan.truck_trailer, 
		    muatan.bus_besar,
			muatan.bus_mini,
			muatan.kendaraan_keluarga,
			muatan.sepeda_motor,
			SUM(truck_besar + truck_trailer + bus_besar+bus_mini+kendaraan_keluarga+sepeda_motor) as jumlah_muatan
			 FROM muatan,kapal 
			 WHERE
			 muatan.id_kapal = kapal.id AND
			 kapal.nama_kapal LIKE "'.$kapal.'" '.$q_bulan.' '.$q_tahun.' '.$q_bln_tahun.'
			 GROUP BY kapal, nama_agen, truck_besar, truck_trailer,bus_besar, bus_mini,kendaraan_keluarga,sepeda_motor,tanggal,truck_sedang')->result();
		$ket = 'Data Muatan Bulan '.$bulan.' '.$tahun;
		
		$data['bulan'] = $bulan;
		$data['muatan'] = $data_kapal;
		ob_start();
        $this->load->view('print', $data);
        $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A5','en');
        //$pdf->Image(base_url() . "assets/images/unnamed.jpg",10,10,20,20);
        $pdf->WriteHTML($html);
        $pdf->Output('Laporan Muatan.pdf', 'D');
	}

	public function baru(){
		

		$pdf = new FPDF('L','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->Image(base_url() . "assets/images/unnamed.jpg",10,10,20,20);
        $kapal = $this->input->get('kapal');
		$bulan = $this->input->get('bulan');
		$tahun = $this->input->get('tahun');

		$q_bln_tahun = '';
		if (isset($bulan) && isset($tahun)) {
			$q_bln_tahun = "AND MONTH(muatan.tanggal) = '$bulan' AND YEAR (muatan.tanggal) = '$tahun'";
		}
		$q_bulan = '';
		$tahun_ini = date('Y');
		if (isset($bulan) && ! isset($tahun)) {
			$q_bulan = "AND MONTH(muatan.tanggal) = '$bulan' AND YEAR (muatan.tanggal) = '$tahun_ini'";
		}
		$q_tahun = '';
		if (isset($tahun) && ! isset($bulan)) {
			$q_tahun = " AND YEAR (muatan.tanggal) = '$tahun'";
		}
        $muatan = $this->db->query('
			SELECT  kapal.nama_kapal as kapal,
			SUM(muatan.jumlah_muatan) as total,
			kapal.nama_agen,
			muatan.tanggal,
			muatan.truck_besar,
			muatan.truck_sedang,
			muatan.truck_trailer, 
		    muatan.bus_besar,
			muatan.bus_mini,
			muatan.kendaraan_keluarga,
			muatan.sepeda_motor,
			muatan.jumlah_muatan
			 FROM muatan,kapal 
			 WHERE
			 muatan.id_kapal = kapal.id AND
			 kapal.nama_kapal LIKE "'.$kapal.'" '.$q_bulan.' '.$q_tahun.' '.$q_bln_tahun.'
			 GROUP BY kapal, nama_agen, truck_besar, truck_trailer,bus_besar, bus_mini,kendaraan_keluarga,sepeda_motor,tanggal,truck_sedang')->result();
		
		$data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $pdf->SetFont('Times','B',14);
        // mencetak string 

        $pdf->Cell(190,7,'KANTOR UNIT PENYELENGGARA PELABUHAN KETAPANG ',0,1,'C');
        $pdf->SetFont('Times','U',11);
        $pdf->Cell(190,7,'Jln. Jend. Gatot Subroto No.2, Ketapang Kec. Kalipuro Kab.Banyuwangi,Jawa Timur 68455 ' ,0,1,'C');
        $pdf->Cell(190,7,' Telp.(0333) 426181' ,0,1,'C');
        $pdf->SetFont('Times','B',12);
        // foreach ($muatan as $row){
        // 	}
        $pdf->Cell(180,7,'LAPORAN MUATAN  PADA BULAN KE : '.$bulan ,0,1,'C');
        $pdf->Cell(180,7,'DI KAPAL :'.$kapal ,0,1,'C');
        $pdf->Cell(180,7,'TAHUN :'.$tahun ,0,1,'C');
    
      // $pdf->SetLineWidth(0);
      //  $pdf->Line(10,37,138,37);
        //$pdf->Image(base_url() . "assets/images/'Dharma_Jala_Prajatama'.jpg",10,10,20,25);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Times','B',10);
       
        $pdf->Cell(25,6,'Tanggal',1,0);
        $pdf->Cell(25,6,'Truck Besar',1,0);
        $pdf->Cell(25,6,'Truck Trailer',1,0);
        $pdf->Cell(25,6,'Truck Sedang',1,0);
        $pdf->Cell(25,6,'Bus Besar',1,0);
        $pdf->Cell(25,6,'Bus Mini',1,0);
        $pdf->Cell(25,6,'Kend. Keluarga',1,0);
        $pdf->Cell(25,6,'Sepeda Motor',1,0);
        $pdf->Cell(25,6,'Jumlah Muatan',1,1);
        
        $pdf->SetFont('Times','',10);
        $pdf->SetFillColor(100,100,100);
        
		//$data['muatan'] = $data_kapal;
		 $jml_semua = 0;
        foreach ($muatan as $row){

            $pdf->Cell(25,6,$row->tanggal,1,0);
            $pdf->Cell(25,6,$row->truck_besar,1,0);
            $pdf->Cell(25,6,$row->truck_trailer,1,0);
            $pdf->Cell(25,6,$row->truck_sedang,1,0);
            $pdf->Cell(25,6,$row->bus_besar,1,0);
            $pdf->Cell(25,6,$row->bus_mini,1,0);
            $pdf->Cell(25,6,$row->kendaraan_keluarga,1,0);
            $pdf->Cell(25,6,$row->sepeda_motor,1,0);
             //$pdf->Cell(25,6,$row->total,1,0);
            $pdf->Cell(25,6,$row->jumlah_muatan,1,1);
           
            $jml_semua += $row->jumlah_muatan;
        }

        $pdf->SetFont('Times','B',16);

          
        
        $pdf->Cell(180,7,'JUMLAH SEMUA MUATAN  : '. ' ' . $jml_semua ,0,1,'C');
        
    

        $pdf->Output();
	}

	public function biri(){
		

		
}

}
