<!DOCTYPE html>
<html>

<head>
    <title>
      Abk Kapal
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
            <?php require_once('layout/editabk.php') ;?>
            <!-- Main content -->
             <section class="content">
             <!-- SELECT2 EXAMPLE -->

      <div class="box box-default" >
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <form action="<?php echo site_url('abkkapal/save') ?>" method = "post">
                    <input type="hidden" name="id" value="<?php echo $abk->id ?> ">
              <div class="form-group">
                <label>Nama ABK</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-male"></i>
                  </div>
                  <input type="text" name="nama_abk" class="form-control" value="<?php echo $abk->nama_abk ?>">
                </div>
              </div>
              <!-- /.form-group -->
             <div class="form-group">
                <label>Nama Kapal</label>
                <select class="form-control select2" name="kapal">
                   <?php foreach ($kapal as $kapals): ?>
                                <option value="<?php echo $kapals->id ?>" <?php if($kapals->id == $abk->id) echo 'selected'; ?>><?php echo $kapals->nama_kapal ?></option>
                            <?php endforeach; ?>
                </select>
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
               <div class="form-group">
                <label>Status:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-check-circle-o"></i>
                  </div>
                 <?php if ($abk->status_aktif == "Aktif") { ?>
                            <input type="radio" name="status_aktif" value="Aktif" checked>Aktif
                            <input type="radio" name="status_aktif" value="Tidak ">Tidak Aktif
                        <?php } else { ?>
                            <input type="radio" name="status_aktif" value="Aktif">Aktif
                            <input type="radio" name="status_aktif" value="Tidak " checked>Tidak Aktif
                        <?php } ?>
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label>Jabatan:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-user"></i>
                  </div>
                  <input type="text" class="form-control" name="jabatan" value="<?php echo $abk->jabatan ?>">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group">
                <label>Nama Ijazah</label>
                <select class="form-control select2" name="ijazah">
                   <?php foreach ($ijazah as $ijazahs): ?>
                                <option value="<?php echo $ijazahs->id ?>"<?php if($ijazahs->id == $abk->id) echo 'selected'; ?>><?php echo $ijazahs->nama_ijazah ?></option>
                            <?php endforeach; ?>
                        </select>
                </select>
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
               <div class="form-group">
                <label>Alamat:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-building"></i>
                  </div>
                  <textarea name="alamat" rows="3" class="form-control"><?php echo $abk->alamat ?></textarea>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
               <div class="form-group">
                <label>No Hp:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="no_hp" value="<?php echo $abk->no_hp ?>">
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
