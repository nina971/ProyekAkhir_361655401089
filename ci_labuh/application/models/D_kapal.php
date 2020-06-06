<?php 

class D_Kapal extends CI_Model {
    public function getStat($id){
    	$this->db->where('id', $id);
    	$data = $this->db->get('kapal')->result();
        return $data;
    
    }
}