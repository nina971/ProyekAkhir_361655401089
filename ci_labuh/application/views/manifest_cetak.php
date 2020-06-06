<!DOCTYPE html>
<html>
<head>
	<title>Manifest Penumpang</title>

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

<?php if(isset($penumpang)) {
          
                    foreach ($penumpang as $value) {
                        

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
<h4 align="center" ><?php echo $value->nama_kapal?></h4>

<br><h2 align="center"><u>FORM Manifest Penumpang</u></h2>
		
<br>
<br>
<br>
<br>
        <table border="3">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Penumpang</th>
      <th>Alamat</th>
      <th>Umur</th>
      <th>Jenis Kelamin</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no=1;  
    foreach ($penumpang as $data_dokumen) {
      ?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $data_dokumen->nama_penumpang ?></td>
      <td><?php echo $data_dokumen->alamat ?></td>
      <td><?php echo $data_dokumen->umur ?></td>
      <td><?php echo $data_dokumen->jenis_kelamin ?></td>
    </tr>
    <?php
    $no++;
    }
    ?>
  </tbody>
</table>
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