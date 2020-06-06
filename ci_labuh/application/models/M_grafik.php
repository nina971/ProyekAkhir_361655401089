<?php
class M_grafik extends CI_Model{
 
    function get_data_laporan(){

    	$query = $this->db->query('SELECT kapal.id as no, SUM(laporan.jumlah_pelaporan) as jumlah_pelaporan , kapal.nama_kapal FROM laporan  INNER JOIN kapal ON kapal.id = laporan.id_kapal
                 GROUP BY id_kapal
				');
			return $query->result();
    	//$query="SELECT kapal.id_kapal as no, SUM(laporan.jumlah_pelaporan) as jumlah_pelaporan , kapal.nama_kapal FROM laporan  INNER JOIN kapal ON kapal.id_kapal = laporan.id_kapal";
        //$query = $this->db->query("SELECT kapal.id_kapal ,SUM(laporan.jumlah_pelaporan) AS jumlah_pelaporan FROM laporan GROUP BY nama_kapal");
          
        //if($query->num_rows() == TRUE){
            //return $query->result();
                
    }
 
}