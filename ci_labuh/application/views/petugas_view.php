<!DOCTYPE html>
<html>

<head>
    <title>
      Daftar Jurumudi
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
            <?php require_once('layout/_wrapperpetugasview.php') ;?>
            <!-- Main content -->
             <section class="content">
   
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Jurumudi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <br>
                <br>
                <a href="<?php echo site_url('laporanpdf/index');?>" class="btn bg-navy"><i class="fa  fa-file-pdf-o"></i>Ekspor PDF</a>
                <br>
                <br>
              <table id="example1" class="table table-bordered table-hover">
                <div>
                    <a href="<?php echo site_url('petugas/create') ?>" class="btn btn-success"><i class="fa fa-plus">Tambah</i></a>
                </div>
                <?php if($this->session->flashdata('msg_success')): ?>
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo $this->session->flashdata('msg_success') ?>
                            </div>
                <?php endif ?>
                <?php if ($this->session->flashdata('msg_error')): ?>
                    <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo $this->session->flashdata('msg_error') ?>
                            </div>
                <?php endif ?>
                <br>
                <thead class="thead-dark">
                <tr>
                  <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama Jurumudi</th>
                        <th scope="col">Nama Kapal</th>
                        <th scope="col">Nama Nahkoda</th>
                        
                        <th scope="col">Kelola</th>
                    </tr>
                </tr>
                </thead>
                <tbody>
                 <?php
                        $no = 1;
                        foreach ($petugas as $petugass): ?>
                        <tr>
                            <td>
                                <?php echo $no++?>
                            </td>
                            <td>
                                <?php echo $petugass->NIK ?>
                            </td>
                            <td>
                                <?php echo $petugass->nama_jurumudi ?>
                            </td>
                            <td>
                                <?php echo $petugass->nama_kapal ?>
                            </td>
                            <td>
                                <?php echo $petugass->nama_nahkoda ?>
                            </td>
                    
                            <td>
                                <span class="badge bg-gray"><a href="<?php echo site_url('petugas/edit/'.$petugass->id)?>" >Sunting</a></span> |
                               <span class="badge bg-gray"> <a href="<?php echo site_url('petugas/delete/'.$petugass->id)?>"  onclick="return confirm('Apakah kamu yakin?')">Hapus</a></span>
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
