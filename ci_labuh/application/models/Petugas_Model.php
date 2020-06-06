<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas_Model extends CI_Model {



    public function getTable(){
        $this->db->select('mjurumudi.*, kapal.nama_kapal,nahkoda.nama_nahkoda ');
        $this->db->from('mjurumudi');
        $this->db->join('kapal', 'kapal.id = mjurumudi.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = mjurumudi.id_nahkoda');
        $query = $this->db->get();
        return $query->result();
    }

    

    public function insert($data){
        return $this->db->insert('mjurumudi', $data);
    }

    public function get($id){
        return $this->db->where('id', $id)->get('mjurumudi')->row();
    }

    public function  update($data, $id){
        return $this->db->where('id', $id)->update('mjurumudi', $data);
    }

    public function delete($id){
        return $this->db->where('id', $id)->delete('mjurumudi');
    }
   

}

