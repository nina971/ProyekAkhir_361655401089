<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Unggahspb extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kewajiban
    function index_get() {
        $id = $this->post('id');
        if ($id != NULL) {
        $this->db->select('unggahspb.*');
        $this->db->from('unggahspb');
       
	    $this->db->where('id', $id);
	        //$this->db->where('id', $id)->get('periksa_pemenuhan_kewajiban_kapal', $data);
	        $x = $this->db->get()->result();
	        $this->response(array("status" => 200, "result" => $x));
        } else {
        $this->db->select('unggahspb.*');
        $this->db->from('unggahspb');
        //$this->db->join('jurumudi', 'jurumudi.id = unggahspb.id_jurumudi');
       // $this->db->join('kelola_laporan', 'kelola_laporan.id = notifikasi.id_laporan');
	        //$this->db->where('id', $id);
	        $x = $this->db->get()->result();
        }

       $this->response(array("status" => 200, "result" => $x));
       
    }

   


}