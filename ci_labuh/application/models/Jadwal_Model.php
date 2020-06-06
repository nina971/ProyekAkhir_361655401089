<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_Model extends CI_Model {



   
    function get_jadwal_all($limit, $start){
       $this->db->select('jadwal_keberangkatan.*,  kapal.nama_kapal');
        $this->db->from('jadwal_keberangkatan');
        $this->db->join('kapal', 'kapal.id = jadwal_keberangkatan.id_kapal');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }

    public function total_record_jadwal()
    {
        return $this->db->count_all('jadwal_keberangkatan','kapal');
    }


    public function insert($data){
        return $this->db->insert('jadwal_keberangkatan', $data);
    }

    public function get($id){
        return $this->db->where('id', $id)->get('jadwal_keberangkatan')->row();
    }

    public function  update($data, $id){
        return $this->db->where('id', $id)->update('jadwal_keberangkatan', $data);
    }

    public function delete($id){
        return $this->db->where('id', $id)->delete('jadwal_keberangkatan');
    }
   

}

