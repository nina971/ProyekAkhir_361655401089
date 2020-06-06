<!DOCTYPE html>
<html>

<head>
    <title>
      Edit Profil Kapal
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
          <h3 class="box-title">Edit Profil Kapal</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
       
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <form action="<?php echo site_url('kapal/update') ?>" method = "post">
                  <input type="hidden" name="id" value="<?php echo $kapal->id ?> ">
              <div class="form-group">
                <label>Nama Kapal</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-ship"></i>
                  </div>
                  <input type="text" name="nama_kapal" class="form-control" value="<?php echo $kapal->nama_kapal ?>">
                </div>
              </div>
              <!-- /.form-group -->
            <div class="form-group">
                <label>Kebangsaan</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-flag-o"></i>
                  </div>
                  <input type="text" name="kebangsaan" class="form-control" value="<?php echo $kapal->kebangsaan?>">
                </div>
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
               <div class="form-group">
                <label>Status Kapal</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-check-circle-o"></i>
                  </div>
                <input type="radio" name="status" value="operasi" <?php if (!empty($status)&&$status == "operasi") echo "checked";?>>Operasi
                        <input type="radio" name="status" value="tidak " <?php if (!empty($status)&&$status == "tidak") echo "checked";?>>Tidak Operasi
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label>Nomor Imo</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa   fa-calculator"></i>
                  </div>
                  <input type="text" class="form-control" name="imo" value="<?php echo $kapal->imo?>">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
               <div class="form-group">
                <label>Grosstons</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-balance-scale"></i>
                  </div>
                  <input type="text" class="form-control" name="grosstons" value="<?php echo $kapal->grosstons?>">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                <label>Tanda Panggilan</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-anchor"></i>
                  </div>
                  <input type="text" class="form-control" name="tanda_panggilan" value="<?php echo $kapal->tanda_panggilan?>">
                </div>
                <!-- /.input group -->
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                 <div class="form-group">
                <label>Jumlah ABK</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-user"></i>
                  </div>
                  <input type="text" class="form-control" name="jumlah_abk" value="<?php echo $kapal->jumlah_abk?>">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
                <div class="form-group">
                <label>Panjang Kapal</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-arrows-v"></i>
                  </div>
                  <input type="text" class="form-control" name="panjang" value="<?php echo $kapal->panjang?>">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
               <div class="form-group">
                <label>Lebar kapal</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-arrows-h"></i>
                  </div>
                  <input type="text" class="form-control" name="lebar" value="<?php echo $kapal->lebar?>">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group">
                <label>Jenis Kapal</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-ship"></i>
                  </div>
                  <input type="text" class="form-control" name="jenis_kapal" value="<?php echo $kapal->jenis_kapal?>">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Tahun Pembuatan</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-hourglass"></i>
                  </div>
                  <input type="text" class="form-control" name="tahun_pembuatan" value="<?php echo $kapal->tahun_pembuatan?>">
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label>Nama Agen</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-user"></i>
                  </div>
                  <input type="text" class="form-control" name="nama_agen" value="<?php echo $kapal->nama_agen?>">
                </div>
                <!-- /.input group -->
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
