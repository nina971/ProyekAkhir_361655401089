<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Spb extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Spb_model');
    

	}

	public function index()
	{
		

		$data['spb'] = $this->Spb_model->getTable();
        $this->load->view('spb', $data);
	}

	 public function get_profil($id){

        $data['spb_get'] = $this->Spb_model->get($id);
        $this->load->view('spb_profil', $data);
    }

    public function create(){
        $this->load->model('nahkoda');
        $this->load->model('kapal');

        $data['nahkoda'] = $this->nahkoda->getNahkoda();
        $data['kapal'] = $this->kapal->getStat();

        $this->load->view('spb_create', $data);
    }

  

    public function save(){
        $this->load->model('Spb_model');
        $no_registrasi = $this->input->post('no_registrasi');
        $no_spb = $this->input->post('no_spb');
        $no_surat = $this->input->post('no_surat');
        $tempat_permohonan = $this->input->post('tempat_permohonan');
        $tanggal_permohonan = $this->input->post('tanggal_permohonan');
        $jumlah_awak = $this->input->post('jumlah_awak');
        $waktu_permohonan = $this->input->post('waktu_permohonan');
        $pelabuhan_tujuan = $this->input->post('pelabuhan_tujuan');
        $jumlah_muatan = $this->input->post('jumlah_muatan');
        $kapal = $this->input->post('kapal');
        $nahkoda = $this->input->post('nahkoda');

        $data = [
			'id_kapal' => $kapal,
		    'id_nahkoda' => $nahkoda,
			'no_registrasi' => $no_registrasi,
			'no_surat' => $no_surat,
			'no_spb' => $no_spb,
			'tempat_permohonan' => $tempat_permohonan,
			'tanggal_permohonan' =>$tanggal_permohonan,
			'jumlah_awak' => $jumlah_awak,
			'waktu_permohonan' => $waktu_permohonan,
			'pelabuhan_tujuan' => $pelabuhan_tujuan,
		    'jumlah_muatan' => $jumlah_muatan
			// 'pelabuhan' =>$pelabuhan,
			// 'muatan'=>$muatan
        ];

        $save = $this->Spb_model->insert($data);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah tersimpan!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('spb');
    }

    public function edit($id){
        
        $this->load->model('nahkoda');
        $this->load->model('kapal');
        $this->load->model('Spb_model');

        $data['nahkoda'] = $this->nahkoda->getNahkoda();
        $data['kapal'] = $this->kapal->getStat();

        $data['spb'] = $this->Spb_model->get($id);
        $this->load->view('edit_spb', $data);
    }

    public function update(){
        $this->load->model('Spb_model');
        $id = $this->input->post('id_spb');
        $no_registrasi = $this->input->post('no_registrasi');
        $no_spb = $this->input->post('no_spb');
        $no_surat = $this->input->post('no_surat');
        //$bertolak = $this->input->post('bertolak');
        //$tanggal_tolak = $this->input->post('tanggal_tolak');
        // $jumlah_abk = $this->input->post('jumlah_abk');
        // $tempat_permohonan = $this->input->post('tempat_permohonan');
        // $tanggal = $this->input->post('tanggal');
        // $jam = $this->input->post('jam');
        // $pelabuhan_tujuan = $this->input->post('pelabuhan_tujuan');
        // $jumlah_muatan = $this->input->post('jumlah_muatan');
        // $kapal = $this->input->post('kapal');
        // $nahkoda = $this->input->post('nahkoda');

        $data = [
			// 'id_kapal' => $kapal,
			// 'id_nahkoda' => $nahkoda,
			'no_registrasi' => $no_registrasi,
			'no_surat' => $no_surat,
			'no_spb' => $no_spb
			// 'jumlah_abk' => $jumlah_abk,
			// 'tempat_permohonan' => $tempat_permohonan,
			// 'tanggal' => $tanggal,
			// 'jam' => $jam,
			// 'pelabuhan_tujuan' =>$pelabuhan_tujuan,
			// 'jumlah_muatan'=>$jumlah_muatan
        ];

        $update = $this->Spb_model->update($data, $id);

        if($update) {
            $this->session->set_flashdata('msg_success', 'Data telah diubah!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('spb');
    }
    public function delete($id){
        $this->load->model('Spb_model');

        $delete = $this->Spb_model->delete($id);

        if ($delete) {
            $this->session->set_flashdata('msg_success', 'Data yang anda pilih telah terhapus');
        } else {
            $this->session->set_flashdata('msg_error', 'Tidak bisa hapus pesan');
        }
        redirect('spb');
    }

    public function lihat($id){
        $data['spb_get'] = $this->Spb_model->get($id);
        $data_spb = '';
        foreach ($data['spb_get'] as $value) {
        $data_spb = $value->nama_nahkoda;
        }

        $tanggal_skrg = date("d-m-Y");

        //ob_start();
        $this->load->view('v_laporan', $data);
        // $html = ob_get_contents();
        // ob_end_clean();
        
        // require_once('./assets/html2pdf/html2pdf.class.php');
        // $pdf = new HTML2PDF('P','A5','en');
        // $pdf->WriteHTML($html);
        // $pdf->Output( $data_spb.'_'.$tanggal_skrg.'_'.'Surat Persetujuan Berlayar.pdf', 'D');
    }

	

 //    public function cetak($id){
       
        

	// 	ob_start();
 //        $data['spb_get'] = $this->Spb_model->get($id);
	// 	$this->load->view('print', $data);
	// 	$html = ob_get_contents();
 //        ob_end_clean();

 //        require_once('./assets/html2pdf/html2pdf.class.php');
	// 	$pdf = new HTML2PDF('P','F4','en');
	// 	$pdf->WriteHTML($html);
	// 	$pdf->Output('Surat Persetujuan Berlayar.pdf', 'D');

	// }

  // public function cetak(){
        
        
  //   ob_start();
  //   $this->load->view('print');
  //   $html = ob_get_contents();
  //       ob_end_clean();
        
  //       require_once('./assets/html2pdf/html2pdf.class.php');
  //   $pdf = new HTML2PDF('L','F4','en');
  //   $pdf->WriteHTML($html);
  //   $pdf->Output('Data Pelaporan.pdf', 'D');
  // }


}