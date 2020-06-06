<!DOCTYPE html>
<html>
<head>
	<title>Form Muatan</title>

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

<?php if(isset($muatan)) {
          
                    foreach ($muatan as $value) {
                        

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
<br><h2 align="center"><u>FORM Muatan</u></h2>
			<table align="center">
				<tbody>
					<tr>
                        
                        <td>Nama Nahkoda : <?php echo $value->nama_nahkoda ?></td>
                        <td>Nama Kapal : <?php echo $value->nama_kapal ?></td>
                        <td>Tanggal: <?php echo $value->tanggal ?></td>
                        <td>Truck Besar : <?php echo $value->truck_besar ?></td>
                      
                </tr>
                <tr>
                     <td>Truck Sedang: <?php echo $value->truck_sedang ?></td>
                     <td>Truck Trailer : <?php echo $value->truck_trailer ?></td>
                     <td>Bus Besar : <?php echo $value->bus_besar?></td>
                     <td>Bus Mini :<?php echo $value->bus_mini?></td>
                </tr>

                 <tr>
                     <td>Kendaraan Keluarga: <?php echo $value->kendaraan_keluarga ?></td>
                     <td>Sepeda Motor : <?php echo $value->sepeda_motor ?></td>
                     <td>Jumlah Muatan : <?php echo $value->jumlah_muatan?></td>
                     
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