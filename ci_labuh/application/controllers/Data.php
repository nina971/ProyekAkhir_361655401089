<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {


 function __construct(){
      parent::__construct();
      //load chart_model dari model
      $this->load->model('d_jurumudi');
      
    }
 
    function index(){
     
      $data_pengajuan = $this->db->query(' SELECT
      
        MAX(laporan_kapal_tiba_berangkat.id_tiba_berangkat) as id_tiba_berangkat,
        MAX(permohonan_spb.id_permohonan_spb) as id_permohonan_spb,
        MAX(pernyataan_nahkoda.id_pernyataan_nahkoda) as id_pernyataan_nahkoda,
        MAX(periksa_pemenuhan_kewajiban_kapal.id_pemenuhan_kewajiban) as id_pemenuhan_kewajiban,
        MAX(muatan.id) as id_muatan,
        MAX(pernyataan_pengikatan.id_pengikatan) as id_pengikatan,
        MAX(manifest_penumpang.id_manifest) as id_manifest 
        FROM laporan_kapal_tiba_berangkat,permohonan_spb,pernyataan_nahkoda,periksa_pemenuhan_kewajiban_kapal,pernyataan_pengikatan,muatan,manifest_penumpang
        ')->result();
      $data ['pengajuan'] = $data_pengajuan;
      $data['mjurumudi'] = $this->d_jurumudi->getStat();
      $this->load->view('data',$data);
    }

   

   
     



	
}
