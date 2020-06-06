<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Upload extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kewajiban
    function index_get() {
        $id = $this->post('id');
        if ($id != NULL) {
           $this->db->select('upload_dokumen.*, kapal.nama_kapal');
        $this->db->from('upload_dokumen');
        $this->db->join('kapal', 'kapal.id = upload_dokumen.id_kapal');
	        $this->db->where('id', $id);
	        //$this->db->where('id', $id)->get('periksa_pemenuhan_kewajiban_kapal', $data);
	        $x = $this->db->get()->result();
	        $this->response(array("status" => 200, "result" => $x));
        } else {
           $this->db->select('upload_dokumen.*, kapal.nama_kapal');
        $this->db->from('upload_dokumen');
        $this->db->join('kapal', 'kapal.id = upload_dokumen.id_kapal');
	        //$this->db->where('id', $id);
	        $x = $this->db->get()->result();
        }

       $this->response(array("status" => 200, "result" => $x));
       
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
        $kapal = $this->input->post('nama_kapal');
        $nahkoda = $this->input->post('nama_nahkoda');
        $diterbitkan_oleh = $this->input->post('diterbitkan_oleh');
        $diterbitkan_pada = $this->input->post('diterbitkan_pada');
        $masa_berlaku = $this->input->post('masa_berlaku');
        $nama_dokumen = $this->input->post('nama_dokumen');

        $id_kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
        foreach ($id_kapal as $key => $value) {              
        } 

         $id_nahkoda = $this->db->query('SELECT id from nahkoda where nama_nahkoda = "'.$nahkoda.'"')->result();
        foreach ($id_nahkoda as $key => $row) {              
        } 

        if( $this->upload->do_upload() == true ) {

             $file_upload = $this->upload->data();
             $data = array(
                'id_kapal' => (int)$value->id,
                'id_nahkoda' => (int)$row->id,
                'diterbitkan_oleh'=>$diterbitkan_oleh,
                'diterbitkan_pada'=>$diterbitkan_pada,
                'masa_berlaku'=>$masa_berlaku,
                'nama_dokumen'=>$nama_dokumen,
                'filename' => $file_upload['file_name']
             );
             $this->db->insert('upload_dokumen', $data);
             $pesan = "Berhasil Upload Dokumen";
             $this->response(array('status'=>200,'pesan'=>$pesan));
            
        } else {
            $message = 'Gagal izin' .' - '. $this->upload->display_errors();
            $this->response(array('status' => 400, 'pesan' => $message));            
        }   
    }
}