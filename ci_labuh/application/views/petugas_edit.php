<!DOCTYPE html>
<html>

<head>
    <title>
      Edit Petugas
    </title>
    <link href='<?php echo base_url("assets/upload/images/$favicon"); ?>' rel='shortcut icon' type='image/x-icon' />
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
          <h3 class="box-title">Ubah Daftar Jurumudi</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <form action="<?php echo site_url('petugas/update') ?>" method = "post">
                    <input type="hidden" name="id" value="<?php echo $petugas->id ?> ">
              <!-- /.form-group -->
             <div class="form-group">
                <label>Nama Jurumudi</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-user"></i>
                  </div>
                  <input type="text" class="form-control" name="nama_jurumudi" value="<?php echo $petugas->nama_jurumudi ?>">
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label>Nama Nahkoda</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-ship"></i>
                  </div>
                 <select name="nahkoda" class="form-control">
                           <?php foreach ($nahkoda as $nahkodas): ?>
                                <option value="<?php echo $nahkodas->id ?>" <?php if($nahkodas->id == $petugas->id) echo 'selected'; ?>><?php echo $nahkodas->nama_nahkoda ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
             
              <!-- /.form-group -->
              
             
              <!-- /.form group -->
             
            </div>
            <!-- /.col -->
            <div class="col-md-6">
               <div class="form-group">
                <label>NIK</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-user"></i>
                  </div>
                  <input type="text" class="form-control" name="NIK" value="<?php echo $petugas->NIK ?>">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
               <div class="form-group">
                <label>Nama Kapal</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-ship"></i>
                  </div>
                 <select name="kapal" class="form-control">
                           <?php foreach ($kapal as $kapals): ?>
                                <option value="<?php echo $kapals->id ?>" <?php if($kapals->id == $petugas->id) echo 'selected'; ?>><?php echo $kapals->nama_kapal ?></option>
                            <?php endforeach; ?>
                        </select>
                </div>
                <!-- /.input group -->
              </div>

              
              <!-- /.form group -->
              <!-- /.form-group -->
            </div>
            <button type="submit" class="btn bg-purple margin" value="Simpan">Simpan</button>
            <button onclick="goBack()" class="btn btn-default btn-md">
            <span class="glyphicon glyphicon-chevron-left"></span>
          Go Back</button>
          <script>
              function goBack() {
                  window.history.back();
              }
          </script>
           
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
