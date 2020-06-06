<?php
class Upload_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	

    public function getAllFiles(){
		$this->db->select('upload_dokumen.*, kapal.nama_kapal, nahkoda.nama_nahkoda');
        $this->db->from('upload_dokumen');
        $this->db->join('kapal', 'kapal.id = upload_dokumen.id_kapal');
        $this->db->join('nahkoda', 'nahkoda.id = upload_dokumen.id_nahkoda');
        $query = $this->db->get();
        return $query->result();


    	 // $this->db->select('unduh.*, jurumudi.nama');
      //   $this->db->from('unduh');
      //   $this->db->join('jurumudi', 'jurumudi.id_jurumudi = unduh.id');
      //   // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = periksa_pemenuhan_kewajiban_kapal.id_jurumudi');
      //   //$this->db->join('kapal', 'kapal.id = jurumudi.id_kapal');
      //   $this->db->where('id', $id);
      //   $query = $this->db->get()->result();
      //   return $query;
	}

  public function getAll(){
		$this->db->select('unduh.*, jurumudi.nik,jurumudi.nama');
        $this->db->from('unduh');
        //$this->db->join('kapal', 'kapal.id = upload_dokumen.id_kapal');
        $this->db->join('jurumudi', 'jurumudi.id_jurumudi = unduh.id_jurumudi');
        $query = $this->db->get();
        return $query->result();
        

    	 // $this->db->select('unduh.*, jurumudi.nama');
      //   $this->db->from('unduh');
      //   $this->db->join('jurumudi', 'jurumudi.id_jurumudi = unduh.id');
      //   // $this->db->join('jurumudi', 'jurumudi.id_jurumudi = periksa_pemenuhan_kewajiban_kapal.id_jurumudi');
      //   //$this->db->join('kapal', 'kapal.id = jurumudi.id_kapal');
      //   $this->db->where('id', $id);
      //   $query = $this->db->get()->result();
      //   return $query;
	}


	public function download($id){
		$query = $this->db->get_where('upload_dokumen',array('id_upload_dokumen'=>$id));
		return $query->row_array();
	}

  public function get($id_nahkoda){
    $query = $this->db->query('
      SELECT kapal.nama_kapal as kapal, 
      nahkoda.nama_nahkoda as nahkoda,nama_dokumen, diterbitkan_pada, diterbitkan_oleh, masa_berlaku 
      FROM upload_dokumen,kapal,nahkoda 
      where upload_dokumen.id_kapal = kapal.id 
      AND upload_dokumen.id_nahkoda = nahkoda.id 
      AND nahkoda.id = "'.$id_nahkoda.'"
        ');
      return $query->result();
  }
	
}
?>