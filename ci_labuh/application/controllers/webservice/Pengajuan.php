<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Pengajuan extends REST_Controller {

	function __construct($config = 'rest')
	{
		parent::__construct($config);
		$this->load->database();
		$this->load->model('Pengajuanmodel');
	}


public function index_post(){
        $row = $this->input->post('nama_kapal');
        $tempat_permohonan = $this->input->post('tempat_permohonan');
        $nama_nahkoda = $this->input->post('nama_nahkoda');
        $jumlah_awak = $this->input->post('jumlah_awak');
        $jumlah_muatan = $this->input->post('jumlah_muatan');
        $jumlah_penumpang = $this->input->post('jumlah_penumpang');
        $tanggal_atau_jam_selesai_kegiatan = $this->input->post('tanggal_atau_jam_selesai_kegiatan');
        $tanggal_atau_jam_tolak = $this->input->post('tanggal_atau_jam_tolak');
        $pelabuhan_tujuan = $this->input->post('pelabuhan_tujuan');
        $surat_pernyataan_nahkoda = $this->input->post('surat_pernyataan_nahkoda');
        $dokumen_muatan_atau_penumpang = $this->input->post('dokumen_muatan_atau_penumpang');
        $daftar_awak_kapal = $this->input->post('daftar_awak_kapal');
        $bukti_pelunasan_pembayaran_pnbp = $this->input->post('bukti_pelunasan_pembayaran_pnbp');

		$id_kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$row.'"')->result();
        foreach ($id_kapal as $key => $row) {              
        }

		$data1 = array(
			'id_kapal' => (int)$row->id,
            'tempat_permohonan' => $tempat_permohonan,
            'nama_nahkoda' => $nama_nahkoda,
            'jumlah_awak' => $jumlah_awak,
            'jumlah_muatan' => $jumlah_muatan,
            'jumlah_penumpang' => $jumlah_penumpang,
            'tanggal_atau_jam_selesai_kegiatan' => $tanggal_atau_jam_selesai_kegiatan,
            'tanggal_atau_jam_tolak' => $tanggal_atau_jam_tolak,
            'pelabuhan_tujuan' => $pelabuhan_tujuan,
            'surat_pernyataan_nahkoda' => $surat_pernyataan_nahkoda,
            'dokumen_muatan_atau_penumpang' => $dokumen_muatan_atau_penumpang,
            'daftar_awak_kapal' => $daftar_awak_kapal,
            'bukti_pelunasan_pembayaran_pnbp' => $bukti_pelunasan_pembayaran_pnbp
 
		);
		
		$id_permohonan_spb = $this->Pengajuanmodel->createspb('permohonan_spb',$data1);	

		$kapaltiba = $this->post('nama_kapal');
        $tanggal_tiba_berangkat = $this->post('tanggal_tiba_berangkat');
        $trip_ke = $this->post('trip_ke');
        $nama_nahkoda = $this->post('nama_nahkoda');
        $jumlah_abk = $this->post('jumlah_abk');
        $jumlah_perwira_kapal = $this->post('jumlah_perwira_kapal');
        $draft_kapal_tiba_atau_tolak = $this->post('draft_kapal_tiba_atau_tolak');
        $truck_besar = $this->post('truck_besar');
        $truck_sedang = $this->post('truck_sedang');
        $truck_trailer = $this->post('truck_trailer');
        $bus_besar = $this->post('bus_besar');
        $bus_mini = $this->post('bus_mini');
        $kendaraan_keluarga = $this->post('kendaraan_keluarga');
        $sepeda_motor = $this->post('sepeda_motor');
        $barang = $this->post('barang');
        $penumpang = $this->post('penumpang');
        $hewan = $this->post('hewan');
        $labuh_sandar = $this->post('labuh_sandar');

        $kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapaltiba.'"')->result();
        foreach ($kapal as $key => $kapaltiba) {              
        } 



        $data2 = array(
            'tanggal_tiba_berangkat' => $tanggal_tiba_berangkat,
            'trip_ke' => $trip_ke,
             'id_kapal'      => (int)$kapaltiba->id,
            'nama_nahkoda' => $nama_nahkoda,
            'jumlah_abk' => $jumlah_abk,
            'jumlah_perwira_kapal' => $jumlah_perwira_kapal,
            'draft_kapal_tiba_atau_tolak' => $draft_kapal_tiba_atau_tolak,
            'truck_besar' => $truck_besar,
            'truck_sedang' => $truck_sedang,
            'truck_trailer' => $truck_trailer,
            'bus_besar' => $bus_besar,
            'bus_mini' => $bus_mini,
            'kendaraan_keluarga' => $kendaraan_keluarga,
            'sepeda_motor' => $sepeda_motor,
            'barang' => $barang,
            'penumpang' => $penumpang,
            'hewan' => $hewan,
            'labuh_sandar' => $labuh_sandar
        );

       $id_tiba_berangkat = $this->Pengajuanmodel->createtiba('laporan_kapal_tiba_berangkat',$data2);

       //pernyataan nahkoda

        $kapaln = $this->post('nama_kapal');
        $nama_nahkoda = $this->post('nama_nahkoda');
        $draft_kapal_tolak = $this->post('draft_kapal_tolak');
        $jumlah_muatan = $this->post('jumlah_muatan');
        $jumlah_penumpang = $this->post('jumlah_penumpang');
        $stabilitas_kapal_tolak = $this->post('stabilitas_kapal_tolak');
        $jumlah_perwira_dek = $this->post('jumlah_perwira_dek');
        $jumlah_perwira_mesin = $this->post('jumlah_perwira_mesin');
        $jumlah_abk = $this->post('jumlah_abk');
        $jumlah_abk_lainnya = $this->post('jumlah_abk_lainnya');
        $jumlah_alat_navigasi = $this->post('jumlah_alat_navigasi');
        $jumlah_alat_penolong = $this->post('jumlah_alat_penolong');
        $jumlah_alat_pemadam_kebakaran = $this->post('jumlah_alat_pemadam_kebakaran');
        $jumlah_pencegahan_pencemaran = $this->post('jumlah_pencegahan_pencemaran');

        $id_kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapaln.'"')->result();
        foreach ($id_kapal as $key => $nahkoda) {              
        } 

        $data3 = [
            'id_kapal' => (int)$nahkoda->id,
            'nama_nahkoda' => $nama_nahkoda,
            'draft_kapal_tolak' => $draft_kapal_tolak,
            'jumlah_muatan' => $jumlah_muatan,
            'jumlah_penumpang' => $jumlah_penumpang,
            'stabilitas_kapal_tolak' => $stabilitas_kapal_tolak,
            'jumlah_perwira_dek' => $jumlah_perwira_dek,
            'jumlah_perwira_mesin' => $jumlah_perwira_mesin,
            'jumlah_abk' => $jumlah_abk,
            'jumlah_abk_lainnya' => $jumlah_abk_lainnya,
            'jumlah_alat_navigasi' => $jumlah_alat_navigasi,
            'jumlah_alat_penolong' => $jumlah_alat_penolong,
            'jumlah_alat_pemadam_kebakaran' => $jumlah_alat_pemadam_kebakaran,
            'jumlah_pencegahan_pencemaran' => $jumlah_pencegahan_pencemaran

           
            
        ];

        $id_pernyataan_nahkoda = $this->Pengajuanmodel->createnahkoda('pernyataan_nahkoda',$data3);

        //pengikatan

        $kapal          = $this->post('nama_kapal');
        $nama_nahkoda   = $this->post('nama_nahkoda');
        $truck_sedang   = $this->post('truck_sedang');
        $truck_besar    = $this->post('truck_besar');
        $truck_trailer  = $this->post('truck_trailer');
        $bus_besar      = $this->post('bus_besar');
        $bus_mini       = $this->post('bus_mini');
        $jumlah         = $this->post('jumlah');

        $kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
        foreach ($kapal as $key => $pengikatan) {              
        } 
           
        $data4 = array(
            'id_kapal'      => (int)$pengikatan->id,
            'nama_nahkoda'  => $nama_nahkoda,
            'truck_sedang'  => $truck_sedang,
            'truck_besar'   => $truck_besar,
            'truck_trailer' => $truck_trailer,
            'bus_besar'     => $bus_besar,
            'bus_mini'      => $bus_mini,
            'jumlah'        => $jumlah
            
            );
        $id_pengikatan = $this->Pengajuanmodel->createpengikatan('pernyataan_pengikatan',$data4);

        //periksa dokumen

	        $kapal = $this->input->post('nama_kapal');
	        $nama_nahkoda = $this->input->post('nama_nahkoda');
	        $jumlah_abk = $this->input->post('jumlah_abk');
	        $surat_ukur = $this->input->post('surat_ukur');
	        $diterbitkan_oleh =  $this->input->post('diterbitkan_oleh_1');
	       $pada_tanggal = $this->input->post('pada_tanggal_1');
	        $masa_berlaku= $this->input->post('masa_berlaku_1');
	        $surat_laut= $this->input->post('surat_laut');
	        $diterbitkan_oleh_2= $this->input->post('diterbitkan_oleh_2');
	        $pada_tanggal_2= $this->input->post('pada_tanggal_2');
	        $masa_berlaku_2= $this->input->post('masa_berlaku_2');
	        $sertifikat_keselamatan_radio= $this->input->post('sertifikat_keselamatan_radio');
	        $diterbitkan_oleh_3= $this->input->post('diterbitkan_oleh_3');
	        $pada_tanggal_3= $this->input->post('pada_tanggal_3');
	        $masa_berlaku_3= $this->input->post('masa_berlaku_3');
	        $sertifikat_keselamatan_penumpang= $this->input->post('sertifikat_keselamatan_penumpang');
	        $diterbitkan_oleh_4= $this->input->post('diterbitkan_oleh_4');
	        $pada_tanggal_4= $this->input->post('pada_tanggal_4');
	        $masa_berlaku_4= $this->input->post('masa_berlaku_4');
	        $sertifikat_garis_muat= $this->input->post('sertifikat_garis_muat');
	        $diterbitkan_oleh_5= $this->input->post('diterbitkan_oleh_5');
	        $pada_tanggal_5= $this->input->post('pada_tanggal_5');
	        $masa_berlaku_5= $this->input->post('masa_berlaku_5');
	        $sertifikat_pengawakan_dan_keselamatan= $this->input->post('sertifikat_pengawakan_dan_keselamatan');
	        $diterbitkan_oleh_6= $this->input->post('diterbitkan_oleh_6');
	        $pada_tanggal_6= $this->input->post('pada_tanggal_6');
	        $masa_berlaku_6= $this->input->post('masa_berlaku_6');

                 $kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
        foreach ($kapal as $key => $dokumen) {              
        } 


        $data5 = array(
            'id_kapal' => (int)$dokumen->id,
            'nama_nahkoda' => $nama_nahkoda,
            'jumlah_abk' => $jumlah_abk,
            'surat_ukur' => $surat_ukur,
            '1_diterbitkan_oleh' => $diterbitkan_oleh,
            '1_pada_tanggal' => $pada_tanggal,
             '1_masa_berlaku' => $masa_berlaku,
            'surat_laut' => $surat_laut,
            '2_diterbitkan_oleh' => $diterbitkan_oleh_2,
            '2_pada_tanggal' => $pada_tanggal_2,
            '2_masa_berlaku' => $masa_berlaku_2,
            'sertifikat_keselamatan_radio' => $sertifikat_keselamatan_radio,
            '3_diterbitkan_oleh' => $diterbitkan_oleh_3,
            '3_pada_tanggal' => $pada_tanggal_3,
            '3_masa_berlaku' => $masa_berlaku_3,
            'sertifikat_keselamatan_penumpang' => $sertifikat_keselamatan_penumpang,
            '4_diterbitkan_oleh' => $diterbitkan_oleh_4,
            '4_pada_tanggal' => $pada_tanggal_4,
            '4_masa_berlaku' => $masa_berlaku_4,
            'sertifikat_garis_muat' => $sertifikat_garis_muat,
            '5_diterbitkan_oleh' => $diterbitkan_oleh_5,
            '5_pada_tanggal' => $pada_tanggal_5,
            '5_masa_berlaku' => $masa_berlaku_5,
            'sertifikat_pengawakan_dan_keselamatan' => $sertifikat_pengawakan_dan_keselamatan,
            '6_diterbitkan_oleh' => $diterbitkan_oleh_6,
            '6_pada_tanggal' => $pada_tanggal_6,
            '6_masa_berlaku' => $masa_berlaku_6
            
        );

        $id_periksa_dokumen = $this->Pengajuanmodel->createdokumen('periksa_dokumen_kapal',$data5);

        //kewajiban kapal

        $kapal = $this->post('nama_kapal');
        $nama_nahkoda = $this->post('nama_nahkoda');
        $jasa_labuh = $this->post('jasa_labuh');
        $jasa_tambat = $this->post('jasa_tambat');
        $jasa_kenavigasian = $this->post('jasa_kenavigasian');
        $jasa_perkapalan = $this->post('jasa_perkapalan');
        $jasa_kebersihan_kapal = $this->post('jasa_kebersihan_kapal');

         $kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
        foreach ($kapal as $key => $kewajiban) {              
        } 

        $data6 = array(
            'id_kapal' => (int)$kewajiban->id,
            'nama_nahkoda' => $nama_nahkoda,
            'jasa_labuh' => $jasa_labuh,
            'jasa_tambat' => $jasa_tambat,
            'jasa_kenavigasian' => $jasa_kenavigasian,
            'jasa_perkapalan' => $jasa_perkapalan,
            'jasa_kebersihan_kapal' => $jasa_kebersihan_kapal
           
            
        );

        $id_pemenuhan_kewajiban = $this->Pengajuanmodel->createkewajiban('periksa_pemenuhan_kewajiban_kapal',$data6);

        //manifest
        $kapal = $this->post('nama_kapal');
        $nama_penumpang = $this->post('nama_penumpang');
        $alamat = $this->post('alamat');
        $tanggal = $this->post('tanggal');
        $umur = $this->post('umur');
        $jenis_kelamin = $this->post('jenis_kelamin');

        $kapal = $this->db->query('SELECT id from kapal where nama_kapal = "'.$kapal.'"')->result();
        foreach ($kapal as $key => $manifest) {              
        } 


        $data7 = array(
            
            'id_kapal' => (int)$manifest->id,
            'nama_penumpang' => $nama_penumpang,
            'alamat' => $alamat,
            'tanggal' => $tanggal,
            'umur' => $umur,
            'jenis_kelamin' => $jenis_kelamin
           
        );
        $id_manifest = $this->Pengajuanmodel->createmanifest('manifest_penumpang',$data7);

         




$data = array(
			
			
			'id_permohonan_spb'=>$id_permohonan_spb,
			'id_tiba_berangkat'=>$id_tiba_berangkat,
			'id_pernyataan_nahkoda'=> $id_pernyataan_nahkoda,
			'id_pengikatan'=>$id_pengikatan,
			'id_periksa_dokumen'=>$id_periksa_dokumen,
			'id_pemenuhan_kewajiban'=>$id_pemenuhan_kewajiban,
			'id_manifest'=>$id_manifest
			 //id last
		);
		$insert = $this->Pengajuanmodel->create('kelola_laporan',$data);
        $this->response(array('status' => 200, 'result' => $data));




    	}


}
?>		
  