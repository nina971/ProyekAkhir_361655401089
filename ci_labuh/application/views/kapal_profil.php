<!DOCTYPE html>
<html>

<head>
    <title>
      Profil Kapal
    </title>
    
    <!-- meta -->
    <?php require_once('layout/_meta.php') ;?>

    <!-- css -->
    <?php require_once('layout/_css.php') ;?>
     <style type="text/css">
      h1{font-family: Times New Roman; color: darkseagreen;}
      h2{font-family: Times New Roman; color: darkgoldenrod;}
     
    </style>
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

     <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <table width="100%">
            <tr>
            <td width="25" align="center"><img src="<?php echo base_url('assets');?>/images/Logo_Pelabuhan_Ketapang.png" width="60%"></td>
            <td width="50" align="center">
              <h1><?php echo $detail->nama_agen?></h1><br><h2><u>Profil Kapal</u></h2></td>
            <td width="25" align="center"><img src="<?php echo base_url('assets');?>/images/logo_transparant-01.png" width="100%"></td>
            </tr>
            </table>
            <div class="box-body">
              <div class="row">

                <div class="col-xs-3"><label>Nama Kapal</label>
                  <input type="text" class="form-control" value="<?php echo $detail->nama_kapal;?>" disabled>
                </div>
                <div class="col-xs-3"><label>Tanda Kebangsaan Kapal</label>
                  <input type="text" class="form-control" value="<?php echo $detail->kebangsaan;?>" disabled>
                </div>
                <div class="col-xs-3"><label>Nomor Imo</label>
                  <input type="text" class="form-control" value="<?php echo $detail->imo;?>" disabled>
                </div>
                <div class="col-xs-3"><label>Grosstons</label>
                  <input type="text" class="form-control" value="<?php echo $detail->grosstons;?>" disabled>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-3"><label>Tanda Panggilan</label>
                  <input type="text" class="form-control" value="<?php echo $detail->tanda_panggilan;?>" disabled>
                </div>
                <div class="col-xs-3"><label>Jumlah Abk</label>
                  <input type="text" class="form-control" value="<?php echo $detail->jumlah_abk;?>" disabled>
                </div>
                <div class="col-xs-3"><label>Panjang Kapal</label>
                  <input type="text" class="form-control" value="<?php echo $detail->panjang;?>" disabled>
                </div>
                <div class="col-xs-3"><label>Lebar Kapal</label>
                  <input type="text" class="form-control" value="<?php echo $detail->lebar;?>" disabled>
                </div>
              </div>

                <div class="row">
                <div class="col-xs-3"><label>Tahun Pembuatan</label>
                  <input type="text" class="form-control" value="<?php echo $detail->tahun_pembuatan;?>" disabled>
                </div>
                <div class="col-xs-3"><label>Nama Agen</label>
                  <input type="text" class="form-control" value="<?php echo $detail->nama_agen;?>" disabled>
                </div>
                <div class="col-xs-3"><label>Jenis Kapal</label>
                  <input type="text" class="form-control" value="<?php echo $detail->jenis_kapal;?>" disabled>
                </div>
                <div class="col-xs-3"><label>Status</label>
                  <input type="text" class="form-control" value="<?php echo $detail->status;?>" disabled>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
            <button onclick="goBack()" class="btn btn-primary btn-md">
            <span class="glyphicon glyphicon-chevron-left"></span>
          Go Back</button>
          <script>
              function goBack() {
                  window.history.back();
              }
          </script>
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
