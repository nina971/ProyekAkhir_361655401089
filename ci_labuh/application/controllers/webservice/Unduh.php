<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Unduh extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

     function index_post(){
       $config = array(
            'upload_path'   => "./upload/",
            'allowed_types' => "pdf|csv",
            'overwrite'     => TRUE,
            'max_size'      => "2048",
        );
        
        $this->load->library('upload', $config);

        //input nama kapal
        $nik = $this->input->post('nik');

         $id_jurumudi = $this->db->query('SELECT id_jurumudi from jurumudi where nik = "'.$nik.'"')->result();
        foreach ($id_jurumudi as $key => $row) {              
        } 

        if( $this->upload->do_upload() == true ) {

             $file_upload = $this->upload->data();
             $data = array(
                'id_jurumudi' => (int)$row->id_jurumudi,
                'filename' => $file_upload['file_name']
             );
             $this->db->insert('unduh', $data);

         
             $pesan = 'Berhasil mengirim data';
             $this->response(array('status' => 200,'pesan' => $pesan));
        } else {
            $message = 'Gagal izin' .' - '. $this->upload->display_errors();
            $this->response(array('status' => 400, 'pesan' => $message));            
        }   

    }

}