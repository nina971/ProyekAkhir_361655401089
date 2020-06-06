<!DOCTYPE html>
<html>

<head>
    <title>
     Jadwal Keberangkatan
    </title>
    
    <!-- meta -->
    <?php require_once('layout/_meta.php') ;?>

    <!-- css -->
    <?php require_once('layout/_css.php') ;?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url('assets');?>/vendor/jquery/jquery.min.js">
      

    </script>
</head>

<body class="hold-transition skin-blue fixed sidebar-mini" >

  <style type="text/css">
    h1, h2,p,a{
      font-family: sans-serif;
      font-weight: normal;
    }
    .jam-digital{
      overflow: hidden;
      width: 360px;
      margin: 20px auto;
      border: 5px solid #efefef;
    }
    .kotak{
      float: left;
      width: 70px;
      height: 60px;
      background-color: #189fff;
    }
    .jam-digital p{
      color: #fff;
      font-size: 25px;
      text-align: center;
      margin-top: 25px;
    }
  </style>
 
    <div class="wrapper">
        <!-- header -->
        <?php require_once('layout/_header.php') ;?>
        <!-- sidebar -->
        <?php require_once('layout/_sidebar.php') ;?>
        <!-- content -->
        <div class="content-wrapper">
            <?php require_once('layout/_wrapperjadwal.php') ;?>
            <!-- Main content -->
            <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- Untuk menampilkan tooltip -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip(); 
    });
  </script>

      <div class="row">
        <div class="box-footer clearfix no-border" >
                    <a href="<?php echo site_url('jadwal/create') ?>" class="btn btn-default pull-right"><i class="fa fa-plus"></i>Tambah</a>
                </div>
         
        
                <br>
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
        <?php
                        $no = 1;
                        foreach ($jadwal_keberangkatan as $keys): ?>
                
                
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-navy " >
            <div class="inner">
              <p>
                                <?php echo $no++?>
                            </p>

                            <p>
                                <?php echo $keys->nama_kapal ?>
                            </p>
                            <label>Trip Ke</label>
                            <p>
                                <?php echo $keys->trip_ke ?>
                            </p>
                            <label>Tiba</label>
                            <p>
                                <?php echo $keys->jam_tiba ?>
                            </p>
                            <label>Berangkat</label>
                            <p>
                                <?php echo $keys->jam_berangkat ?>
                            </p>

                            
                               <a href="<?php echo site_url('jadwal/edit/'.$keys->id)?>"  data-toggle="tooltip" data-placement="bottom" title="Edit" class="small-box-footer"><li class="glyphicon glyphicon-pencil" style=" color: gold;"></li></a>
                            
                              <a href="<?php echo site_url('jadwal/delete/'.$keys->id)?>"  onclick="return confirm('Apakah kamu yakin?')" data-toggle="tooltip" data-placement="bottom" title="Delete" class="small-box-footer"><li class="glyphicon glyphicon-trash" style=" color: gold;"></li></a>
                            
              
            </div>
            



           
                                
          </div>
        </div>
        
        <?php endforeach;?>
        <!-- ./col -->

          <!-- solid sales graph -->
          </div>
           <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
        </div>
    </div>
          <!-- TO DO List -->
          
          <!-- /.box -->
        </section>
      </div>
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
