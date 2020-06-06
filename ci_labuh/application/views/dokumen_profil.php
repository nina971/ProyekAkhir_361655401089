<!DOCTYPE html>
<html>

<head>
    <title>
      Semua Pengajuan
    </title>
    
    <!-- meta -->
    <?php require_once('layout/_meta.php') ;?>

    <!-- css -->
    <?php require_once('layout/_css.php') ;?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url('assets');?>/vendor/jquery/jquery.min.js"></script>
</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">
        <!-- header -->
        <?php require_once('layout/_header.php') ;?>
        <!-- sidebar -->
        <?php require_once('layout/_sidebar.php') ;?>
        <!-- content -->
        <div class="content-wrapper">
            <?php require_once('layout/_wrapperdetaildokumen.php') ;?>
            <!-- Main content -->
             <section class="content">
                <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">detail Profil Dokumen</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <div class = "form-group">
                <label>Nama Kapal</label>
                <?php if(isset($periksa_dokumen_kapal)) {
                    foreach ($periksa_dokumen_kapal as $value) {
                        

                    }
                } ?>
                <p> <?php echo $value->nama_kapal?></p>
            </div>

            <div class = "form-group">
                <label>Nama Nahkoda</label>
                <?php if(isset($periksa_dokumen_kapal)) {
                    foreach ($periksa_dokumen_kapal as $value) {
                        

                    }
                } ?>
                <p> <?php echo $value->nama_nahkoda?></p>
            </div>
                

             <div class = "form-group">
                <label>Jumlah ABK</label>
                <p> <?php echo $value->jumlah_abk?></p>
            </div>

             <div class = "form-group">
                        <label>Surat Ukur</label>
                        <p>
                            <?php echo $value->surat_ukur ?>
                        </p>
                    </div>  

                       <div class = "form-group">
                        <label>Diterbitkan Oleh :</label>
                        <p>
                            <?php echo $value->diterbitkan_oleh_1 ?>
                        </p>
                    </div>  

                    <div class = "form-group">
                        <label>Pada Tanggal :</label>
                        <p>
                            <?php echo $value->pada_tanggal_1 ?>
                        </p>
                    </div>


                    <div class = "form-group">
                        <label>Masa Berlaku :</label>
                        <p>
                            <?php echo $value->masa_berlaku_1 ?>
                        </p>
                    </div>

                     <div class = "form-group">
                        <label>Surat Laut</label>
                        <p>
                            <?php echo $value->surat_laut ?>
                        </p>
                    </div>  

                       <div class = "form-group">
                        <label>Diterbitkan Oleh :</label>
                        <p>
                            <?php echo $value->diterbitkan_oleh_2 ?>
                        </p>
                    </div>  

                    <div class = "form-group">
                        <label>Pada Tanggal :</label>
                        <p>
                            <?php echo $value->pada_tanggal_2 ?>
                        </p>
                    </div>


                    <div class = "form-group">
                        <label>Masa Berlaku :</label>
                        <p>
                            <?php echo $value->masa_berlaku_2 ?>
                        </p>
                    </div>

                     <div class = "form-group">
                        <label>Sertifikat Keselamatan Radio</label>
                        <p>
                            <?php echo $value->sertifikat_keselamatan_radio ?>
                        </p>
                    </div>  

                       <div class = "form-group">
                        <label>Diterbitkan Oleh :</label>
                        <p>
                            <?php echo $value->diterbitkan_oleh_3 ?>
                        </p>
                    </div>  

                    <div class = "form-group">
                        <label>Pada Tanggal :</label>
                        <p>
                            <?php echo $value->pada_tanggal_3 ?>
                        </p>
                    </div>


                    <div class = "form-group">
                        <label>Masa Berlaku :</label>
                        <p>
                            <?php echo $value->masa_berlaku_3 ?>
                        </p>
                    </div>

                     <div class = "form-group">
                        <label>Sertifikat Keselamatan Penumpang</label>
                        <p>
                            <?php echo $value->sertifikat_keselamatan_penumpang ?>
                        </p>
                    </div>  

                       <div class = "form-group">
                        <label>Diterbitkan Oleh :</label>
                        <p>
                            <?php echo $value->diterbitkan_oleh_4 ?>
                        </p>
                    </div>  

                    <div class = "form-group">
                        <label>Pada Tanggal :</label>
                        <p>
                            <?php echo $value->pada_tanggal_4 ?>
                        </p>
                    </div>


                    <div class = "form-group">
                        <label>Masa Berlaku :</label>
                        <p>
                            <?php echo $value->masa_berlaku_4 ?>
                        </p>
                    </div>

                     <div class = "form-group">
                        <label>Sertifikat Garis Muat</label>
                        <p>
                            <?php echo $value->sertifikat_garis_muat ?>
                        </p>
                    </div>  

                       <div class = "form-group">
                        <label>Diterbitkan Oleh :</label>
                        <p>
                            <?php echo $value->diterbitkan_oleh_5 ?>
                        </p>
                    </div>  

                    <div class = "form-group">
                        <label>Pada Tanggal :</label>
                        <p>
                            <?php echo $value->pada_tanggal_5 ?>
                        </p>
                    </div>


                    <div class = "form-group">
                        <label>Masa Berlaku :</label>
                        <p>
                            <?php echo $value->masa_berlaku_5 ?>
                        </p>
                    </div>

                     <div class = "form-group">
                        <label>Sertifikat Pengawakan Dan Keselamatan</label>
                        <p>
                            <?php echo $value->sertifikat_pengawakan_dan_keselamatan ?>
                        </p>
                    </div>  

                       <div class = "form-group">
                        <label>Diterbitkan Oleh :</label>
                        <p>
                            <?php echo $value->diterbitkan_oleh_6 ?>
                        </p>
                    </div>  

                    <div class = "form-group">
                        <label>Pada Tanggal :</label>
                        <p>
                            <?php echo $value->pada_tanggal_6 ?>
                        </p>
                    </div>


                    <div class = "form-group">
                        <label>Masa Berlaku :</label>
                        <p>
                            <?php echo $value->masa_berlaku_6 ?>
                        </p>
                    </div>

                 <!--    <div class = "form-group">
                <label>Nama Jurumudi</label>
                <?php if(isset($periksa_dokumen_kapal)) {
                    foreach ($periksa_dokumen_kapal as $value) {
                        

                    }
                } ?>
                <p> <?php echo $value->nama?></p>
            </div> -->
     
    </section>
    <!-- /.content -->
  </div>
        <!-- footer -->
        <?php require_once('layout/_footer.php') ;?>

        <div class="control-sidebar-bg"></div>
    </div>
    <!-- js -->
    <?php require_once('layout/_js.php') ;?>
    
</body>

</html>
