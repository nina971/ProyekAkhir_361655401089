
     <!DOCTYPE html>
<html>

<head>
    <title>
      Laporan
    </title>
    
    <!-- meta -->
    <?php require_once('layout/_meta.php') ;?>

    <!-- css -->
    <?php require_once('layout/_css.php') ;?>
    <style type="text/css">
      h4{font-family: Times New Roman; color: navy;}
      h3{font-family: Times New Roman; color: darkgoldenrod;}
     
    </style>
     <link rel="stylesheet" href="<?php echo base_url().'assets/css/morris.css'?>">
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
           <!--  <?php require_once('layout/_wrapperfilter.php') ;?> -->
            <!-- Main content -->
             <section class="content">
          <div class="box ">
            <table width="100%">
            <tr>
            <td width="25" align="center"><h3>Laporan Trip Kapal </h3>
              <br>
              <h4>Jumlah Trip Pada Kapal Setiap Bulan</h4>
            </td>
            <td width="50" align="center">
               
              <h1>
              </h1><br></td>
            
            </tr>
            </table>
            <div class="box-header">
              <h3 class="box-title"> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">

     
      <br>
     <!--  -->
 
       <div class="col-md-4">
      <?php echo form_open('laporanrekap/sandar'); ?>
       <div class="form-group">
         <select name="kapal" id="kapal" class="form-control">
          <!-- <option selected="" disabled="">Pilih Kapal</option> -->
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


     <div class="col-md-4">
       <div class="form-group">
         <select name="filter_tahun" class="form-control">
          <!--  <option selected="" disabled="">Pilih Tahun</option> -->
           <?php
           $data_tgl = $this->db->query('SELECT DISTINCT YEAR(tanggal) AS tgl FROM laporan_kapal_tiba_berangkat')->result();
           foreach($data_tgl as $value){
            echo '<option>'.$value->tgl.'</option>';
           }
           ?>
         </select>
       </div>
     </div>

      <div class="form-group">
        <button type="submit" value="true" class="btn btn-primary" >filter</button>
      </div>
     <?php echo form_close(); ?>
   <div id="myfirstchart" style="height: 250px;"></div>
 
    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/raphael-min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/morris.min.js'?>"></script>
    <script>
       new Morris.Bar({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: <?php echo $sandar ?>,
          xkey: 'month_name',
          ykeys: ['labuh'],
          labels: ['Jumlah Labuh Sandar ']
});
    </script>
                    </div>
                </div>
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

