<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Manifest extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('Pengajuanmodel');

    }

    //Menampilkan data kewajiban
    function index_get() {
        $id = $this->post('id');
        if ($id != NULL) {
             $this->db->select('manifest_penumpang.*, kapal.nama_kapal');
            $this->db->from('manifest_penumpang');
            $this->db->join('kapal', 'kapal.id = manifest_penumpang.id_kapal');
	        $this->db->where('id', $id);
	        //$this->db->where('id', $id)->get('periksa_pemenuhan_kewajiban_kapal', $data);
	        $x = $this->db->get()->result();
	        $this->response(array("status" => 200, "result" => $x));
        } else {
            $this->db->select('manifest_penumpang.*, kapal.nama_kapal');
            $this->db->from('manifest_penumpang');
            $this->db->join('kapal', 'kapal.id = manifest_penumpang.id_kapal');
	        //$this->db->where('id', $id);
	        $x = $this->db->get()->result();
        }

       $this->response(array("status" => 200, "result" => $x));
       
    }

    function index_post(){
        $kapal = $this->post('nama_kapal');
        $nama_penumpang = $this->post('nama_penumpang');
        $alamat = $this->post('alamat');
        $tanggal = $this->post('tanggal');
        $umur = $this->post('umur');
        $jenis_kelamin = $this->post('jenis_kelamin');

        $kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
        foreach ($kapal as $key => $value) {              
        } 


        $data = [
            
            'id_kapal' => (int)$value->id,
            'nama_penumpang' => $nama_penumpang,
            'alamat' => $alamat,
            'tanggal' => $tanggal,
            'umur' => $umur,
            'jenis_kelamin' => $jenis_kelamin
           
        ];

         $this->db->insert('manifest_penumpang', $data);
       
        $pesan = 'Sukses menyimpan data manifest';
        $this->response(array('status' => 200, 'pesan' => $pesan));
    }



}