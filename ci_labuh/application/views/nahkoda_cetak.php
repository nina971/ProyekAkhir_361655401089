<!DOCTYPE html>
<html>
<head>
	<title>Pernyataan Nahkoda</title>

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

<?php if(isset($cetak_nahkoda)) {
          
                    foreach ($cetak_nahkoda as $value) {
                        

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
<br><h2 align="center"><u>FORM Pernyataan Nahkoda</u></h2>
			<table align="center">
				<tbody>
					<tr>
                        
                        <td>Nama Nahkoda : <?php echo $value->nama_nahkoda ?></td>
                        <td>Nama Kapal : <?php echo $value->nama_kapal ?></td>
                        <td>Jumlah Muatan: <?php echo $value->jumlah_muatan ?></td>
                        <td>Jumlah Penumpang : <?php echo $value->jumlah_penumpang ?></td>
                      
                </tr>
                <tr>
                     <td>Draft Kapal: <?php echo $value->draft_kapal ?></td>
                     <td>Stabilitas Kapal : <?php echo $value->stabilitas_kapal ?></td>
                     <td>Jumlah Perwira Dek : <?php echo $value->jumlah_perwiradek?></td>
                     <td>Jumlah Perwira Mesin :<?php echo $value->jumlah_perwiramesin?></td>
                </tr>

                 <tr>
                     <td>Jumlah Abk: <?php echo $value->jumlah_abk ?></td>
                     <td>Jumlah Abk Lainnya : <?php echo $value->jumlah_abklainnya ?></td>
                     <td>Jumlah Alat Navigasi : <?php echo $value->jumlah_alatnavigasi?></td>
                     <td>Jumlah Alat Penolong :<?php echo $value->jumlah_alatpenolong?></td>
                </tr>

                 <tr>
                     <td>Jumlah Alat Pemadam: <?php echo $value->jumlah_alatpemadam ?></td>
                     <td>Jumlah Alat Pencegahan : <?php echo $value->jumlah_alatpencegahan ?></td>
                    
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