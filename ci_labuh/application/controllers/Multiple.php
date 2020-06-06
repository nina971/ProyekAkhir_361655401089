<?php
class Multiple extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
    }
    
    function index(){
        $this->load->view('form');
    }

    function multiple_upload(){
         $config['upload_path'] = './assets/images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->load->library('upload',$config);
        for ($i=1; $i <=5 ; $i++) { 
            if(!empty($_FILES['filefoto'.$i]['name'])){
                if(!$this->upload->do_upload('filefoto'.$i))
                    $this->upload->display_errors();  
                else
                    echo "Foto berhasil di upload";
            }
        }
    }
}