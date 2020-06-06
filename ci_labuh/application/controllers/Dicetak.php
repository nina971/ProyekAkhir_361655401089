<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dicetak extends CI_Controller {
	 
	public function __construct(){
        parent::__construct();
        $this->load->model("Petugas_Model");
    }
	
	public function index()
	{
		$data["petugas"] = $this->Petugas_Model->getTable();
		$this->load->view('baru2' ,$data);
	}

	public function cetak(){
    ob_start();
    $data['petugas'] = $this->Petugas_Model->getTable();
    $this->load->view('baru1', $data);
    $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('Data Jurumudi.dicetak/pdf', 'D');
  }

  

	
}
