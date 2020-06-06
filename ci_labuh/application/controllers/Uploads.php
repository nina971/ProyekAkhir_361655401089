<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploads extends CI_Controller {

	function  __construct() {
        parent::__construct();
        //load our helper
        $this->load->helper('url');
        //load our model
        $this->load->model('upload_model');
        $this->load->helper(array('form'));
    }

    public function index(){

        // $data['jurumudi'] = $this->upload_model->getAll();
        // $this->load->view('upload',$data);


        $data['data'] = $this->upload_model->getAllFiles();
		$this->load->view('upload',$data);
  }

  public function download($id){
    $this->load->helper('download');
    $fileinfo = $this->upload_model->download($id);
    $file = 'upload/'.$fileinfo['filename'];
    force_download($file,NULL);
  }

  //  public function unduh_spb($nik){

  //   $this->db->where('id_jurumudi',$nik);
  //   $data_nik = $this->db->get('unduh');

  //   if ($data_nik->num_rows()> 0 ) {
  //     $this->load->view('upload');
  //   }else{
  //     $this->load->view('auth');
  //   }
  // }

  

}