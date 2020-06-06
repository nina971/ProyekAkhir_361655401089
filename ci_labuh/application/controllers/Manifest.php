<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manifest extends CI_Controller {

   public function __construct(){
        parent::__construct();
        $this->load->model("Manifest_model");
    }
  
     function index(){
     $this->load->model('kapal');
        $this->load->model('manifest_model');

        
        $data['kapal'] = $this->kapal->getStat();

        $data['manifest'] = $this->manifest_model->getTable();
        $this->load->view('manifest', $data);

}


    

   public function cetak(){
        $data['penumpang'] = $this->Manifest_model->getTable();
        $data_spb = '';
        foreach ($data['penumpang'] as $value) {
        $data_spb = $value->nama_kapal;
        }

        $tanggal_skrg = date("d-m-Y");

        ob_start();
        $this->load->view('manifest_cetak', $data);
        $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('L','A5','en');
        $pdf->WriteHTML($html);
        $pdf->Output( $data_spb.'_'.$tanggal_skrg.'_'.'Manifest Penumpang.pdf', 'D');
    }



  
}

