<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Muatan extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        //$this->load->model('kapal');
    }

    function index_post(){
        $kapal          = $this->post('nama_kapal');
        $nahkoda        = $this->post('nama_nahkoda');
        $tanggal        = $this->post('tanggal');
        $truck_besar    = $this->post('truck_besar');
        $truck_sedang  = $this->post('truck_sedang');
        $truck_trailer   = $this->post('truck_trailer');
        $bus_besar      = $this->post('bus_besar');
        $bus_mini       = $this->post('bus_mini');
        $kendaraan_keluarga       = $this->post('kendaraan_keluarga');
        $sepeda_motor       = $this->post('sepeda_motor');
        $jumlah_muatan       = $this->post('jumlah_muatan');
       

        $id_kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
        foreach ($id_kapal as $key => $value) {              
        } 

         $id_nahkoda = $this->db->query('SELECT id from nahkoda where nama_nahkoda = "'.$nahkoda.'"')->result();
        foreach ($id_nahkoda as $key => $row) {              
        } 
           
        $data = array(
            'id_kapal'      => (int)$value->id,
            'id_nahkoda'    => (int)$row->id,
            'tanggal'   => $tanggal,
            'truck_trailer'   => $truck_trailer,
            'truck_besar'   => $truck_besar,
            'truck_sedang' => $truck_sedang,
            'bus_besar'     => $bus_besar,
            'bus_mini'      => $bus_mini,
            'kendaraan_keluarga'  => $kendaraan_keluarga,
            'sepeda_motor'  => $sepeda_motor,
            'jumlah_muatan'  => $jumlah_muatan
            );

            $this->db->insert('muatan', $data);
            $pesan = 'Sukses mengirim data muatan';
            $this->response(array('status' => 200, 'pesan' => $pesan));
    }

    //  function index_get() {
    //     $id = $this->post('id_periksa_dokumen');
    //     if ($id != NULL) {
    //         $this->db->select('periksa_dokumen_kapal.*, kapal.nama_kapal');
    //         $this->db->from('periksa_dokumen_kapal');
    //         $this->db->join('kapal', 'kapal.id = periksa_dokumen_kapal.id_kapal');
    //         $this->db->where('id_periksa_dokumen', $id);
    //         //$this->db->where('id', $id)->get('periksa_pemenuhan_kewajiban_kapal', $data);
    //         $x = $this->db->get()->result();
    //         $this->response(array("status" => 200, "result" => $x));
    //     } else {
    //         $this->db->select('periksa_dokumen_kapal.*, kapal.nama_kapal');
    //         $this->db->from('periksa_dokumen_kapal');
    //         $this->db->join('kapal', 'kapal.id = periksa_dokumen_kapal.id_kapal');
    //         //$this->db->where('id', $id);
    //         $x = $this->db->get()->result();
    //     }

    //    $this->response(array("status" => 200, "result" => $x));
       
    // }

    //Menampilkan data kewajiban
    
    // public function index_post()
    // {
    //    //$this->load->model('dokumen_model');
    //     $kapal = $this->post('nama_kapal');
    //     $nahkoda = $this->post('nama_nahkoda');
    //     $jumlah_abk = $this->post('jumlah_abk');

    //     $surat_ukur = $this->post('surat_ukur');
    //     $diterbitkan_oleh_1 =  $this->post('diterbitkan_oleh_1');
    //     $pada_tanggal_1 = $this->post('pada_tanggal_1');

    //     $masa_berlaku_1= $this->post('masa_berlaku_1');
    //     $surat_laut= $this->post('surat_laut');
    //     $diterbitkan_oleh_2= $this->post('diterbitkan_oleh_2');

    //     $pada_tanggal_2= $this->post('pada_tanggal_2');
    //     $masa_berlaku_2= $this->post('masa_berlaku_2');
    //     $sertifikat_keselamatan_radio= $this->post('sertifikat_keselamatan_radio');

    //     $diterbitkan_oleh_3= $this->post('diterbitkan_oleh_3');
    //     $pada_tanggal_3= $this->post('pada_tanggal_3');
    //     $masa_berlaku_3= $this->post('masa_berlaku_3');

    //     $sertifikat_keselamatan_penumpang= $this->post('sertifikat_keselamatan_penumpang');
    //     $diterbitkan_oleh_4= $this->post('diterbitkan_oleh_4');
    //     $pada_tanggal_4= $this->post('pada_tanggal_4');

    //     $masa_berlaku_4= $this->post('masa_berlaku_4');
    //     $sertifikat_garis_muat= $this->post('sertifikat_garis_muat');
    //     $diterbitkan_oleh_5= $this->post('diterbitkan_oleh_5');

    //     $pada_tanggal_5= $this->post('pada_tanggal_5');
    //     $masa_berlaku_5= $this->post('masa_berlaku_5');
    //     $sertifikat_pengawakan_dan_keselamatan= $this->post('sertifikat_pengawakan_dan_keselamatan');

    //     $diterbitkan_oleh_6= $this->post('diterbitkan_oleh_6');
    //     $pada_tanggal_6= $this->post('pada_tanggal_6');
    //     $masa_berlaku_6= $this->post('masa_berlaku_6');

    //     $id_kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
    //     foreach ($id_kapal as $key => $value) {              
    //     } 

    //     $id_nahkoda = $this->db->query('SELECT id from nahkoda where nama_nahkoda = "'.$nahkoda.'"')->result();
    //     foreach ($id_nahkoda as $key => $row) {              
    //     } 

    //     $data = [
    //         'id_kapal'      => (int)$value->id,
    //         'id_nahkoda'    => (int)$row->id,
    //         'jumlah_abk'    => $jumlah_abk,
    //         'surat_ukur'    => $surat_ukur,

    //         'diterbitkan_oleh_1' => $diterbitkan_oleh_1,
    //         'pada_tanggal_1'    => $pada_tanggal_1,
    //          'masa_berlaku_1'   => $masa_berlaku_1,
    //         'surat_laut'        => $surat_laut,
    //         'diterbitkan_oleh_2' => $diterbitkan_oleh_2,

    //         'pada_tanggal_2' => $pada_tanggal_2,
    //         'masa_berlaku_2' => $masa_berlaku_2,
    //         'sertifikat_keselamatan_radio' => $sertifikat_keselamatan_radio,
    //         'diterbitkan_oleh_3' => $diterbitkan_oleh_3,

    //         'pada_tanggal_3' => $pada_tanggal_3,
    //         'masa_berlaku_3' => $masa_berlaku_3,
    //         'sertifikat_keselamatan_penumpang' => $sertifikat_keselamatan_penumpang,
    //         'diterbitkan_oleh_4' => $diterbitkan_oleh_4,

    //         'pada_tanggal_4' => $pada_tanggal_4,
    //         'masa_berlaku_4' => $masa_berlaku_4,
    //         'sertifikat_garis_muat' => $sertifikat_garis_muat,
    //         'diterbitkan_oleh_5' => $diterbitkan_oleh_5,

    //         'pada_tanggal_5' => $pada_tanggal_5,
    //         'masa_berlaku_5' => $masa_berlaku_5,
    //         'sertifikat_pengawakan_dan_keselamatan' => $sertifikat_pengawakan_dan_keselamatan,

    //         'diterbitkan_oleh_6' => $diterbitkan_oleh_6,
    //         'pada_tanggal_6' => $pada_tanggal_6,
    //         'masa_berlaku_6' => $masa_berlaku_6
            
    //     ];
         
    //         $sukses = $this->db->insert('periksa_dokumen_kapal', $data);
    //         if( $sukses ) {
    //                         $pesan = 'Sukses menyimpan data dokumen';
    //         $this->response(array('status' => 200, 'pesan' => $pesan));
    //     } else {
    //                         $pesan = 'Gagal';
    //         $this->response(array('status' => 400, 'pesan' => $pesan));
    //     }        
        

    // }



}