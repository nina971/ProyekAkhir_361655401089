<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Muatan extends CI_Controller {
  
  public function __construct(){
    parent::__construct();
    
    $this->load->model('Muatan_model');
  }
  
  public function index(){
        $kapal = $this->input->post('kapal');
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tgl = $_GET['tanggal'];
                
                $ket = 'Data Muatan Tanggal '.date('d-m-y', strtotime($tgl));
                $url_cetak = 'muatan/cetak?filter=1&tahun='.$tgl;
                $transaksi = $this->Muatan_model->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di TransaksiModel
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Data Muatan Bulan '.$nama_bulan[$bulan].' '.$tahun;
                //$url_cetak = 'muatan/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $transaksi = $this->Muatan_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];
                
               // $ket = 'Data Muatan Tahun '.$tahun;
                $url_cetak = 'muatan/cetak?filter=3&tahun='.$tahun;
                $transaksi = $this->Muatan_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Muatan';
            //$url_cetak = 'muatan/cetak';
            $transaksi = $this->Muatan_model->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
        }
        
    $data['ket'] = $ket;
    //$data['url_cetak'] = base_url(.$url_cetak);
    $transaksi = '';
        if (isset($kapal)) {
            $transaksi = " AND LIKE (kapal.nama_kapal) = '$kapal'";
        }
    $data['hasil'] = $transaksi;
    $data['option_tahun'] = $this->Muatan_model->option_tahun();
    $this->load->view('coba', $data);
  }
  
  public function cetak(){

        
    ob_start();
    $this->load->view('print');
    $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('Data Muatan.pdf', 'D');
  }
}