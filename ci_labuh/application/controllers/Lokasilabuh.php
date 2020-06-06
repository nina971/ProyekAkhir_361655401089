<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasilabuh extends CI_Controller {

	function  __construct() {
        parent::__construct();
        //load our helper
        $this->load->helper('url');
        //load our model
        $this->load->model('labuh_model');
        //$this->load->library('googlemaps');
    }

    public function index(){
		
        $data['lokasi'] = $this->labuh_model->getAllFiles();
        $this->load->view('lokasi',$data);
  }

  
}