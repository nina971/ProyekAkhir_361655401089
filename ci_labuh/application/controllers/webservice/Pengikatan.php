<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Pengikatan extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kewajiban
    function index_get() {
        $id = $this->post('id');
        if ($id != NULL) {
            $this->db->select('pernyataan_pengikatan.*, kapal.nama_kapal');
        $this->db->from('pernyataan_pengikatan');
        $this->db->join('kapal', 'kapal.id = pernyataan_pengikatan.id_kapal');
	        $this->db->where('id', $id);
	        //$this->db->where('id', $id)->get('periksa_pemenuhan_kewajiban_kapal', $data);
	        $x = $this->db->get()->result();
	        $this->response(array("status" => 200, "result" => $x));
        } else {
            $this->db->select('pernyataan_pengikatan.*, kapal.nama_kapal');
        $this->db->from('pernyataan_pengikatan');
        $this->db->join('kapal', 'kapal.id = pernyataan_pengikatan.id_kapal');
	        //$this->db->where('id', $id);
	        $x = $this->db->get()->result();
        }

       $this->response(array("status" => 200, "result" => $x));
       
    }

    function index_post(){

        $kapal          = $this->post('nama_kapal');
        $nahkoda        = $this->post('nama_nahkoda');
        $truck_sedang   = $this->post('truck_sedang');
        $truck_besar    = $this->post('truck_besar');
        $truck_trailer  = $this->post('truck_trailer');
        $bus_besar      = $this->post('bus_besar');
        $bus_mini       = $this->post('bus_mini');
       

        $id_kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
        foreach ($id_kapal as $key => $value) {              
        } 

         $id_nahkoda = $this->db->query('SELECT id from nahkoda where nama_nahkoda = "'.$nahkoda.'"')->result();
        foreach ($id_nahkoda as $key => $row) {              
        } 
           
        $data = array(
            'id_kapal'      => (int)$value->id,
            'id_nahkoda'    => (int)$row->id,
            'truck_sedang'  => $truck_sedang,
            'truck_besar'   => $truck_besar,
            'truck_trailer' => $truck_trailer,
            'bus_besar'     => $bus_besar,
            'bus_mini'      => $bus_mini
            );

            $this->db->insert('pernyataan_pengikatan', $data);
            $pesan = 'Sukses mengirim data pernyataan pengikatan';
            $this->response(array('status' => 200, 'pesan' => $pesan));


    }



}