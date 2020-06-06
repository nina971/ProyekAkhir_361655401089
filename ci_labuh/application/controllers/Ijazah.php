<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijazah extends CI_Controller {

  public function __construct(){
        parent::__construct();
        $this->load->model("Ijazah_model");
    }
    public function index()
    {
        $data["ijazah"] = $this->Ijazah_model->getTable();
        $this->load->view("ijazah_view.php", $data);    
    }

    

    public function create(){
       // $this->load->model('d_abk');

       // $data['abk'] = $this->d_abk->getAll();
        $this->load->view('add_ijazah_view');
    }

    public function save(){
        $this->load->model('ijazah_model');
        
        $nama_ijazah = $this->input->post('nama_ijazah');
        $diterbitkan_oleh = $this->input->post('diterbitkan_oleh');
        $no_ijazah = $this->input->post('no_ijazah');
        

        $data = [
            'nama_ijazah' => $nama_ijazah,
            'diterbitkan_oleh' => $diterbitkan_oleh,
            'no_ijazah' => $no_ijazah
            
            //'id_abk' => $abk
        ];

        $save = $this->ijazah_model->insert($data);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah tersimpan!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('ijazah');
    }

    public function edit($id){
        //$this->load->model('d_abk');
        $this->load->model('ijazah_model');

        //$data['abk'] = $this->d_abk->getAll();
        $data['ijazah'] = $this->ijazah_model->get($id);
        $this->load->view('edit_ijazah_view', $data);
    }

    public function update(){
        $this->load->model('ijazah_model');
        $id = $this->input->post('id');
        $nama_ijazah = $this->input->post('nama_ijazah');
        $diterbitkan_oleh = $this->input->post('diterbitkan_oleh');
        $no_ijazah = $this->input->post('no_ijazah');
        //$pada_tanggal = $this->input->post('pada_tanggal');
        //$masa_berlaku = $this->input->post('masa_berlaku');
       // $abk = $this->input->post('abk');

        $data = [
           'nama_ijazah' => $nama_ijazah,
            'diterbitkan_oleh' => $diterbitkan_oleh,
            'no_ijazah' => $no_ijazah
            //'pada_tanggal' => $pada_tanggal,
           // 'masa_berlaku' => $masa_berlaku
            //'id_abk' => $abk
        ];

        $save = $this->ijazah_model->update($data, $id);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah diubah!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('ijazah');
    }
    public function delete($id){
        $this->load->model('ijazah_model');

        $delete = $this->ijazah_model->delete($id);

        if ($delete) {
            $this->session->set_flashdata('msg_success', 'Data yang anda pilih telah terhapus');
        } else {
            $this->session->set_flashdata('msg_error', 'Tidak bisa hapus pesan');
        }
        redirect('ijazah');
    }



}