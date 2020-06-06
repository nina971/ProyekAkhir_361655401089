<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permohonan extends CI_Controller {

   public function __construct(){
        parent::__construct();
        $this->load->model("Permohonan_model");
    }

    function index(){
     $this->load->model('kapal');
        $this->load->model('permohonan_model');

        
        $data['kapal'] = $this->kapal->getStat();

        $data['spb'] = $this->permohonan_model->getTable();
        $this->load->view('detail_permohonan', $data);

}
  

    public function get_profil($id){
        $this->load->model('kapal');
        $this->load->model('permohonan_model');

        
        $data['kapal'] = $this->kapal->getStat();

        $data['permohonan'] = $this->permohonan_model->get($id);
        $this->load->view('spb_profil', $data);
    }

    public function cetak($id){
        $data['cetak_spb'] = $this->Permohonan_model->get($id);
        $data_spb = '';
        foreach ($data['cetak_spb'] as $value) {
        $data_spb = $value->nama_nahkoda;
        }

        $tanggal_skrg = date("d-m-Y");

        ob_start();
        $this->load->view('spb_cetak', $data);
        $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A5','en');
        $pdf->WriteHTML($html);
        $pdf->Output( $data_spb.'_'.$tanggal_skrg.'_'.'Permohonan SPB.pdf', 'D');
    }

   
}
