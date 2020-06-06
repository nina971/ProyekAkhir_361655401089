<!DOCTYPE html>
<html>

<head>
    <title>
      Data Manifets
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
            <?php require_once('layout/_wrappermanifest.php') ;?>
            <!-- Main content -->
             <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Manifets</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover table-responsive">
                 <div>
                <thead class="bg-purple">
                <tr>
                        <th>No</th>
                        <th >Nama Kapal</th>
                        <th>Nama Penumpang</th>
                        <th>Alamat</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Kirim Persetujuan</th>
                        <!-- <th>Nama Jurumudi</th> -->
                </tr>
                </thead>
                <tbody>
                <?php
                        $no = 1;
                        foreach ($manifest as $key): ?>
                        <tr >
                            <td><?php echo $no ?></td>
                            
                            <td>
                                <?php echo $key->nama_kapal ?>
                            </td>
                            <td>
                                <?php echo $key->nama_penumpang ?>
                            </td>
                             <td>
                                <?php echo $key->alamat ?>
                            </td>
                             <td>
                                <?php echo $key->umur ?>
                            </td>
                             <td>
                                <?php echo $key->jenis_kelamin ?>
                            </td>
                            <td>
                             <form class="form-inline" action="/action_page.php">
    <label for="" class="mb-2 mr-sm-2">Pesan:</label>
    <input type="text" class="form-control mb-2 mr-sm-2" id="" placeholder="Enter Text" name="">
  <button type="submit" class="btn btn-primary mb-2">Submit</button>
  </form>
                           </td>
                           <!--  <td>
                                <?php echo $key->nama ?>
                            </td> -->
                         
                            
                        </tr>
                    <?php $no++; endforeach;?>
                </tbody>
                
              </table>

                    </div>
                </div>
            
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
