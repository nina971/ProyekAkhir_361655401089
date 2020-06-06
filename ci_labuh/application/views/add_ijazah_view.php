<!DOCTYPE html>
<html>

<head>
    <title>
      Tambah Ijazah
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
            <?php require_once('layout/_wrapper.php') ;?>
            <!-- Main content -->
             <section class="content">
        <!-- SELECT2 EXAMPLE -->

      <div class="box box-default" >
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Ijazah</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <form action="<?php echo site_url('ijazah/save') ?>" method = "post">
             
              <!-- /.form group -->
              <!-- /.form-group -->
              <div class="form-group">
                <label>Nama Ijazah:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-sticky-note-o"></i>
                  </div>
                  <input type="text" class="form-control" name="nama_ijazah">
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label>Diterbitkan Oleh:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-user"></i>
                  </div>
                  <input type="text" class="form-control" name="diterbitkan_oleh">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>
            <!-- /.col -->
          
              <!-- /.form-group -->
               <div class="form-group">
                <label>No Seri Ijazah:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-hourglass-o"></i>
                  </div>
                  <input type="text" class="form-control" name="no_ijazah">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
              

            </div>
            <button type="submit" class="btn bg-purple margin" value="Simpan">Simpan</button>
           
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
