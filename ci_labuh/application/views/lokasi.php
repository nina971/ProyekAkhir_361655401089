<!DOCTYPE html>
<html>

<head>
    <title>
      Lokasi Labuh
    </title>
    <!-- Menyisipkan library Google Maps -->
      <script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.142999,114.401412),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- meta -->
    <?php require_once('layout/_meta.php') ;?>

    <!-- css -->
    <?php require_once('layout/_css.php') ;?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url('assets');?>/vendor/jquery/jquery.min.js"></script>
     <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
   <!--  <script type="text/javascript">

      var map;
      var infoWindow;
      
      function initialize(lt,lg) {
        var mapDiv = document.getElementById('map-canvas');
        map = new google.maps.Map(mapDiv, {
          center: new google.maps.LatLng(lt, lg),
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
      
        infoWindow = new google.maps.InfoWindow();
        <?php foreach ($lokasi AS $row) {?>
                var latview = '<?php echo $row->latitude ?>';
                var longview = '<?php echo $row->longitude ?>';
                createMarker(latview, longview,);
        <?php } ?>
                
      }
        
      
        function createMarker(lt,lg,message) {
          var latLng = new google.maps.LatLng(lt,lg);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map
          });
      
          google.maps.event.addListener(marker, 'click', function() {
            var myHtml = '<strong>'+message+'</strong>';
            infoWindow.setContent(myHtml);
            infoWindow.open(map, marker);
          });
        }

      
    </script> -->
</head>

<body class="hold-transition skin-blue fixed sidebar-mini">

    <div class="wrapper">
        <!-- header -->
        <?php require_once('layout/_header.php') ;?>
        <!-- sidebar -->
        <?php require_once('layout/_sidebar.php') ;?>
        <!-- content -->
        <div class="content-wrapper">
            <?php require_once('layout/_wrapperlokasi.php') ;?>
            <!-- Main content -->
             <section class="content">
              <!-- Elemen yang akan menjadi kontainer peta -->
    <div id="googleMap" style="width:80%;height:380px;"></div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Detail Lokasi Labuh</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

          <table id="example1" class="table table-bordered table-hover table-responsive">
                 <div>
                <thead class="bg-purple">
                <tr>
              <th scope="col" class="bg-navy">No.</th>
              <th scope="col" class="bg-navy">Longitude</th>
              <th scope="col" class="bg-navy">Latitude</th>
              <th scope="col" class="bg-navy">Gambar</th>
                        
                </tr>
                </thead>
                <tbody>
                <?php
                        $no = 1;
                        foreach ($lokasi as $key): ?>
                        <tr >
                            <td class="bg-gray"><?php echo $no ?></td>
                <td class="bg-gray"><?php echo $key->longitude; ?></td>
                <td class="bg-gray"><?php echo $key->latitude; ?></td>
                <td class="bg-gray"><img style="max-height: 200px; max-width: 400px;"  src="<?php echo base_url('/upload/'.$key->gambar_labuh)?>"></td>
                            
                        </tr>
                    <?php $no++; endforeach;?>
                </tbody>
                
              </table>

              

                   
          
        
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
