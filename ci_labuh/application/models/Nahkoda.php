<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nahkoda extends CI_Model {

	public function getNahkoda(){
        return $this->db->get('nahkoda')->result();
    }

}

/* End of file kapal.php */
/* Location: ./application/models/kapal.php */