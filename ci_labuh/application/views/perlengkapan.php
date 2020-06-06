<!DOCTYPE html>
<html>

<head>
    <title>
      Data Alat
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

     <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <table width="100%">
            <tr>
            <td width="25" align="center"><img src="<?php echo base_url('assets');?>/images/Logo_Pelabuhan_Ketapang.png" width="60%"></td>
            <td width="50" align="center">
               <?php if(isset($navigasi)) {
                    foreach ($navigasi as $value) { 

                    }
                } ?>
              <h1><?php echo $value->nama_agen?></h1><br><h2>Data Alat</h2></td>
            <td width="25" align="center"><img src="<?php echo base_url('assets');?>/images/logo_transparant-01.png" width="100%"></td>
            </tr>
            </table>
            <div class="box-body">
              <div class="row">

                 <div class="col-md-4">
      <?php echo form_open('laporanperlengkapan/perlengkapan'); ?>
       <div class="form-group">
         <select name="kapal" id="kapal" class="form-control">
         
          <?php
        if($this->input->post('kapal') != null){
          echo '<option>'.$this->input->post('kapal').'</option>';
        }
        $data_semua = $this->db->query('SELECT nama_kapal FROM kapal')->result();
        foreach($data_semua as $value){
          echo '<option value="'.$value->nama_kapal.'">'.$value->nama_kapal.'</option>';
        }
        ?>
         </select>
       </div>
     </div>
      <div class="form-group">
        <button type="submit" value="true" class="btn btn-primary">Filter</button>
      </div>
     <?php echo form_close(); ?>
                
              </div>
              <div class="row">
                <?php if(isset($navigasi)) {
                    foreach ($navigasi as $value) { 

                    }
                } ?>
                <div class="col-xs-3"><label>Jumlah Alat Navigasi</label>
                  <input type="text" class="form-control" value="<?php echo $value->jumlah_alat_navigasi?>" disabled>
                </div>
                <div class="col-xs-3"><label>Jumlah Alat Penolong</label>
                  <input type="text" class="form-control" value="<?php echo $value->jumlah_alat_penolong?>" disabled>
                </div>
                <div class="col-xs-3"><label>Jumlah Alat Pencegahan Pencemaran</label>
                  <input type="text" class="form-control" value="<?php echo $value->jumlah_alat_pemadam_kebakaran?>" disabled>
                </div>

                <div class="col-xs-3"><label>Jumlah Alat Pemadam Kebakaran</label>
                  <input type="text" class="form-control" value="<?php echo $value->jumlah_pencegahan_pencemaran?>" disabled>
                </div>
               
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <button onclick="goBack()" class="btn btn-default btn-md">
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
