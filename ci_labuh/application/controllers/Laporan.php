<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('LaporanModel');
	}

	public function index(){
       
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user

            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tgl = $_GET['tanggal'];

                $ket = 'Data Transaksi Tanggal '.date('d-m-y', strtotime($tgl));
                $url_cetak = 'laporan/cetak?filter=1&tanggal='.$tgl;
                $transaksi = $this->LaporanModel->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di TransaksiModel
            }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');

                $ket = 'Data Transaksi Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $url_cetak = 'laporan/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $transaksi = $this->LaporanModel->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            }else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];

                $ket = 'Data Transaksi Tahun '.$tahun;
                $url_cetak = 'laporan/cetak?filter=3&tahun='.$tahun;
                $transaksi = $this->LaporanModel->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
        }else{ // Jika user tidak mengklik tombol tampilkan
            $ket = 'Semua Data Pelaporan';
            $url_cetak = 'laporan/cetak';
            $transaksi = $this->LaporanModel->view_all();
             // Panggil fungsi view_all yang ada di TransaksiModel
            $data['pagination'] = $this->pagination->create_links();

        }

		$data['ket'] = $ket;
		$data['url_cetak'] = base_url('index.php/'.$url_cetak);
		$data['laporan'] = $transaksi;
        $data['option_tahun'] = $this->LaporanModel->option_tahun();
        //$data["laporan"] = $this->LaporanModel->getTable();
		$this->load->view('view', $data);
       // $this->load->view('v_grafik', $data);
	}

     public function create(){
        $this->load->model('kapal');

        $data['kapal'] = $this->kapal->getStat();

        $this->load->view('data/laporan_buat', $data);
    }

    public function save(){
        $this->load->model('LaporanModel');
        $kapal = $this->input->post('kapal');
        $tgl = $this->input->post('tgl');
        $jumlah_pelaporan = $this->input->post('jumlah_pelaporan');
        $form = $this->input->post('form');
       



        $data = [
            'id_kapal' => $kapal,
            'tgl' => $tgl,
            'jumlah_pelaporan' => $jumlah_pelaporan,
            'form' => $form,
           
        ];

        $save = $this->LaporanModel->insert($data);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah tersimpan!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('laporan');
    }

    public function edit($id=NULL){
        
        $this->load->model('kapal');
        $this->load->model('LaporanModel');

        
        $data['kapal'] = $this->kapal->getStat();

        $data['laporan'] = $this->LaporanModel->get($id);
        $this->load->view('data/laporan_ubah', $data);
    }

    public function update(){
        $this->load->model('LaporanModel');
        $id = $this->input->post('id');
        $kapal = $this->input->post('kapal');
        $tgl = $this->input->post('tgl');
        $jumlah_pelaporan = $this->input->post('jumlah_pelaporan');
        $form = $this->input->post('form');
       



        $data = [
            'id_kapal' => $kapal,
            'tgl' => $tgl,
            'jumlah_pelaporan' => $jumlah_pelaporan,
            'form' => $form
           
        ];


        $save = $this->LaporanModel->update($data, $id);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah diubah!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('laporan');
    }
    public function delete($id){
        $this->load->model('LaporanModel');

        $delete = $this->LaporanModel->delete($id);

        if ($delete) {
            $this->session->set_flashdata('msg_success', 'Data yang anda pilih telah terhapus');
        } else {
            $this->session->set_flashdata('msg_error', 'Tidak bisa hapus pesan');
        }
        redirect('laporan');
    }

	
}
