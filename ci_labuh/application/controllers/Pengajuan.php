<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {

	      function  __construct() {
        parent::__construct();
        //load our helper
        $this->load->helper('url');
        //load our model
        $this->load->model('Filtermodel');
        $this->load->model('Spb_model');
        $this->load->model("Permohonan_model");
         $this->load->model('Upload_model');
    }

    public function index(){
     $data['spb'] = $this->Spb_model->getTable();
        $this->load->view('spb', $data);
      

  }




  public function cetak($id,$nama_nahkoda){
    $data['spb_get'] = $this->Spb_model->get($id);
    $data['permohonan'] = $this->permohonan_model->get($id);
    $data ['dokumen'] = $this->Upload_model->get($nama_nahkoda);
       //$data['spb'] = $this->Spb_model->getTable();
    $data_spb = '';
    foreach ($data['permohonan'] as $value) {
      $data_spb = $value->nama_kapal;
    }
    $tanggal_skrg = date("d-m-Y");

    ob_start();
    $this->load->view('v_laporan', $data);
    $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','F4','en');
    $pdf->WriteHTML($html);
    $pdf->Output( $data_spb.'_'.$tanggal_skrg.'_'.'SPB.pdf', 'D');
  }

  // public function unduh_spb($nik){

  //   $this->db->where('nik',$nik);
  //   $data_nik = $this->db->get('jurumudi');

  //   if ($data_nik->num_rows()> 0 ) {
  //     $this->load->view('spb');
  //   }else{
  //     $this->load->view('auth');
  //   }
  // }
 


  

}
