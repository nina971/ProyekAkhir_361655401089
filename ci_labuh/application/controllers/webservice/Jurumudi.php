<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Jurumudi extends REST_Controller {
	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        
    }

    function index_get(){
    	$id = $this->post('id_jurumudi');
    	$this->db->select(' nama,alamat');
    	$this->db->from('jurumudi');
    	$this->db->where('id_jurumudi',$id);
    	 $x = $this->db->get()->result();
    	$this->response(array("status" => 200, "result" => $x));
    }

    
}
