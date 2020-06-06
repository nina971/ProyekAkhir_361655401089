<html>
<head>
  <title>Cetak PDF</title>
  <style>
    table {
      border-collapse:collapse;
      table-layout:fixed;width: 630px;
    }
    table td {
      word-wrap:break-word;
      width: 20%;
    }
  </style>
  <?php if(isset($spb_get)) {
          
                    foreach ($spb_get as $value) {
                        

                    }
                } ?>
</head>

<?php if(isset($spb_get)) {
          
                    foreach ($spb_get as $value) {
                        

                    }
                } ?>


<body>
     <p align="right"> <?php echo $value->no_registrasi?></p>
<p>Registrasi:<?php echo $value->no_spb?></p>


<img style="display: block; margin: auto;" src="<?php echo base_url('assets');?>/images/Lambang-Garuda-Pancasila.png"  width="100px" height="100px">


<h3 align="center">REPUBLIK INDONESIA</h3>
<p style="font-size: 14pt;font-family:    Arial;" align="center">THE REPUBLIC OF INDONESIA</p>
<h2 align="center"> SURAT PERSETUJUAN BERLAYAR</h2>
<p align="center" style="font-size: 12pt; font-family: Arial;">NO: <?php echo $value->no_surat?></p>
<p align="center" style="font-size: 9pt;">Berdasarkan UU No.17 Tahun 2008 Pasal 219 Ayat 1</p>
  <table align="center">


                <tbody>
   <tr>
                        
                        <td>Nama Nahkoda : <?php echo $value->nama_nahkoda ?></td>
                        <td>Nama Kapal : <?php echo $value->nama_kapal ?></td>
                         <td>Bendera Kebangsaan : <?php echo $value->kebangsaan ?></td>
                          <td>Nomor IMO : <?php echo $value->imo ?></td>
                      
                </tr>
                <tr>
                  <td>Tonnase Kotor : <?php echo $value->grosstons ?></td>
                  <td>Nama Panggilan : <?php echo $value->tanda_panggilan ?></td>
                </tr>
                
           
    </tbody>

  </table>
  <p class="word1" align="center">
  Sesuai dengan Surat Pernyataan Keberangkatan Kapal yang dibuat oleh Nakoda Tanggal <?php echo $value->tanggal_permohonan?> Pukul <?php echo $value->waktu_permohonan?>
   </p>
   <p class="word5" align="center">
   Bahwa Kapal telah memenuhi seluruh ketentuan Pasal 219(3) UU No.17 Tahun 2008
   </p>
   <p class="word5" align="center">
   Dengan ini kapal disetujui untuk
   </p>
   <table align="center">
  <tr>
    <td> Bertolak dari : <?php echo $value->tempat_permohonan?></td>
    <td>Jumlah Awak : <?php echo $value->jumlah_awak?></td>
    <td>Tempat Diterbitkan :<?php echo $value->tempat_permohonan?></td>
  </tr>
  <tr>
       <td>Pada Tanggal : <?php echo $value->tanggal_permohonan?></td>
    <td>Jam : <?php echo $value->waktu_permohonan?></td>
  </tr>
  <tr> 
    <td>Pelabuhan Tujuan : <?php echo $value->pelabuhan_tujuan?></td>
    <td>Jumlah Muatan : <?php echo $value->jumlah_muatan?> </td>
    <td>Dengan Muatan : <?php echo $value->diterbitkan_pada?></td>
  </tr>
</table>
<br>
<br>
<br>
<!-- <center> -->
<table border="3">
  <thead>
    <tr>
      <th>No</th>
      <th>Jenis Surat</th>
      <th>Diterbitkan oleh</th>
      <th>Diterbitkan pada</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no=1;  
    foreach ($spb_get as $data_dokumen) {
      ?>
    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $data_dokumen->nama_dokumen ?></td>
      <td><?php echo $data_dokumen->diterbitkan_oleh ?></td>
      <td><?php echo $data_dokumen->diterbitkan_pada ?></td>
    </tr>
    <?php
    $no++;
    }
    ?>
  </tbody>
</table>
<!-- </center> -->
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