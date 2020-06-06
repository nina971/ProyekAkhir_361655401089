<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nahkoda extends CI_Controller {

   public function __construct(){
        parent::__construct();
        $this->load->model("Nahkoda_model");
    }

    function index(){
        $this->load->model('kapal');
        $this->load->model('Nahkoda_model');

        
        $data['kapal'] = $this->kapal->getStat();

        $data['nahkoda'] = $this->Nahkoda_model->getTable();
        $this->load->view('detail_nahkoda', $data);

}
  

    public function get_profil($id){
        $this->load->model('kapal');
        $this->load->model('Nahkoda_model');

        
        $data['kapal'] = $this->kapal->getStat();

        $data['pernyataan_nahkoda'] = $this->Nahkoda_model->get($id);
        $this->load->view('nahkoda_profil', $data);
    }

    public function cetak($id){
        $data['cetak_nahkoda'] = $this->Nahkoda_model->get($id);
        $data_spb = '';
        foreach ($data['cetak_nahkoda'] as $value) {
        $data_spb = $value->nama_nahkoda;
        }

        $tanggal_skrg = date("d-m-Y");

        ob_start();
        $this->load->view('nahkoda_cetak', $data);
        $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A5','en');
        $pdf->WriteHTML($html);
        $pdf->Output( $data_spb.'_'.$tanggal_skrg.'_'.'Pernyataan Nahkoda.pdf', 'D');
    }



   
}
