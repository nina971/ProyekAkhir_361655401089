<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abk extends CI_Controller {

   public function __construct(){
        parent::__construct();
        $this->load->model("Petugas_Model");
    }
    public function index()
    {
       

        $data["petugas"] = $this->Petugas_Model->getTable();


        $this->load->view("koplaporan.php", $data);  

    }

}