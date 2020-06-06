<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Perspb extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('Pengajuanmodel');
    }

    //Menampilkan data kewajiban
    function index_get() {
        $id = $this->post('id');
        if ($id != NULL) {
            $this->db->select('permohonan_spb.*, kapal.nama_kapal');
            $this->db->from('permohonan_spb');
            $this->db->join('kapal', 'kapal.id = permohonan_spb.id_kapal');
	        $this->db->where('id', $id);
	        //$this->db->where('id', $id)->get('periksa_pemenuhan_kewajiban_kapal', $data);
	        $x = $this->db->get()->result();
	        $this->response(array("status" => 200, "result" => $x));
        } else {
            $this->db->select('permohonan_spb.*, kapal.nama_kapal');
            $this->db->from('permohonan_spb');
            $this->db->join('kapal', 'kapal.id = permohonan_spb.id_kapal');
	        //$this->db->where('id', $id);
	        $x = $this->db->get()->result();
        }

       $this->response(array("status" => 200, "result" => $x));
       
    }

    function index_post(){
        $kapal = $this->post('nama_kapal');
        $tempat_permohonan = $this->post('tempat_permohonan');
        $nahkoda = $this->post('nama_nahkoda');
        $jumlah_awak = $this->post('jumlah_awak');
        $jumlah_muatan = $this->post('jumlah_muatan');
        $tanggal_permohonan = $this->post('tanggal_permohonan');
        $waktu_permohonan = $this->post('waktu_permohonan');
        $pelabuhan_tujuan = $this->post('pelabuhan_tujuan');
    
        $id_kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
        foreach ($id_kapal as $key => $value) {              
        } 

         $id_nahkoda = $this->db->query('SELECT id from nahkoda where nama_nahkoda = "'.$nahkoda.'"')->result();
        foreach ($id_nahkoda as $key => $row) {              
        }

        // $id_lokasi = $this->db->query('SELECT id from lokasi_pelabuhan where lokasi = "'.$lokasi.'"')->result();
        // foreach ($id_lokasi as $key => $data_lokasi) {              
        // } 

        // $id_pelabuhan = $this->db->query('SELECT id from lokasi_pelabuhan where lokasi = "'.$pelabuhan_tujuan.'"')->result();
        // foreach ($id_pelabuhan as $key => $pelabuhan) {              
        // } 
 


        $data = [
            'id_kapal' => (int)$value->id,
            'id_nahkoda' => (int)$row->id,
            'tempat_permohonan' => $tempat_permohonan,
            'jumlah_awak' => $jumlah_awak,
            'jumlah_muatan' => $jumlah_muatan,
            'tanggal_permohonan' => $tanggal_permohonan,
            'waktu_permohonan' => $waktu_permohonan,
            'pelabuhan_tujuan' => $pelabuhan_tujuan
        ];

        //

      $this->db->insert('permohonan_spb',$data);

      //  $data_spb =[
      //       'id_kapal' => (int)$value->id,
      //       'id_nahkoda' => (int)$row->id,
      //       'jumlah_awak' => $jumlah_awak,
      //       'jumlah_muatan' => $jumlah_muatan,
      //       'tanggal_permohonan' => $tanggal_permohonan,
      //       'waktu_permohonan' => $waktu_permohonan,
      //       'pelabuhan_tujuan' => $pelabuhan_tujuan
      //   ];
      // $this->db->insert('unggahspb',$data_spb);



      $pesan = 'Sukses menyimpan data SPB';
      $this->response(array('status' => 200, 'pesan' => $pesan));
    }


 //    public function laporan1()
 // {

 //    $id_jurumudi = $this->post('jurumudi');
 //    $lap_1_judul = $this->post)('judul1');

 //    $data = array(
 //        'id_jur' => $id_jurumudi,
 //        'judul_lap1' => $lap_1_judul
 //    )

 //    $this->db->insert('laporan1', $data);
 //    $last_id_lap1 = $this->db->insert_id();

 //    $data_kel_lap = array(
 //        'id_jur' => $id_jurumudi,
 //        'sub_laporan' => $last_id_lap1,
 //    )

 //    $this->db->insert('tbl_kelola_laporan', $data_kel_lap);
    
 // }

}