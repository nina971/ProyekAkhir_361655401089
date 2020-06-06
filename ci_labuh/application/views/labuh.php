
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
            <!-- <?php require_once('layout/_wrapperfilter.php') ;?> -->
            <!-- Main content -->
             <section class="content">
   				<div class="box bg-active">
            <div class="box-header">
              <h3 class="box-title">Laporan Labuh Sandar </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                
      
      <div class="col-md-4">
      <?php echo form_open('laporantrip/labuh_sandar'); ?>
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
     <div class="col-md-4">
       <?php echo form_open('laporanrekap/labuh_sandar'); ?>
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
           $data_tgl = $this->db->query('SELECT DISTINCT YEAR(tanggal) AS tgl FROM laporan_kapal_tiba_berangkat')->result();
           foreach($data_tgl as $value){
            echo '<option>'.$value->tgl.'</option>';
           }
           ?>
         </select>
       </div>
     </div>


     	<div class="form-group">
     		<button type="submit" value="true" class="btn btn-warning">filter</button>
     	</div>
     <?php echo form_close(); ?>
<?php  
  $post_nama_kapal = $this->input->post('kapal');
  $post_bulan = $this->input->post('filter_bulan');
  $post_tahun = $this->input->post('filter_tahun');
  // echo $post_nama_kapal . $post_bulan . $post_tahun;
?>

<a href="<?php echo site_url('laporantrip/index?kapal='.$post_nama_kapal.'&'.'bulan='.$post_bulan.'&'.'tahun='.$post_tahun);?>" class="btn bg-navy"><i class="fa  fa-file-pdf-o"></i>Ekspor PDF</a>
     <br>
     <br>

     <table id="example1" class="table table-bordered table-hover table-responsive">
                 <div>
                <thead class="bg-aqua">
                <tr>

                        
                        <th>Tanggal </th>
                        <th>Jam </th>
                        <th>Jumlah Trip</th>
                        <th>Lokasi Labuh</th>
                        
                        
                     <!--  permohonan_spb.tanggal_atau_jam_tolak,
      permohonan_spb.pelabuhan_tujuan,
      laporan_kapal_tiba_berangkat.tanggal_tiba_berangkat,
      laporan_kapal_tiba_berangkat.trip_ke, 
        laporan_kapal_tiba_berangkat.labuh_sandar,  
                         -->
                </tr>
                </thead>
                <tbody class="bg-lavender">
                <?php
                        $jml_semua = 0;
                        $no = 1;
                        foreach ($labuh as $key): ?>
                        <tr >
                            
                            <td><?php echo $key->tanggal?></td>
                             <td><?php echo $key->jam_tiba?></td>
                            <td><?php echo $key->jml_labuh_sandar ?></td>
                             <td><?php echo $key->lokasi_labuh ?></td>
                            
                      <?php  
                           $jml_semua += $key->jml_labuh_sandar;
                          ?>
                        </tr>
                    <?php $no++; endforeach;?>
                </tbody>
              
                 <tfoot>
                <tr>
                  
                      
                 <th>Total Labuh Sandar : <?php echo  ' ' . $jml_semua  ?> Kali Dalam Sebulan</th> 
                
                </tr>
                </tfoot>
              </table>
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

