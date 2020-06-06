<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Ijazah extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        
    }

    function index_get(){

    	$this->db->select('ijazah.*,nama_abk');
    	$this->db->from('ijazah');
    	$this->db->join('abk','abk.id_ijazah=ijazah.id');

    	$query = $this->db->get()->result();
    	 $this->response(array("status" => 200, "result" => $query));
	    
    }

}