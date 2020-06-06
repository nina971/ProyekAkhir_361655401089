<!DOCTYPE html>
<html>

<head>
    <title>
      Registrasi SPB
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
            
            <!-- Main content -->
             <section class="content">
        <!-- SELECT2 EXAMPLE -->

      <div class="box box-default" >
        <div class="box-header with-border">
          <h3 class="box-title">Pembuatan Nomor Surat dan Nomor Registrasi SPB</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header 
  `id_spb` int(11) NOT NULL,
  `id_kapal` int(11) NOT NULL,
  `id_nahkoda` int(11) NOT NULL,
  `no_registrasi` varchar(100) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `no_spb` varchar(100) NOT NULL,
  `bertolak` varchar(50) NOT NULL,
  `tanggal_tolak` date NOT NULL,
  `jumlah_awak` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `pelabuhan` varchar(50) NOT NULL,
  `muatan` varchar(100) NOT NULL

        -->

        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <form action="<?php echo site_url('spb/save') ?>" method = "post">
            
               <div class="form-group">
                <label>Nomor Registrasti</label>

                <div class="input-group">
                  <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa   fa-calculator"></i>
                  </div>
                  <input type="text" class="form-control" name="no_registrasi" required>
                </div>
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label>Nomor Surat</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa   fa-calculator"></i>
                  </div>
                  <input type="text" class="form-control" name="no_surat" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
               <div class="form-group">
                <label>Nomor SPB</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-balance-scale"></i>
                  </div>
                  <input type="text" class="form-control" name="no_spb" required>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                <label>Waktu Permohonan</label>

                <div class="input-group">
                  <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa   fa-calculator"></i>
                  </div>
                  <input type="time" class="form-control" name="waktu_permohonan" required>
                </div>
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label>Tempat Permohonan</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa   fa-calculator"></i>
                  </div>
                  <input type="text" class="form-control" name="tempat_permohonan">
                </div>
                <!-- /.input group -->
              </div>
            <!--  -->
            </div>

            <div class="col-md-6">
               <!--  <form action="<?php echo site_url('spb/save') ?>" method = "post"> -->
            
              <div class="form-group">
                <label>Nama Kapal</label>
                <select class="form-control select2" name="kapal">
                   <?php foreach ($kapal as $kapals): ?>
                                <option value="<?php echo $kapals->id ?>"><?php echo $kapals->nama_kapal ?></option>
                            <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group">
                <label>Nama Nahkoda</label>
                <select class="form-control select2" name="nahkoda">
                   <?php foreach ($nahkoda as $nahkodas): ?>
                                <option value="<?php echo $nahkodas->id ?>"><?php echo $nahkodas->nama_nahkoda ?></option>
                            <?php endforeach; ?>
                </select>
              </div>
              <!-- /.form group -->
               <div class="form-group">
                <label>Tanggal Permohonan</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-balance-scale"></i>
                  </div>
                  <input type="date" class="form-control" name="tanggal_permohonan" placeholder="isi tanggal sesuai dengan form permohonan spb">
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label>Pelabuhan Tujuan</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-balance-scale"></i>
                  </div>
                  <input type="text" class="form-control" name="pelabuhan_tujuan" >
                </div>

                  <div class="form-group">
                <label>Jumlah Awak</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-balance-scale"></i>
                  </div>
                  <input type="number" class="form-control" name="jumlah_awak">
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label>Jumlah Muatan</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-balance-scale"></i>
                  </div>
                  <input type="number" class="form-control" name="jumlah_muatan">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
             
            <!--  -->
            </div>

            <div class="col-md-6">
              <!--   <form action="<?php echo site_url('spb/save') ?>" method = "post"> -->
            
              
              <!-- /.form group -->
             
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
               <button type="submit" class="btn bg-purple margin" value="Simpan">Simpan</button>
            <!--  -->
            </div>
            
           
            <!-- /.col -->
        </form>
          </div>
          <!-- /.row -->

              </div>
          </div>
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
