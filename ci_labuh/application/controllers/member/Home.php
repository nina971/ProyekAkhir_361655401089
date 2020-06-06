<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        if ($this->session->userdata('id_role') != "2") {
            redirect('', 'refresh');

        }
        
        
    }

    public function index()

    {
        
         $site = $this->Konfigurasi_model->listing();
         $data = array(
            'title'     => 'Dashboard | '.$site['nama_website'],
            'favicon'   => $site['favicon'],
            'site'      => $site
        );
        //$data['grafik']=$this->M_grafik->get_data_laporan();
         
        $this->template->load('layout/template', 'member/dashboard', $data);
        


    }

    // public function get_abk()
    // {
    //     $data = $this->D_user->get_data()->result();
    //     $x['abk'] = json_encode( $data );
    //     $this->load->view('abk_kapal',$data);
    // }

  

}
