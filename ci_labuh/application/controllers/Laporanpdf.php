<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }

    /**
    * 
    */
    // class myPDF extends FPDF
    // {
        
        
    // }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->Image(base_url() . "assets/images/unnamed.jpg",10,10,20,20);
       
        $pdf->SetFont('Times','B',14);
        // mencetak string 

        $pdf->Cell(190,7,'KANTOR UNIT PENYELENGGARA PELABUHAN KETAPANG ',0,1,'C');
        $pdf->SetFont('Times','U',10);
        $pdf->Cell(190,7,'Jln. Jend. Gatot Subroto No.2, Ketapang Kec. Kalipuro Kab.Banyuwangi,Jawa Timur 68455 ' ,0,1,'C');
        $pdf->Cell(190,7,' Telp.(0333) 426181' ,0,1,'C');
        $pdf->SetFont('Times','B',12);
        $pdf->Cell(190,7,'Nama - Nama Jurumudi Yang Aktif ',0,1,'C');
      // $pdf->SetLineWidth(0);
      //  $pdf->Line(10,37,138,37);
        //$pdf->Image(base_url() . "assets/images/'Dharma_Jala_Prajatama'.jpg",10,10,20,25);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'NIK',1,0);
        $pdf->Cell(70,6,'NAMA JURUMUDI',1,0);
        $pdf->Cell(50,6,'NAMA KAPAL',1,0);
        $pdf->Cell(50,6,'NAMA NAHKODA',1,1);
        $pdf->SetFont('Arial','',10);
        $pdf->SetFillColor(210,221,242);
        $petugas = $this->db->query('SELECT mjurumudi.* , kapal.nama_kapal , nahkoda.nama_nahkoda
        FROM mjurumudi,kapal,nahkoda
        WHERE mjurumudi.id_kapal = kapal.id AND mjurumudi.id_nahkoda = nahkoda.id
            ')->result();
        foreach ($petugas as $row){

            $pdf->Cell(20,6,$row->NIK,1,0);
            $pdf->Cell(70,6,$row->nama_jurumudi,1,0);
            $pdf->Cell(50,6,$row->nama_kapal,1,0);
            $pdf->Cell(50,6,$row->nama_nahkoda,1,1); 
        }

        $pdf->Output();
    }
}