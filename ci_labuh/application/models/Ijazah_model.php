<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ijazah_model extends CI_Model {



    public function getTable(){
        $this->db->select('ijazah.*, ');
        $this->db->from('ijazah');
        //$this->db->join('abk', 'abk.id = ijazah.id_abk');
        $query = $this->db->get();
        return $query->result();
    }

    
    public function insert($data){
        return $this->db->insert('ijazah', $data);
    }

    public function get($id){
        return $this->db->where('id', $id)->get('ijazah')->row();
    }

    public function  update($data, $id){
        return $this->db->where('id', $id)->update('ijazah', $data);
    }

    public function delete($id){
        return $this->db->where('id', $id)->delete('ijazah');
    }
   

}

