<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Pernahkoda extends REST_Controller {

	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data kewajiban
    function index_get() {
        $id = $this->post('id');
        if ($id != NULL) {
            $this->db->select('pernyataan_nahkoda.*, kapal.nama_kapal');
        $this->db->from('pernyataan_nahkoda');
        $this->db->join('kapal', 'kapal.id = pernyataan_nahkoda.id_kapal');
	        $this->db->where('id', $id);
	        //$this->db->where('id', $id)->get('periksa_pemenuhan_kewajiban_kapal', $data);
	        $x = $this->db->get()->result();
	        $this->response(array("status" => 200, "result" => $x));
        } else {
           $this->db->select('pernyataan_nahkoda.*, kapal.nama_kapal');
        $this->db->from('pernyataan_nahkoda');
        $this->db->join('kapal', 'kapal.id = pernyataan_nahkoda.id_kapal');
	        //$this->db->where('id', $id);
	        $x = $this->db->get()->result();
        }

       $this->response(array("status" => 200, "result" => $x));
       
    }

        function index_post(){

        $kapal = $this->post('nama_kapal');
        $nahkoda = $this->post('nama_nahkoda');
        $jumlah_muatan = $this->post('jumlah_muatan');
        $jumlah_penumpang = $this->post('jumlah_penumpang');
        $draft_kapal = $this->post('draft_kapal');
        $stabilitas_kapal = $this->post('stabilitas_kapal');
        $jumlah_perwiradek = $this->post('jumlah_perwiradek');
        $jumlah_abk = $this->post('jumlah_abk');
        $jumlah_perwiramesin = $this->post('jumlah_perwiramesin');
        $jumlah_abklainnya = $this->post('jumlah_abklainnya');
        $jumlah_alatnavigasi = $this->post('jumlah_alatnavigasi');
        $jumlah_alatpenolong = $this->post('jumlah_alatpenolong');
        $jumlah_alatpemadam = $this->post('jumlah_alatpemadam');
        $jumlah_alatpencegahan = $this->post('jumlah_alatpencegahan');

        $id_kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
        foreach ($id_kapal as $key => $value) {              
        } 

         $id_nahkoda = $this->db->query('SELECT id from nahkoda where nama_nahkoda = "'.$nahkoda.'"')->result();
        foreach ($id_nahkoda as $key => $row) {              
        }

        $data = array(
            'id_kapal' => (int)$value->id,
            'id_nahkoda' => (int)$row->id,
            'jumlah_muatan' => $jumlah_muatan,
            'jumlah_penumpang' => $jumlah_penumpang,
            'draft_kapal' => $draft_kapal,
            'jumlah_abk' => $jumlah_abk,
            'stabilitas_kapal' => $stabilitas_kapal,
            'jumlah_perwiradek' => $jumlah_perwiradek,
            'jumlah_perwiramesin' => $jumlah_perwiramesin,
            'jumlah_abklainnya' => $jumlah_abklainnya,
            'jumlah_alatnavigasi' => $jumlah_alatnavigasi,
            'jumlah_alatpenolong' => $jumlah_alatpenolong,
            'jumlah_alatpemadam' => $jumlah_alatpemadam,
            'jumlah_alatpencegahan' => $jumlah_alatpencegahan
            
        );
            $this->db->insert('pernyataan_nahkoda', $data);
            $pesan = 'Sukses menyimpan data pernyataan nahkoda';
            $this->response(array('status' => 200, 'pesan' => $pesan));

    }


}