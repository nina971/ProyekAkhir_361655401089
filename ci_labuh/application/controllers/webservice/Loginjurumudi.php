<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Loginjurumudi extends REST_Controller {

   function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_post() {

        $nik       = $this->post('nik');
        $password       = $this->post('password');
       


        $this->db->where('nik', $nik);
        $this->db->where('password', $password);
       
        $jurumudi = $this->db->get('jurumudi');

        if ($jurumudi->num_rows() > 0) {
            $data = $jurumudi->result();
            $message = "Sukses Masuk";
            $this->response(array('status'=>200,'pesan'=>$message, 'result'=>$data));
        }else{
            $message = "Gagal Login";
            $this->response(array('status'=>400,'pesan'=>$message));
        }

    }

   
}
