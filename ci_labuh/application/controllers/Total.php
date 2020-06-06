<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Total extends CI_Controller {

  function __construct(){     
  	parent::__construct(); 
    $this->load->model('M_total'); 
    
  } 

  public function index(){
  	
  }

  public function get_profil($id){
        //$this->load->model('kapal');
        $this->load->model('M_total');

        
       // $data_muatan =$this->db->query('SELECT SUM(truck_besar + truck_trailer + bus_besar+bus_mini+kendaraan_keluarga+sepeda_motor) as jumlah_muatan FROM muatan')->result();

        $data['muatan'] = $this->M_total->get($id);
        //$data['jumlah_muatan'] = $data_muatan;
        $this->load->view('view', $data);
    }
      public function cetak($id){
        $data['muatan'] = $this->M_total->get($id);
        $data_spb = '';
        foreach ($data['muatan'] as $value) {
        $data_spb = $value->nama_nahkoda;
        }

        $tanggal_skrg = date("d-m-Y");

        ob_start();
        $this->load->view('muatan_cetak', $data);
        $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P','A5','en');
        $pdf->WriteHTML($html);
        $pdf->Output( $data_spb.'_'.$tanggal_skrg.'_'.'Form Muatan.pdf', 'D');
    }

}


