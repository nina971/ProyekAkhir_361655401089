<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Registerjurumudi extends REST_Controller {

   function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }


    public function index_get()
    {
         $id = $this->post('id');
        if ($id != NULL) {
        $this->db->select('jurumudi.*','kapal.nama_kapal');
        $this->db->from('jurumudi');
        $this->db->join('kapal', 'kapal.id = jurumudi.id_kapal');
        
        $this->db->where('id', $id);
            //$this->db->where('id', $id)->get('periksa_pemenuhan_kewajiban_kapal', $data);
            $x = $this->db->get()->result();
            $this->response(array("status" => 200, "result" => $x));
        } else {
        $this->db->select('jurumudi.*','kapal.nama_kapal');
        $this->db->from('jurumudi');
        $this->db->join('kapal', 'kapal.id = jurumudi.id_kapal');
        
            $x = $this->db->get()->result();
        }

       $this->response(array("status" => 200, "result" => $x));
    }


    public function index_post() {

        $nama_jurumudi  = $this->post('nama_jurumudi');
        $nik            = $this->post('nik');
        $alamat         = $this->post('alamat');
        $nohp           = $this->post('nohp');
        //$username       = $this->post('username');
        $password       = $this->post('password');
        $kapal     = $this->post('nama_kapal');
        $nahkoda     = $this->post('nama_nahkoda');
      
        $id_kapal       = $this->db->query(
            'SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
        foreach ($id_kapal as $key => $value) {              
        } 

        $id_nahkoda      = $this->db->query(
            'SELECT id from nahkoda where nama_nahkoda = "'.$nahkoda.'" ')->result();
        foreach ($id_nahkoda as $key => $row) {              
        } 

       


        $data_nama = $this->db->query('SELECT nik FROM jurumudi WHERE nik ="'.$nik.'"');
        if( $data_nama->num_rows() > 0 ) {

        $pesan = "Data sudah terdaftar";
        $this->response(array('status'=>403,'pesan'=>$pesan));
         
        } 
        
        else {
        $cek_nama = $this->db->query('SELECT NIK FROM mjurumudi WHERE NIK ="'.$nik.'"');
        if( $cek_nama->num_rows() > 0 ) {

            $data = array(
            'id_kapal' => (int)$value->id,
            'id_nahkoda' => (int)$row->id,
            'nik'  => $nik,
            'nama' => $nama_jurumudi,
            'alamat' => $alamat,
            'nomor_hp' => $nohp,
            'password' => $password
         
             );
            $this->db->insert('jurumudi', $data);      
            $pesan = "Berhasil Register";
            $this->response(array('status'=>200,'pesan'=>$pesan));
        }
        else {
            $pesan = "Data jurumudi tidak ditemukan";
            $this->response(array('status'=>403,'pesan'=>$pesan));            
        }
    }

    }
        // //set rresponse API Succes
        // $response['SUCCESS'] = array('status'=> TRUE, 'message'=>'Berhasil Registrasi');

        // //set response API if not found
        // $response['NOT_FOUND'] = array('status'=> FALSE,'message'=>'No user were found','data'=>null);

        // $nama_jurumudi = $this->input->post('nama');
        // $check = $this->M_register->check_username($nama_jurumudi);

        // if ($check>0) {
        //    $response['NOT_FOUND'] = array('status'=>FALSE,'message'=>'Nama Jurumudi Sudah Digunakan');
        //    $this->response($response['NOT_FOUND'],200);
        // }else{
        //     $data = array(
        //         '' => ,

        //          );
        // }     

   
}
