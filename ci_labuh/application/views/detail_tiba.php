<!DOCTYPE html>
<html>

<head>
    <title>
     Data Tiba/Berangkat
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
            <?php require_once('layout/_wrappertiba.php') ;?>
            <!-- Main content -->
             <section class="content">
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Tiba Berangkat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        

                    </div>
                     <form method="get" action="">
               
        
                </div><br>
              <table id="example1" class="table table-bordered table-hover table-responsive">
                 <div>
                <thead class="bg-purple">
                <tr>
                        
                        <th>Tanggal</th>
                        <th >Nama Nahkoda</th>
                        <th >Nama Kapal</th>
                        <th>Aksi</th>
                        <th>Kirim Persetujuan</th>
                        
                </tr>
                </thead>
                <tbody>


                   
                  <?php
                        $no = 1;
                        foreach ($tiba as $key): ?>
                        <tr >
                            <td><?php echo $key->tanggal_tiba_berangkat ?></td>
                            <td>
                                <?php echo $key->nama_nahkoda ?>
                            </td>
                            <td>
                                <?php echo $key->nama_kapal ?>
                            </td>
                           <td>
                               <a href="<?php echo site_url('tiba/get_profil/'.$key->id_tiba_berangkat);?>" class="btn bg-navy"><i class="fa fa-search"></i>Lihat</a>
                           </td>
                           <td>
                             <form class="form-inline" action="/action_page.php">
    <label for="" class="mb-2 mr-sm-2">Pesan:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="" placeholder="Enter Text" name="">
  <button type="submit" class="btn btn-primary mb-2">Submit</button>
  </form>
                           </td>
                            
                        </tr>
                    <?php $no++; endforeach;?>
           
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
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
