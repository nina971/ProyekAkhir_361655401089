<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kapal_model extends CI_Model {

  function get_kapal(){ 
        $this->db->select('kapal.*, ');
        $this->db->from('kapal');
        $query = $this->db->get();
        return $query->result();
    } 

     public function insert($data){
        return $this->db->insert('kapal', $data);
    }

    public function get($id){
        return $this->db->where('id', $id)->get('kapal')->row();
    }
    
public function  update($data, $id){
        return $this->db->where('id', $id)->update('kapal', $data);
    }

    function delete($id){ 
  $this->db->where('id', $id); 
  $this->db->delete('kapal');
  }
  function get_kapal_id($id){ 
    $query = $this->db->get_where('kapal', array('id' => $id))->row();   
    return $query; 
  }
 
 
}