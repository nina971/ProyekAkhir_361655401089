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
            <?php require_once('layout/_wrapperdetailpermohonan.php') ;?>
            <!-- Main content -->
             <section class="content">
    <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tiba Berangkat</h3>
            </div>
            <div class="box-body">
              <div class="row">

                <div class="col-xs-3"><label>Nama Kapal</label>
                  <?php if(isset($laporan_kapal_tiba_berangkat)) {
                    foreach ($laporan_kapal_tiba_berangkat as $value) { 

                    }
                } ?>
                  <input type="text" class="form-control" value="<?php echo $value->nama_kapal?>" disabled>
                </div>
                <div class="col-xs-3"><label>Nama Nahkoda</label>
                  <?php if(isset($laporan_kapal_tiba_berangkat)) {
                    foreach ($laporan_kapal_tiba_berangkat as $value) {
                        

                    }
                } ?>
                  <input type="text" class="form-control" value="<?php echo $value->nama_nahkoda?>" disabled>
                </div>
                <div class="col-xs-3"><label>Tanggal Tiba Berangkat</label>
                  <input type="text" class="form-control" value="<?php echo $value->tanggal_tiba_berangkat?>" disabled>
                </div>
                <div class="col-xs-3"><label>Jumlah ABK</label>
                  <input type="text" class="form-control" value="<?php echo $value->jumlah_abk?>" disabled>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-3"><label>Jumlah Perwira</label>
                  <input type="text" class="form-control" value="<?php echo $value->jumlah_perwira_kapal?>" disabled>
                </div>
                <div class="col-xs-3"><label>Trip Ke</label>
                  <input type="text" class="form-control" value="<?php echo $value->trip_ke?>" disabled>
                </div>
                <div class="col-xs-3"><label>Draft Kapal Tolak</label>
                  <input type="text" class="form-control" value="<?php echo $value->draft_kapal_tiba_atau_tolak?>" disabled>
                </div>
                <div class="col-xs-3"><label>Nama Kapal</label>
                  <input type="text" class="form-control" placeholder=".col-xs-5" disabled>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
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
