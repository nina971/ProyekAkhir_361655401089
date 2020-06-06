<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Kewajiban extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kewajiban
    function index_get() {
        $id = $this->post('id');
        if ($id != NULL) {
            $this->db->select('periksa_pemenuhan_kewajiban_kapal.*, kapal.nama_kapal');
            $this->db->from('periksa_pemenuhan_kewajiban_kapal');
	        $this->db->join('kapal', 'kapal.id = periksa_pemenuhan_kewajiban_kapal.id_kapal');
	        $this->db->where('id', $id);
	        //$this->db->where('id', $id)->get('periksa_pemenuhan_kewajiban_kapal', $data);
	        $x = $this->db->get()->result();
	        $this->response(array("status" => 200, "result" => $x));
        } else {
            $this->db->select('periksa_pemenuhan_kewajiban_kapal.*, kapal.nama_kapal');
            $this->db->from('periksa_pemenuhan_kewajiban_kapal');
	        $this->db->join('kapal', 'kapal.id = periksa_pemenuhan_kewajiban_kapal.id_kapal');
	        //$this->db->where('id', $id);
	        $x = $this->db->get()->result();
        }

       $this->response(array("status" => 200, "result" => $x));
       
    }

    function index_post(){
         $kapal = $this->post('nama_kapal');
         $nahkoda = $this->post('nama_nahkoda');
        $jasa_labuh = $this->post('jasa_labuh');
        $jasa_tambat = $this->post('jasa_tambat');
        $jasa_kenavigasian = $this->post('jasa_kenavigasian');
        $jasa_perkapalan = $this->post('jasa_perkapalan');
        $jasa_kebersihan_kapal = $this->post('jasa_kebersihan_kapal');

        $id_kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
        foreach ($id_kapal as $key => $value) {              
        } 

         $id_nahkoda = $this->db->query('SELECT id from nahkoda where nama_nahkoda = "'.$nahkoda.'"')->result();
        foreach ($id_nahkoda as $key => $row) {              
        }

        $data = array(
    
            'jasa_labuh' => $jasa_labuh,
            'jasa_tambat' => $jasa_tambat,
            'id_kapal' => (int)$value->id,
            'id_nahkoda' => (int)$row->id,
            'jasa_kenavigasian' => $jasa_kenavigasian,
            'jasa_perkapalan' => $jasa_perkapalan,
            'jasa_kebersihan_kapal' => $jasa_kebersihan_kapal
           
            
        );

        $this->db->insert('periksa_pemenuhan_kewajiban_kapal',$data);
        $pesan = 'Sukses menyimpan data kewajiban';
        $this->response(array('status' => 200, 'pesan' => $pesan));
    }



}