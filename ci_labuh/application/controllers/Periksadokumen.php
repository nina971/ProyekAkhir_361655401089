<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periksadokumen extends CI_Controller {

   public function __construct(){
        parent::__construct();
        $this->load->model("Dokumen_model");
    }
  
    function index(){
     $this->load->model('kapal');
        $this->load->model('dokumen_model');

        
        $data['kapal'] = $this->kapal->getStat();

        $data['dokumen'] = $this->dokumen_model->getTable();
        $this->load->view('periksa_dokumen', $data);

}

    public function get_profil($id){
        $this->load->model('kapal');
        $this->load->model('dokumen_model');

        
        $data['kapal'] = $this->kapal->getStat();
        $data['periksa_dokumen_kapal'] = $this->dokumen_model->get($id);
        $this->load->view('dokumen_profil', $data);

       
    }

    public function profil(){
        $this->load->model('dokumen_model');
        


        $data = [
            'id_kapal' => $kapal,
            'nama_nahkoda' => $nama_nahkoda,
            'jumlah_abk' => $jumlah_abk,
            'surat_ukur' => $surat_ukur,
            '1_diterbitkan_oleh' => $diterbitkan_oleh_1,
            '1_pada_tanggal' => $pada_tanggal_1,
            '1_masa_berlaku' => $masa_berlaku_1,
            'surat_laut' => $surat_laut,
            '2_diterbitkan_oleh' => $diterbitkan_oleh_2,
            '2_pada_tanggal' => $pada_tanggal_2,
            '2_masa_berlaku' => $masa_berlaku_2,
            'sertifikat_keselamatan_radio' => $sertifikat_keselamatan_radio,
            '3_diterbitkan_oleh' => $diterbitkan_oleh_3,
            '3_pada_tanggal' => $pada_tanggal_3,
            '3_masa_berlaku' => $masa_berlaku_3,
            'sertifikat_keselamatan_penumpang' => $sertifikat_keselamatan_penumpang,
            '4_diterbitkan_oleh' => $diterbitkan_oleh_4,
            '4_pada_tanggal' => $pada_tanggal_4,
            '4_masa_berlaku' => $masa_berlaku_4,
            'sertifikat_garis_muat' => $sertifikat_garis_muat,
            '5_diterbitkan_oleh' => $diterbitkan_oleh_5,
            '5_pada_tanggal' => $pada_tanggal_5,
            '5_masa_berlaku' => $masa_berlaku_5,
            'sertifikat_pengawakan_dan_keselamatan' => $sertifikat_pengawakan_dan_keselamatan,
            '6_diterbitkan_olehkapal' => $diterbitkan_oleh_6,
            '6_pada_tanggalkapal' => $pada_tanggal_6,
            '6_masa_berlakukapal' => $masa_berlaku_6
            
        ];




    }
   
}
