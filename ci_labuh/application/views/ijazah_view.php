<!DOCTYPE html>
<html>

<head>
    <title>
      Ijazah
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
            <?php require_once('layout/_wrapper.php') ;?>
            <!-- Main content -->
             <section class="content">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Ijazah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                 <div>
                    <a href="<?php echo site_url('ijazah/create') ?>" class="btn btn-sm btn-success">Tambah Daftar Ijazah</a> 
                </div>
                <br>
                <thead class="bg-blue">
                <tr>
                  <tr>
                        <th scope="col">ID IJazah</th>
                        <th scope="col">Nama Ijazah</th>
                        <th scope="col">Diterbitkan Oleh</th>
                        <th scope="col">Nomor Seri Ijazah</th>
                        
                        <th scope="col">Kelola</th>
                    </tr>
                </tr>
                </thead>
                <tbody>
                 <?php
                        $no =1;
                        foreach ($ijazah as $ijazahs): ?>
                        <tr class="primary">
                            <td >
                                <?php echo $no++?>
                            </td>
                            
                            <td>
                                <?php echo $ijazahs->nama_ijazah ?>
                            </td>
                            <td>
                                <?php echo $ijazahs->diterbitkan_oleh ?>
                            </td>
                            <td>
                                <?php echo $ijazahs->no_ijazah ?>
                            </td>
                            
                            <td>
                                <a href="<?php echo site_url('ijazah/edit/'.$ijazahs->id)?>" class="btn btn-primary">Sunting</a>
                                <a href="<?php echo site_url('ijazah/delete/'.$ijazahs->id)?>" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                 </tbody>

              </table>

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
    <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>

</html>
