<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abkkapal extends CI_Controller {

   public function __construct(){
        parent::__construct();
        $this->load->model("Abk_Kapal");
    }
    public function index()
    {
       

        $data['abk'] = $this->Abk_Kapal->getTable();


        $this->load->view("abk_kapal.php", $data);  

    }

    

    public function create(){
        $this->load->model('d_ijazah');
        $this->load->model('kapal');

        $data['ijazah'] = $this->d_ijazah->getAll();
        $data['kapal'] = $this->kapal->getStat();

        $this->load->view('create', $data);
    }

    public function save(){
        $this->load->model('abk_kapal');
        $nama_abk = $this->input->post('nama_abk');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $jabatan = $this->input->post('jabatan');
        $status_aktif = $this->input->post('status_aktif');
        $ijazah = $this->input->post('ijazah');
        $kapal = $this->input->post('kapal');

        $data = [
            'nama_abk' => $nama_abk,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'jabatan' => $jabatan,
            'status_aktif' => $status_aktif,
            'id_ijazah' => $ijazah,
            'id_kapal' => $kapal
        ];

        $save = $this->abk_kapal->insert($data);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah tersimpan!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('abkkapal');
    }

    public function edit($id){
        $this->load->model('d_ijazah');
        $this->load->model('kapal');
        $this->load->model('abk_kapal');

        $data['ijazah'] = $this->d_ijazah->getAll();
        $data['kapal'] = $this->kapal->getStat();

        $data['abk'] = $this->abk_kapal->get($id);
        $this->load->view('edit', $data);
    }

    public function update(){
        $this->load->model('abk_kapal');
        $id = $this->input->post('id');
        $nama_abk = $this->input->post('nama_abk');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $jabatan = $this->input->post('jabatan');
        $status_aktif = $this->input->post('status_aktif');
        $ijazah = $this->input->post('ijazah');
        $kapal = $this->input->post('kapal');


        $data = [
            'nama_abk' => $nama_abk,
            'alamat' => $alamat,
            'no_hp' => $no_hp,
            'jabatan' => $jabatan,
            'status_aktif' => $status_aktif,
            'id_ijazah' => $ijazah,
            'id_kapal' => $kapal
        ];

        $save = $this->abk_kapal->update($data, $id);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah diubah!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('abkkapal');
    }
    public function delete($id){
        $this->load->model('abk_kapal');

        $delete = $this->abk_kapal->delete($id);

        if ($delete) {
            $this->session->set_flashdata('msg_success', 'Data yang anda pilih telah terhapus');
        } else {
            $this->session->set_flashdata('msg_error', 'Tidak bisa hapus pesan');
        }
        redirect('abkkapal');
    }
}
