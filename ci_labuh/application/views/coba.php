<!DOCTYPE html>
<html>

<head>
  <title>
  
    
      Laporan Muatan Setiap Bulan
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
            <?php require_once('layout/_wrapperfilter.php') ;?>
            <!-- Main content -->
             <section class="content">
   				<div class="box box-active">
            <div class="box-header with-border">
            </div>
            <table width="100%">
            <tr>
            <td width="25" align="center"><img src="<?php echo base_url('assets');?>/images/Logo_Pelabuhan_Ketapang.png" width="60%"></td>
            <td width="50" align="center">
               
              <h1>
              </h1><br><h2>Laporan Muatan</h2></td>
            <td width="25" align="center"><img src="<?php echo base_url('assets');?>/images/'Dharma_Jala_Prajatama'.jpg" width="100%"></td>
            </tr>
            </table>
            <!-- /.box-header -->
            <div class="box-body">
                
                    
     <div class="col-md-4">
      <?php echo form_open('laporanrekap/cari_kapal'); ?>
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
      <?php echo form_open('laporanrekap/cari_kapal'); ?>
       <div class="form-group">
        <select name="filter_bulan" class="form-control">
          <option selected="" disabled="">Pilih Bulan</option>
          <option value="1">Januari</option>
          <option value="2">Februari</option>
          <option value="3">Maret</option>
          <option value="4">April</option>
          <option value="5">Mei</option>
          <option value="6">Juni</option>
          <option value="7">Juli</option>
          <option value="8">Agustus</option>
          <option value="9">September</option>
          <option value="10">Oktober</option>
          <option value="11">November</option>
          <option value="12">Desember</option>
        </select>
     </div>
     </div>

     <div class="col-md-4">
       <div class="form-group">
         <select name="filter_tahun" class="form-control">
           <option selected="" disabled="">Pilih Tahun</option>
           <?php
           $data_tgl = $this->db->query('SELECT DISTINCT YEAR(tanggal) AS tgl FROM muatan')->result();
           foreach($data_tgl as $value){
            echo '<option>'.$value->tgl.'</option>';
           }
           ?>
         </select>
       </div>
     </div>

     	<div class="form-group">
     		<button type="submit" value="true" class="btn btn-active" >filter</button>
     	</div>
     <?php echo form_close(); ?>

     <!-- <div class="col-xs-3">                  <?php if(!isset($muatan)) {
                    foreach ($muatan as $value) { 

                    }
                } ?>
                  <input type="text" class="form-control" value="<?php echo $value->kapal?>" disabled>
                </div>  -->
<br>
<br>
<?php  
  $post_nama_kapal = $this->input->post('kapal');
  $post_bulan = $this->input->post('filter_bulan');
  $post_tahun = $this->input->post('filter_tahun');
  //echo "<h2>Laporan Bulan </h2>".$post_bulan;
   //echo $post_nama_kapal . $post_bulan . $post_tahun;
?>


<a href="<?php echo site_url('laporanrekap/baru?kapal='.$post_nama_kapal.'&'.'bulan='.$post_bulan.'&'.'tahun='.$post_tahun);?>" class="btn bg-navy"><i class="fa  fa-file-pdf-o"></i>Ekspor PDF</a>
<div class="col-md-4">
<?php  
  $teks1 = "Laporan Muatan Kapal Pada Bulan Ke :";
  // $post_nama_kapal = $this->input->post('kapal');
  // $post_bulan = $this->input->post('filter_bulan');
  // $post_tahun = $this->input->post('filter_tahun');
  echo "<h4>" .$teks1.  " </h4> ";
  echo "<h4>" .$post_bulan.  " </h4> ";
   //echo $post_nama_kapal . $post_bulan . $post_tahun;
?>
</div>
<div class="col-md-4">
<?php  
  $teks1 = "Tahun :";
  // $post_nama_kapal = $this->input->post('kapal');
  // $post_bulan = $this->input->post('filter_bulan');
  // $post_tahun = $this->input->post('filter_tahun');
  echo "<h4>" .$teks1.  " </h4> ";
  echo "<h4>" .$post_tahun.  " </h4> ";
   //echo $post_nama_kapal . $post_bulan . $post_tahun;
?>
</div>
<br>
<br>

     <table  id="example1" class="table table-bordered table-hover table-responsive">
                 <div>
                <thead class="bg-purple">
                <tr>

                       
                        <th>Tanggal</th>
                        <th>Truck Sedang</th>
                        <th>Truck Besar</th>
                        <th>Truck Trailer</th>
                        <th>Bus Besar</th>
                        <th>Bus Mini</th>
                        <th>Kendaraan Keluarga</th>
                        <th>Sepeda Motor</th>
                        <th>Jumlah Muatan</th>
                       <!--  <th>Total</th> -->
                        
                        
                        
                        
                </tr>
                </thead>
                <tbody>
                <?php
                        //$data_baru = $this->db->get('muatan')->result();
                        $jml_semua = 0;
                        $no = 1;
                        foreach ($muatan as $key): ?>
                        <tr >
                             
                            <td><?php echo $key->tanggal?></td>
                            <td><?php echo $key->truck_sedang ?></td>
                            <td><?php echo $key->truck_besar ?></td>
                            <td><?php echo $key->truck_trailer ?></td>
                            <td><?php echo $key->bus_besar ?></td>
                            <td><?php echo $key->bus_mini ?></td>
                            <td><?php echo $key->kendaraan_keluarga ?></td>
                            <td><?php echo $key->sepeda_motor ?></td>
                            <td><?php echo $key->jumlah_muatan ?></td>
                           <!--  <td></td> -->

                           <!--  <h1><?php echo $key->total?></h1> -->
                            
                      <?php  
                          $jml_semua += $key->jumlah_muatan;
                          ?>    
                        </tr>
                         
                        
                    <?php $no++; endforeach;?>
                </tbody>
              
                 <!-- <?php foreach ($muatan as $value) {
                echo $value->total;
               
            }
            ?> -->
              </table>
           <h3>Total Keseluruhan Jumlah Muatan : <?php echo  ' ' . $jml_semua  ?></h3> 
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


 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">



<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    
</body>

</html>

