<!DOCTYPE html>
<html>

<head>
    <title>
      Kelola Laporan
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
      <!-- Horizontal Form -->
          <div id="page-wrapper">
            <div class="row">
                
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading ">
                            Edit Data
                        </div>
                        <div class="panel-body bg-success">
                            <div class="row">
                                <div class="col-lg-6">
                    <form action="<?php echo site_url('laporan/update') ?>" method = "post">
                    <input type="hidden" name="id" value="<?php echo $laporan->id ?> ">
                    <div class = "form-group">
                        <label>Nama Kapal</label>
                        <select name="kapal" class="form-control">
                            <?php foreach ($kapal as $kapals): ?>
                                <option value="<?php echo $kapals->id ?>" <?php if($kapals->id == $laporan->id) echo 'selected'; ?>><?php echo $kapals->nama_kapal ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>  
                     <div class = "form-group">
                    <label>Tanggal</label>
                        <input type="date" name="tgl" class="form-control" value="<?php echo $laporan->tgl ?>">
                    </div>
                     <div class = "form-group">
                    <label>Jumlah Pelaporan</label>
                        <input type="text" name="jumlah_pelaporan" class="form-control" value="<?php echo $laporan->jumlah_pelaporan ?>">
                    </div>
                     <div class = "form-group">
                    <label>Form Yang Dilaporan</label>
                        <textarea name="form" rows="3" class="form-control"><?php echo $laporan->form ?> </textarea>
                    </div>
                    <input type="submit" class="btn btn-success" value="Simpan">
                </form>
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
