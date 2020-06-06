<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Notifikasi extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    public function index_get()
    {
        $nama = $this->get('nama_jurumudi');
        
        $this->db->select('notifikasi.*');
        $this->db->from('notifikasi');
        $this->db->join('mjurumudi',  'notifikasi.id_pesan = mjurumudi.id');
        $this->db->where('nama_jurumudi', $nama);
        $data = $this->db->get()->result(); 
      
       $this->response(array("status" => 200, "result" => $data));
        // }
    }


}