<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurumudi_model extends CI_Model {



   
    public function get_by_id($key=null, $value = null)
    {
        return $this->db->get_where('jurumud',array($key => $value))->row();
    }
   

}

