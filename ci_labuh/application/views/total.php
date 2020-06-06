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
                      
                        <th>Total</th>
                </tr>
                </thead>
                <tbody>

                  <tr>
                   
                  
                    
                    <?php
$sum += $total
foreach ($total_biaya as $total){

}
?>
<td><?php echo $total?></td>
                    
           </tr>
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
