<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Labuh extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kewajiban
    function index_get() {
        $id = $this->post('id');
        if ($id != NULL) {
            $this->db->select('lokasi_labuh.*, kapal.nama_kapal');
        $this->db->from('lokasi_labuh');
        $this->db->join('kapal', 'kapal.id = lokasi_labuh.id_kapal');
	        $this->db->where('id', $id);
	        //$this->db->where('id', $id)->get('periksa_pemenuhan_kewajiban_kapal', $data);
	        $x = $this->db->get()->result();
	        $this->response(array("status" => 200, "result" => $x));
        } else {
            $this->db->select('lokasi_labuh.*, kapal.nama_kapal');
        $this->db->from('lokasi_labuh');
        $this->db->join('kapal', 'kapal.id = lokasi_labuh.id_kapal');
	        //$this->db->where('id', $id);
	        $x = $this->db->get()->result();
        }

       $this->response(array("status" => 200, "result" => $x));
       
    }

    function index_post(){

        $config = array(
            'upload_path'   => "./upload/",
            'allowed_types' => "jpg|jpeg",
            'overwrite'     => TRUE,
            'max_size'      => "512",
        );
        
        $this->load->library('upload', $config);

        //Location
        $longitude  = $this->post('longitude');
        $latitude   = $this->post('latitude');
        

        if( $this->upload->do_upload() == true ) {

             $file_upload = $this->upload->data();
             $data = array(
                'longitude' => $longitude,
                'latitude' => $latitude,
                'gambar_labuh' => $file_upload['file_name']
             );
             $this->db->insert('lokasi_labuh', $data);
             $pesan = 'Berhasil mengirim data';
             $this->response(array('status' => 200,'pesan' => $pesan));
        } else {
            $message = 'Gagal izin' .' - '. $this->upload->display_errors();
            $this->response(array('status' => 400, 'pesan' => $message));            
        }
    }
} 