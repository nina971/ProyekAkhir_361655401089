<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Tibaber extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kewajiban
    function index_get() {
        $id = $this->post('id');
        if ($id != NULL) {
           $this->db->select('laporan_kapal_tiba_berangkat.*, kapal.nama_kapal');
        $this->db->from('laporan_kapal_tiba_berangkat');
        $this->db->join('kapal', 'kapal.id = laporan_kapal_tiba_berangkat.id_kapal');
	        $this->db->where('id', $id);
	        //$this->db->where('id', $id)->get('periksa_pemenuhan_kewajiban_kapal', $data);
	        $x = $this->db->get()->result();
	        $this->response(array("status" => 200, "result" => $x));
        } else {
            $this->db->select('laporan_kapal_tiba_berangkat.*, kapal.nama_kapal');
        $this->db->from('laporan_kapal_tiba_berangkat');
        $this->db->join('kapal', 'kapal.id = laporan_kapal_tiba_berangkat.id_kapal');
	        //$this->db->where('id', $id);
	        $x = $this->db->get()->result();
        }

       $this->response(array("status" => 200, "result" => $x));
       
    }
    
    function index_post(){

        $kapal = $this->post('nama_kapal');
        $nahkoda = $this->post('nama_nahkoda');
        $tanggal = $this->post('tanggal');
        $jam_tiba = $this->post('jam_tiba');
        $trip_ke = $this->post('trip_ke');
        $jumlah_perwirakapal = $this->post('jumlah_perwirakapal');
        $draft_kapal = $this->post('draft_kapal');
        $jumlah_abkkapal = $this->post('jumlah_abkkapal');
        $lokasi_labuh = $this->post('lokasi_labuh');

        $id_kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
        foreach ($id_kapal as $key => $value) {              
        } 

         $id_nahkoda = $this->db->query('SELECT id from nahkoda where nama_nahkoda = "'.$nahkoda.'"')->result();
        foreach ($id_nahkoda as $key => $row) {              
        }


        $data = array(
            
            'id_nahkoda' => (int)$row->id,
            'trip_ke' => $trip_ke,
            'id_kapal' => (int)$value->id,
            'tanggal' => $tanggal,
            'jam_tiba' => $jam_tiba,
            'jumlah_abkkapal' => $jumlah_abkkapal,
            'jumlah_perwirakapal' => $jumlah_perwirakapal,
            'draft_kapal' => $draft_kapal,
            'lokasi_labuh' => $lokasi_labuh
            
           
        );

        $this->db->insert('laporan_kapal_tiba_berangkat', $data);
        $pesan = 'Sukses mengirim laporan tiba/berangkat';
        $this->response(array('status' => 200, 'pesan' => $pesan));
    }



}