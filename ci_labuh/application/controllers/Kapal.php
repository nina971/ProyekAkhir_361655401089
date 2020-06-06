<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kapal extends CI_Controller {

  function __construct(){     parent::__construct(); 
    $this->load->model('kapal_model'); 
    $this->load->helper(array('url'));
  } 

  function index(){ 
    

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['kapal'] = $this->kapal_model->get_kapal();           

       
        //load view mahasiswa view
        $this->load->view('kapal_view',$data);

  } 
  function add_new(){ 
    $this->load->view('add_kapal_view'); 
  }
  function save(){ 
    $nama_kapal = $this->input->post('nama_kapal'); 
    $kebangsaan = $this->input->post('kebangsaan');
    $imo = $this->input->post('imo');
    $grosstons = $this->input->post('grosstons');
    $tanda_panggilan = $this->input->post('tanda_panggilan');
    $jumlah_abk = $this->input->post('jumlah_abk');
    $panjang = $this->input->post('panjang');
    $lebar = $this->input->post('lebar');
    $jenis_kapal = $this->input->post('jenis_kapal');
    $tahun_pembuatan = $this->input->post('tahun_pembuatan');
    $nama_agen = $this->input->post('nama_agen');
    $status = $this->input->post('status');
    
    $data = [
                  'nama_kapal'  => $nama_kapal,
                  'kebangsaan'  => $kebangsaan, 
                  'imo'  => $imo, 
                  'grosstons'  => $grosstons, 
                  'tanda_panggilan'  => $tanda_panggilan, 
                  'jumlah_abk'  => $jumlah_abk, 
                  'panjang'  => $panjang, 
                  'lebar'  => $lebar, 
                  'jenis_kapal'  => $jenis_kapal, 
                  'tahun_pembuatan'  => $tahun_pembuatan, 
                  'nama_agen'  => $nama_agen,  
                  'status'  => $status 
        ];

        $save = $this->kapal_model->insert($data);

                                   
    redirect('kapal'); 
  }
  

  public function edit($id){
        
        $this->load->model('Kapal_model');

        
        $data['kapal'] = $this->Kapal_model->get($id);
        $this->load->view('edit_kapal_view', $data);
    }

    public function update(){

    $this->load->model('kapal_model');

    $id = $this->input->post('id'); 
    $nama_kapal = $this->input->post('nama_kapal'); 
    $kebangsaan = $this->input->post('kebangsaan');
    $imo = $this->input->post('imo');
    $grosstons = $this->input->post('grosstons');
    $tanda_panggilan = $this->input->post('tanda_panggilan');
    $jumlah_abk = $this->input->post('jumlah_abk');
    $panjang = $this->input->post('panjang');
    $lebar = $this->input->post('lebar');
    $jenis_kapal = $this->input->post('jenis_kapal');
    $tahun_pembuatan = $this->input->post('tahun_pembuatan');
    $nama_agen = $this->input->post('nama_agen');
    $status = $this->input->post('status');


        $data = [
                  
                  'nama_kapal'  => $nama_kapal,
                  'kebangsaan'  => $kebangsaan, 
                  'imo'  => $imo, 
                  'grosstons'  => $grosstons, 
                  'tanda_panggilan'  => $tanda_panggilan, 
                  'jumlah_abk'  => $jumlah_abk, 
                  'panjang'  => $panjang, 
                  'lebar'  => $lebar, 
                  'jenis_kapal'  => $jenis_kapal, 
                  'tahun_pembuatan'  => $tahun_pembuatan, 
                  'nama_agen'  => $nama_agen,  
                  'status'  => $status 
        ];

        $save = $this->kapal_model->update($data, $id);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah diubah!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('kapal');
    }

    public function delete($id){
        $this->load->model('kapal_model');

        $delete = $this->kapal_model->delete($id);

        
        redirect('kapal');
    }


  

function get_profil($id){ 
  $this->load->model('kapal_model');
  $detail = $this->kapal_model->get_kapal_id($id);
  $data['detail']= $detail;
  $this->load->view('kapal_profil',$data);
  }
  


    

}