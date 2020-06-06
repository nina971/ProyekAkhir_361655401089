<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kapal extends CI_Model {

	public function getStat(){
        return $this->db->get('kapal')->result();
    }

}

/* End of file kapal.php */
/* Location: ./application/models/kapal.php */