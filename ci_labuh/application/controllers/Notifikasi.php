<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends CI_Controller {

   public function __construct(){
        parent::__construct();
        $this->load->model("Notifikasi_model");
    }

    

    public function add_pesan()
    {
        $this->load->model('d_jurumudi');
        $data['jurumudi'] = $this->d_jurumudi->getStat();
        $this->load->view('data',$data);
    }

    public function do_send(){
      $this->load->model('Notifikasi_model');
      $this->load->model('d_jurumudi');
       $pesan = $this->input->post('pesan');
       $jurumudi = $this->input->post('jurumudi');

       $kirim = array(
       'id_pesan' => $id_pesan,
       'pesan' => $pesan,
       'id_jurumudi'=>$jurumudi
       //'id_jurumudi' => $id_jurumudi,
       );


        $save = $this->Notifikasi_model->insert($kirim);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah tersimpan!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('notifikasi');
    }



}