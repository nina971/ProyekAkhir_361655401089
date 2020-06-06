<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Mnahkoda extends REST_Controller {
	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        
    }

    function index_get()
    {
    	$data_nama_nahkoda = $this->db->query('select id, nama_nahkoda  from nahkoda')->result();
    	$this->response(array("status" => 200, "result" => $data_nama_nahkoda));
    }
}
