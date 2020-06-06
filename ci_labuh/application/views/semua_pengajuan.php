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
            <?php require_once('layout/_wrapperdata.php') ;?>
            <!-- Main content -->
             <section class="content">
     

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Laporan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="get" action="">
               
        <label>Filter Berdasarkan</label><br>
        <select name="filter" id="filter">
            <option value="">Pilih</option>
            <option value="1">Per Tanggal</option>
            <option value="2">Per Bulan</option>
            <option value="3">Per Tahun</option>
        </select>
        <br /><br />

        <div id="form-tanggal">
            <label>Tanggal</label><br>
            <input type="text" name="tanggal" class="input-tanggal" />
            <br /><br />
        </div>


        <div id="form-bulan">
            <label>Bulan</label><br>
            <select name="bulan">
                <option value="">Pilih</option>
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
            <br /><br />
        </div>

        <div id="form-tahun" class="form-group">
            <label>Tahun</label><br>
            <select name="tahun">
                <option value="">Pilih</option>
                <?php
                foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
                    echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                }
                ?>
            </select>
            <br /><br />
        </div>

        <button type="submit" class="btn btn-secondary">Tampilkan</button>
        <a href="<?php echo base_url(); ?>">Reset Filter</a>
    </form>
    <br>
     <a  class="btn bg-navy"  href="<?php echo $url_cetak; ?>" >CETAK PDF</a><br /><br />
                        

                    </div>
                </div>
                <br>
              <table id="example1" class="table table-bordered table-hover table-responsive">
                 <div>
                <thead class="bg-navy">
                   
                <tr>
                        
                        <th>Tanggal</th>
                        <th>Nama Nahkoda</th>
                        <th>Nama Kapal</th>
                        <th>Jumlah ABK</th>
                        <th>Jumlah Awak </th>
                        <th>Jumlah Muatan</th>
                        <th>Jumlah Penumpang</th>
                        <th>Pelabuhan Tujuan</th>
                        <th>Stabilitas Kapal Tolak</th>
                </tr>
                </thead>
                <tbody>
                <!-- <?php
                        $no = 1;
                        foreach ($laporan as $row) :?>
                        <tr >
                            <td><?php echo $no ?></td>
                            
                            <td><?php echo $row->tanggal_tiba_berangkat?>
                            </td>
                            <td><?php echo $row->nama_nahkoda?></td>
                            <td><?php echo $row->nama_kapal?></td>
                            <td><?php echo $row->jumlah_abk?></td>
                            <td><?php echo $row->jumlah_awak?></td>
                            <td><?php echo $row->jumlah_muatan?></td>
                            <td><?php echo $row->jumlah_penumpang?></td>
                            <td><?php echo $row->pelabuhan_tujuan?></td>
                            <td><?php echo $row->stabilitas_kapal_tolak?></td>
                           
                            
                        </tr>
                    <?php $no++; endforeach;?> -->
                    <?php
    if( ! empty($laporan)){
        $no = 1;
        foreach($laporan as $data){
            $tgl = date('d-m-Y', strtotime($data->tanggal_tiba_berangkat));
            
            echo "<tr>";
            echo "<td>".$tgl."</td>";
            echo "<td>".$data->nama_nahkoda."</td>";
            echo "<td>".$data->nama_kapal."</td>";
            echo "<td>".$data->jumlah_abk."</td>";
            echo "<td>".$data->jumlah_awak."</td>";
            echo "<td>".$data->jumlah_muatan."</td>";
            echo "<td>".$data->jumlah_penumpang."</td>";
            echo "<td>".$data->pelabuhan_tujuan."</td>";
            echo "<td>".$data->stabilitas_kapal_tolak."</td>";
            echo "</tr>";
            $no++;
            
        }
    }
    ?>
                </tbody>

                <script src="<?php echo base_url('assets/jquery-ui/jquery-ui.min.js'); ?>"></script>
    <script>
    $(document).ready(function(){ // Ketika halaman selesai di load
        $('.input-tanggal').datepicker({
            dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
        });

        $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya

        $('#filter').change(function(){ // Ketika user memilih filter
            if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                $('#form-tanggal').show(); // Tampilkan form tanggal
            }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                $('#form-tanggal').hide(); // Sembunyikan form tanggal
                $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
            }else{ // Jika filternya 3 (per tahun)
                $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                $('#form-tahun').show(); // Tampilkan form tahun
            }

            $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
        })
    })
    </script>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
          <!-- /.box -->
        </section>

     
     
        <!-- /.col -->
      </div>

       
     
 <!-- footer -->
        <?php require_once('layout/_footer.php') ;?>

        <div class="control-sidebar-bg"></div>
    </div>
    <!-- js -->
    <?php require_once('layout/_js.php') ;?>
    
</body>

</html>
