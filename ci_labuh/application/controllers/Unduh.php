<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unduh extends CI_Controller {

        public function __construct(){
        parent::__construct();
        $this->load->model('Spb_model');
        $this->load->model('Upload_model');
    }

    public function index()
    {
    	$data['spb'] = $this->Spb_model->getTable();
    	$this->load->view('link',$data);
    }

  //    public function cetak($id_nahkoda){
  //   $data['spb_get'] = $this->Spb_model->get($id_nahkoda);
  //   //$data ['dokumen'] = $this->Upload_model->get($id_nahkoda);
  //      //$data['spb'] = $this->Spb_model->getTable();
  //   $data_spb = '';
  //   foreach ($data['spb_get'] as $value) {
  //     $data_spb = $value->nama_kapal;
  //   }
  //   $tanggal_skrg = date("d-m-Y");

  //   ob_start();
  //   $this->load->view('v_laporan', $data);
  //   $html = ob_get_contents();
  //       ob_end_clean();
        
  //       require_once('./assets/html2pdf/html2pdf.class.php');
  //   $pdf = new HTML2PDF('P','F4','en');
  //   $html2pdf->setTestTdInOnePage(false);
  //   $pdf->WriteHTML($html);
  //   $pdf->Output( $data_spb.'_'.$tanggal_skrg.'_'.'Surat Persetujuan Berlayar.pdf', 'D');
  // }
  

  public function cetak($id){
        $data['spb_get'] = $this->Spb_model->get($id);
        $data_spb = '';
        foreach ($data['spb_get'] as $value) {
        $data_spb = $value->nama_nahkoda;
        }

        $tanggal_skrg = date("d-m-Y");

        ob_start();
        $this->load->view('v_laporan', $data);
        $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A5','en');
        $pdf->WriteHTML($html);
        $pdf->Output( $data_spb.'_'.$tanggal_skrg.'_'.'Surat Persetujuan Berlayar.pdf', 'D');
    }

    
  


}