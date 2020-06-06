<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tiba extends CI_Controller {

   public function __construct(){
        parent::__construct();
        $this->load->model("Tiba_model");
        $this->load->model('kapal');
    }
  
  function index(){

}

    public function get_profil($id){
        //$this->load->model('kapal');
        $this->load->model('tiba_model');

        
        //$data['kapal'] = $this->kapal->getStat();

        $data['laporan_kapal_tiba_berangkat'] = $this->tiba_model->get($id);
        //$data['total_inventori'] = $this->tiba_model->hitungJumlahInventori();
        $this->load->view('tiba_profil', $data);
    }

    public function cetak($id){
        $data['cetak_tiba'] = $this->Tiba_model->get($id);
        $data_spb = '';
        foreach ($data['cetak_tiba'] as $value) {
        $data_spb = $value->nama_nahkoda;
        }

        $tanggal_skrg = date("d-m-Y");

        ob_start();
        $this->load->view('tiba_cetak', $data);
        $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A5','en');
        $pdf->WriteHTML($html);
        $pdf->Output( $data_spb.'_'.$tanggal_skrg.'_'.'Tiba/Berangkat.pdf', 'D');
    }



    
   
}
