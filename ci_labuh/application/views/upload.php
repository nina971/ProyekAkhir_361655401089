<!DOCTYPE html>
<html>

<head>
    <title>
      Upload Dokumen
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
           <!--  <?php require_once('layout/_wrapperupload.php') ;?> -->
            <!-- Main content -->
             <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Data Upload Dokumen</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

          <form role="form">

                     
                    <table class="table table-bordered table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col" class="bg-navy">no.</th>
               <th scope="col" class="bg-navy">Nama Nahkoda</th>
                <th scope="col" class="bg-navy">Nama Kapal</th>
              <th scope="col" class="bg-navy">Nama Dokuemn</th>
             <th scope="col" class="bg-navy">Diterbitkan Oleh</th> 
              <th scope="col" class="bg-navy">Pada Tanggal</th>
              <th scope="col" class="bg-navy">Masa Berlaku</th>
              <th scope="col" class="bg-navy">Nama File</th>
              <th scope="col" class="bg-navy">Unduh File</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach($data as $file){
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td class="bg-gray"><?php echo $file->nama_nahkoda; ?></td>
                <td class="bg-gray"><?php echo $file->nama_kapal; ?></td>
                <td class="bg-gray"><?php echo $file->nama_dokumen; ?></td>
               <td class="bg-gray"><?php echo $file->diterbitkan_oleh; ?></td> 
               <td class="bg-gray"><?php echo $file->diterbitkan_pada; ?></td> 
               <td class="bg-gray"><?php echo $file->masa_berlaku; ?></td> 
                <td class="bg-gray"><?php echo $file->filename; ?></td>
                
                 <td class="bg-gray"><a href="<?php echo base_url().'uploads/download/'.$file->id_upload_dokumen; ?>" class="btn btn-success btn-sm"><i class="fa  fa-download">Unduh</i></a></td> 
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
          <!-- <?php if(isset($data_nik)) {
                    foreach ($data_nik as $value) { 

                    }
                } ?>

                <?php echo $value->nik?> -->
         <!--  <table>
            <tr>
              <th>nik</th>
              <th>nama jurumudi</th>
              <th>filename</th>
            </tr>

            <tbody>
              <?php
              $no = 1;
              foreach($jurumudi as $key){
                ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $key->nik;?></td>
                <td><?php echo $key->filename;?></td>
              </tr>
              <?php
            }
            ?>
            </tbody>
          </table>
                     
                   
                       -->


</form>

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
