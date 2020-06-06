<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

   public function __construct(){
        parent::__construct();
        $this->load->model("Jadwal_Model");
    }
    public function index($offset = NULL)
    {

         $limit = 3;
        if (!is_null($offset)) {
           $offset = $this->uri->segment(3);
        }
        $this->load->library('pagination');
        $config['uri_segement'] = 3;
        $config['base_url'] = site_url('jadwal/index');
        $config['total_rows'] = $this->Jadwal_Model->total_record_jadwal();
        $config['per_page'] = $limit;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_links'] = 'First';
        $config['last_links'] = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['jadwal_keberangkatan'] = $this->Jadwal_Model->get_jadwal_all($limit,$offset);

        $data['pagination'] = $this->pagination->create_links();
        $this->load->view("jadwal_view.php", $data);    
    }

    public function create(){
        $this->load->model('kapal');

        $data['kapal'] = $this->kapal->getStat();

        $this->load->view('data/jadwal_create', $data);
    }

    public function save(){
        $this->load->model('jadwal_model');
        $kapal = $this->input->post('kapal');
        $tanggal = $this->input->post('tanggal');
        $trip_ke = $this->input->post('trip_ke');
        $jam_tiba = $this->input->post('jam_tiba');
        $jam_berangkat = $this->input->post('jam_berangkat');
        $status = $this->input->post('status');
        $keterangan = $this->input->post('keterangan');

        /*
			<td> <?php echo $vals->id ?> </td>
                  <td> <?php echo $vals->nama_kapal ?> </td>
                  <td> <?php echo $vals->tanggal ?> </td>
                  <td> <?php echo $vals->trip_ke ?> </td>
                  <td> <?php echo $vals->jam_tiba ?> </td>
                  <td> <?php echo $vals->jam_berangkat ?> </td>
                  <td> <?php echo $vals->status ?> </td>
                  <td> <?php echo $vals->keterangan ?> </td>

        */

        $data = [
            'id_kapal' => $kapal,
            'tanggal' => $tanggal,
            'trip_ke' => $trip_ke,
            'jam_tiba' => $jam_tiba,
            'jam_berangkat' => $jam_berangkat,
            'status' => $status,
            'keterangan' => $keterangan

        ];

        $save = $this->jadwal_model->insert($data);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah tersimpan!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('jadwal');
    }

    public function edit($id=NULL){
        
        $this->load->model('kapal');
        $this->load->model('jadwal_model');

        
        $data['kapal'] = $this->kapal->getStat();

        $data['jadwal_keberangkatan'] = $this->jadwal_model->get($id);
        $this->load->view('data/jadwal_edit', $data);
    }

    public function update(){
        $this->load->model('jadwal_model');
        $id = $this->input->post('id');
        $kapal = $this->input->post('kapal');
        $tanggal = $this->input->post('tanggal');
        $trip_ke = $this->input->post('trip_ke');
        $jam_tiba = $this->input->post('jam_tiba');
        $jam_berangkat = $this->input->post('jam_berangkat');
        $status = $this->input->post('status');
        $keterangan = $this->input->post('keterangan');


        $data = [
             'id_kapal' => $kapal,
            'tanggal' => $tanggal,
            'trip_ke' => $trip_ke,
            'jam_tiba' => $jam_tiba,
            'jam_berangkat' => $jam_berangkat,
            'status' => $status,
            'keterangan' => $keterangan
        ];

        $save = $this->jadwal_model->update($data, $id);

        if($save) {
            $this->session->set_flashdata('msg_success', 'Data telah diubah!');
        } else {
            $this->session->set_flashdata('msg_error', 'Data gagal disimpan, silakan isi ulang!');
        }
        redirect('jadwal');
    }
    public function delete($id){
        $this->load->model('jadwal_model');

        $delete = $this->jadwal_model->delete($id);

        if ($delete) {
            $this->session->set_flashdata('msg_success', 'Data yang anda pilih telah terhapus');
        } else {
            $this->session->set_flashdata('msg_error', 'Tidak bisa hapus pesan');
        }
        redirect('jadwal');
    }
}
