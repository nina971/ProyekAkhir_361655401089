<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Namanahkoda extends REST_Controller {
	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        
    }

    function index_get()

    {
    	$nik = $this->get('nik');

    	$this->db->select('nahkoda.nama_nahkoda');
        $this->db->from('jurumudi');
        $this->db->join('nahkoda',  'jurumudi.id_nahkoda = nahkoda.id');
        $this->db->where('jurumudi.nik', $nik);
        $data = $this->db->get()->result(); 
      
    	$this->response(array("status" => 200, "result" => $data));
    }
}

