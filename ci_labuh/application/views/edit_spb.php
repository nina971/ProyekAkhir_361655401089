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
          <h3 class="box-title">Buat Penerbitan Surat Persetujuan Berlayar</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header 
      
        -->
        <?php 
        foreach ($spb as $data_spb) {
        }
         ?>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <form action="<?php echo site_url('spb/update') ?>" method = "post">
                   <input type="hidden" name="id_spb" value="<?php echo $data_spb->id_spb ?> ">
              <!-- <div class="form-group">
                <label>Nama Kapal</label>
                <select class="form-control select2" name="kapal" disabled>
                   <?php foreach ($kapal as $kapals): ?>
                                <option value="<?php echo $kapals->id ?>"<?php if($kapals->id == $data_spb->id_spb) echo 'selected'; ?>><?php echo $kapals->nama_kapal ?></option>
                            <?php endforeach; ?>
                </select>
              </div> -->
              <!-- /.form-group -->
            <!-- <div class="form-group">
                <label>Nama Nahkoda</label>
                <select class="form-control select2" name="nahkoda" disabled>
                   <?php foreach ($nahkoda as $nahkodas): ?>
                    <option value="<?php echo $nahkodas->id ?>"<?php if($nahkodas->id == $data_spb->id_spb) echo 'selected'; ?>><?php echo $nahkodas->nama_nahkoda ?></option>
                    <?php endforeach; ?>
                </select>
              </div> -->
              <!-- /.form group -->
              <!-- /.form-group -->
               <div class="form-group">
                <label>Nomor Registrasi</label>

                <div class="input-group">
                  <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa   fa-calculator"></i>
                  </div>
                  <input type="text" class="form-control" name="no_registrasi" value="<?php echo $data_spb->no_registrasi ?>">
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
                  <input type="text" class="form-control" name="no_surat" value="<?php echo $data_spb->no_surat ?>">
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
                  <input type="text" class="form-control" name="no_spb" value="<?php echo $data_spb->no_spb ?>">
                </div>
           
         
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
