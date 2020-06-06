<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Detailprofil extends REST_Controller {
 function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

	public function index_get()
	{
        $nik = $this->get('nik');
		
        $this->db->select('jurumudi.*, kapal.nama_kapal, nahkoda.nama_nahkoda');
        $this->db->from('jurumudi');
        $this->db->join('kapal',  'jurumudi.id_kapal = kapal.id');
        $this->db->join('nahkoda',  'jurumudi.id_nahkoda = nahkoda.id');
        //$this->db->join('lokasi_pelabuhan',  'jurumudi.id_lokasi = lokasi_pelabuhan.id');
        $this->db->where('nik', $nik);
        $data = $this->db->get()->result(); 
      
       $this->response(array("status" => 200, "result" => $data));
		// }
	}
}