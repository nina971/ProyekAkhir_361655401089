<!DOCTYPE html>
<html>

<head>
    <title>
      Abk Kapal
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
            <?php require_once('layout/_wrapperabk.php') ;?>
            <!-- Main content -->
             <section class="content">
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data ABK</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                 <div>
                    <a href="<?php echo site_url('abkkapal/create') ?>" class="btn btn-success">Tambah</a>
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
                <thead class="bg-purple">
                <tr>
                  <th scope="col">ID ABK</th>
                        <th scope="col">Nama ABK</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Nama Ijazah</th>
                        <th scope="col">Nama Kapal</th>
                        <th scope="col">Status Aktif</th>
                        <th scope="col">Kelola</th>
                </tr>
                </thead>
                <tbody>
                <?php
                        $no = 1;
                        foreach ($abk as $abks): ?>
                        <tr >
                            <td >
                                <?php echo $no++?>
                            </td>
                            <td>
                                <?php echo $abks->nama_abk ?>
                            </td>
                            <td>
                                <?php echo $abks->alamat ?>
                            </td>
                            <td>
                                <?php echo $abks->no_hp ?>
                            </td>
                            <td>
                                <?php echo $abks->jabatan ?>
                            </td>
                            <td>
                                <?php echo $abks->nama_ijazah ?>
                            </td>
                            <td>
                                <?php echo $abks->nama_kapal ?>
                            </td>
                            <td>
                                <?php echo $abks->status_aktif ?>
                            </td>
                            <td>
                                <span class="badge bg-gray"><a href="<?php echo site_url('abkkapal/edit/'.$abks->id)?>" >Sunting</a></span>|
                               <span class="badge bg-gray"> <a href="<?php echo site_url('abkkapal/delete/'.$abks->id)?>" onclick="return confirm('Apakah kamu yakin?')">Hapus</a></span>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
                
              </table>
              
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
