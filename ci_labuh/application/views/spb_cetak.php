<!DOCTYPE html>
<html>
<head>
	<title>Laporan Kapal Tiba Berangkat</title>

	<style>
    table {
      border-collapse:collapse;
      table-layout:fixed;width: 630px;
    }
    table td {
      word-wrap:break-word;
      width: 20%;
    }
     h1{font-family: Arial; color: darkseagreen;}
     h2{font-family: Arial; color: darkgoldenrod;}
  </style>

</head>

<?php if(isset($cetak_spb)) {
          
                    foreach ($cetak_spb as $value) {
                        

                    }
                } ?>

		<body>
			 <table width="100%" align="center">
			 	<tr>
			 		<!-- <td width="25"  align="center"><img src="<?php echo base_url('assets');?>/images/Logo_Pelabuhan_Ketapang.png" width="60%"></td> -->
			 		<!-- <td width="50" align="center">
                    <?php if(isset($cetak_tiba)) {
                    foreach ($cetak_tiba as $value) { 

                    }
                } ?>
              <h1 align="center" ><?php echo $value->nama_agen?></h1></td> -->
                <td width="25" align="left"><img src="<?php echo base_url('assets');?>/images/'Dharma_Jala_Prajatama'.jpg" width="100%"></td> 
			 	</tr>
			 </table>
<h1 align="center" ><?php echo $value->nama_agen?></h1>
<br><h2><u>FORM Permohonan SPB</u></h2>
			<table align="center">
				<tbody>
					<tr>
                        
                        <td>Nama Nahkoda : <?php echo $value->nama_nahkoda ?></td>
                        <td>Nama Kapal : <?php echo $value->nama_kapal ?></td>
                        <td>Tanggal: <?php echo $value->tempat_permohonan ?></td>
                        <td>Jam Tiba : <?php echo $value->tanggal_permohonan ?></td>
                      
                </tr>
                <tr>
                     <td>Waktu Permohonan: <?php echo $value->waktu_permohonan ?></td>
                     <td>Jumlah Awak : <?php echo $value->jumlah_awak ?></td>
                     <td>Jumlah Muatan : <?php echo $value->jumlah_muatan?></td>
                     <td>Pelabuhan Tujuan :<?php echo $value->pelabuhan_tujuan?></td>
                </tr>
                
				</tbody>
			</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
 <table align="right">
  <tr>

<td align="right"><img src="<?php echo base_url('assets');?>/images/code.png"  width="100px" height="100px">
<br>
<?php echo $this->session->userdata('first_name'); ?><?php echo $this->session->userdata('last_name'); ?>
</td>
</tr>
<tr>
  <td align="right"></td>
</tr>
</table> 
		</body>
</html>