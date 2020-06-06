<?php 

class M_Jurumudi extends CI_Model {
   public function getStat($id){
      $this->db->where('id', $id);
      $data = $this->db->get('jurumudi')->result();
        return $data;
    
    }
}