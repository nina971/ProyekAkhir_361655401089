<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abk_Kapal extends CI_Model {



    public function getTable(){
        $this->db->select('abk.*, ijazah.nama_ijazah, kapal.nama_kapal');
        $this->db->from('abk');
        $this->db->join('ijazah', 'ijazah.id = abk.id_ijazah');
        $this->db->join('kapal', 'kapal.id = abk.id_kapal');
        $query = $this->db->get();
        return $query->result();
    }

   

    public function insert($data){
        return $this->db->insert('abk', $data);
    }

    public function get($id){
        return $this->db->where('id', $id)->get('abk')->row();
    }

    public function  update($data, $id){
        return $this->db->where('id', $id)->update('abk', $data);
    }

    public function delete($id){
        return $this->db->where('id', $id)->delete('abk');
    }
   

}

