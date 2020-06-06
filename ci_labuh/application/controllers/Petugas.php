<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

   public function __construct(){
        parent::__construct();
        $this->load->model("Petugas_Model");
    }
    public function index()
    {
        $data["petugas"] = $this->Petugas_Model->getTable();
        $this->load->view("petugas_view.php", $data);    
    }

    public function create(){
        $this->load->model('kapal');
         $this->load->model('Nahkoda');

        $data['kapal'] = $this->kapal->getStat();
        $data['nahkoda'] = $this->Nahkoda->getNahkoda();

        $this->load->view('petugas_create', $data);
    }
     

    public function save(){
        // $this->load->model('petugas_model');
        $nama_jurumudi = $this->input->post('nama_jurumudi'); 
        $nik = $this->input->post('NIK');
        $kapal = $this->input->post('kapal');
        $nahkoda = $this->input->post('nahkoda');
       
        $data = [
            'nama_jurumudi' => $nama_jurumudi,
            'NIK' => $nik,
            'id_kapal' => $kapal,
            'id_nahkoda' => $nahkoda
        ];

        $save = $this->Petugas_Model->insert($data);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah tersimpan!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('petugas');
    }

    public function edit($id){
        $this->load->model('kapal');
        $this->load->model('petugas_model');
        $this->load->model('Nahkoda');
        $data['nahkoda'] = $this->Nahkoda->getNahkoda();

        $data['kapal'] = $this->kapal->getStat();

        $data['petugas'] = $this->petugas_model->get($id);
        $this->load->view('petugas_edit', $data);
    }

    public function update(){
        $this->load->model('petugas_model');
        $nama = $this->input->post('nama_jurumudi');
        $nik = $this->input->post('NIK');
        $kapal = $this->input->post('kapal');
        $nahkoda = $this->input->post('nahkoda');
       
        $data = [
            'nama_jurumudi' => $nama,
            'NIK' => $nik,
            'id' => $kapal,
            'id' => $nahkoda
        ];


        $save = $this->petugas_model->update($data, $id);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah diubah!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('petugas');
    }
    public function delete($id){
        //$this->load->model('petugas_model');

        $delete = $this->Petugas_Model->delete($id);

        if ($delete) {
            $this->session->set_flashdata('msg_success', 'Data yang anda pilih telah terhapus');
        } else {
            $this->session->set_flashdata('msg_error', 'Tidak bisa hapus pesan');
        }
        redirect('petugas');
    }
}
