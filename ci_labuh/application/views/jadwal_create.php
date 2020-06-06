<!DOCTYPE html>
<html>

<head>
    <title>
     Tambah Jadwal Keberangkatan
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
          <h3 class="box-title">Tambah Jadwal</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <form action="<?php echo site_url('jadwal/save') ?>" method = "post">
              <!-- /.form-group -->
             <div class="form-group">
                <label>Nama Kapal</label>
                <select class="form-control select2" name="kapal">
                   <?php foreach ($kapal as $kapals): ?>
                                <option value="<?php echo $kapals->id ?>"><?php echo $kapals->nama_kapal ?></option>
                            <?php endforeach; ?>
                </select>
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
               <div class="form-group">
                <label>Tanggal Berangkat:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-calendar-check-o"></i>
                  </div>
                  <input type="date" class="form-control" name="tanggal">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Trip Ke:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-arrow-right"></i>
                  </div>
                  <input type="text" class="form-control" name="trip_ke">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                <label>Jam Tiba</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-clock-o"></i>
                  </div>
                  <input type="time" class="form-control" name="jam_tiba">
                </div>
                <!-- /.input group -->
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
               <div class="form-group">
                <label>Jam Berangkat</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-clock-o"></i>
                  </div>
                  <input type="time" class="form-control" name="jam_berangkat">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
                <div class="form-group">
                <label>Status:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-check-circle-o"></i>
                  </div>
                 <input type="radio" name="status" value="Operasi">Operasi
                        <input type="radio" name="status" value="Tidak ">Tidak Operasi
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
               <div class="form-group">
                <label>Keterangan</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-comment-o"></i>
                  </div>
                  <input type="text" class="form-control" name="keterangan">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

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
