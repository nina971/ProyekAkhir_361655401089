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
            <?php require_once('layout/_wrapperkapalview.php') ;?>
            <!-- Main content -->
             <section class="content">
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Kapal</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                 <div>
                    <a href="<?php echo site_url('kapal/add_new/');?>" class="btn btn-sm btn-success"><i class="fa fa-plus">Buat Profil Kapal</i></a> 
                </div>
                <br>
                 <thead class="thead-dark">
                <tr>
                  <tr>
                       <th>No</th>
                        <th class="bg-maroon" scope="col">Nama Kapal</th>
                        <th class="bg-maroon" scope="col">Kelola</th>
                    </tr>
                </tr>
                </thead>
                <tbody>
                <?php 
          $count = 1;           
          foreach ($kapal as $row) : 
             
        ?> 
                        <tr>
                            <td>
                              <?php echo $count++; ?>
                            </td>
                            <td>
                                <?php echo $row->nama_kapal;?>
                            </td>
                            
                            <td>
                                <a href="<?php echo site_url('kapal/edit/'.$row->id);?>" class="btn btn-primary" ><i class="fa fa-edit"></i>Edit</a>
                                <a href="<?php echo site_url('kapal/get_profil/').$row->id;?>" class="btn bg-navy"><i class="fa fa-search"></i>Lihat</a>
                                <a href="<?php echo site_url('kapal/delete/'.$row->id);?>"  class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')" ><i class="fa fa-trash-o" ></i>Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
