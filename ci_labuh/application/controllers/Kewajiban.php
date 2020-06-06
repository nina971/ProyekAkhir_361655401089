<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kewajiban extends CI_Controller {

   public function __construct(){
        parent::__construct();
        $this->load->model("Kewajiban_model");
    }

    function index(){
     $this->load->model('kapal');
        $this->load->model('kewajiban_model');

        
        $data['kapal'] = $this->kapal->getStat();

        $data['wajib'] = $this->kewajiban_model->getTable();
        $this->load->view('detail_kewajiban', $data);

}
  

    public function get_profil($id){
        $this->load->model('kapal');
        $this->load->model('kewajiban_model');

        
        $data['kapal'] = $this->kapal->getStat();

        $data['periksa_pemenuhan_kewajiban_kapal'] = $this->kewajiban_model->get($id);
        $this->load->view('kewajiban_profil', $data);
    }

    
     public function cetak($id){
        $data['kewajiban'] = $this->Kewajiban_model->get($id);
        $data_spb = '';
        foreach ($data['kewajiban'] as $value) {
        $data_spb = $value->nama_nahkoda;
        }

        $tanggal_skrg = date("d-m-Y");

        ob_start();
        $this->load->view('kewajiban_cetak', $data);
        $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A5','en');
        $pdf->WriteHTML($html);
        $pdf->Output( $data_spb.'_'.$tanggal_skrg.'_'.'Pemenuhan Kewajiban.pdf', 'D');
    }
   
}
