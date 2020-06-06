<!DOCTYPE html>
<html>

<head>
    <title>
      Form Kapal Tiba Berangkat
    </title>
    
    <!-- meta -->
    <?php require_once('layout/_meta.php') ;?>

    <!-- css -->
    <?php require_once('layout/_css.php') ;?>
    <style type="text/css">
      h1{font-family: Times New Roman; color: darkseagreen;}
      h2{font-family: Times New Roman; color: darkgoldenrod;}
     
    </style>
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
            
            <!-- Main content -->
             <section class="content">
        <!-- SELECT2 EXAMPLE -->

     <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <table width="100%">
            <tr>
            <td width="25" align="center"><img src="<?php echo base_url('assets');?>/images/Logo_Pelabuhan_Ketapang.png" width="60%"></td>
            <td width="50" align="center">
               <?php if(isset($laporan_kapal_tiba_berangkat)) {
                    foreach ($laporan_kapal_tiba_berangkat as $value) { 

                    }
                } ?>
              <h1 class=""><?php echo $value->nama_agen?></h1><br><h2><u>FORM KAPAL TIBA/BERANGKAT</u></h2></td>
            <td width="25" align="center"><img src="<?php echo base_url('assets');?>/images/'Dharma_Jala_Prajatama'.jpg" width="100%"></td>
            </tr>

            </table>
             <?php if(isset($laporan_kapal_tiba_berangkat)) {
                    foreach ($laporan_kapal_tiba_berangkat as $value) { 

                    }
                } ?>
                        <a href="<?php echo site_url('tiba/cetak/'.$value->id_tiba_berangkat);?>" class="btn bg-navy"><i class="fa fa-file-pdf-o"></i>Ekspor PDF</a>
                        <br>
                        <br>
                        <form action="" method="post">
           <!--  <div class="form-group">
              <label for="send_to">Send To:</label>
              <select name="send_to" id="send_to" class="form-control">
                <option value="sngle">Single Device</option>
                <option value="topic">Topic</option>
              </select>
            </div> -->

           <!--  <div class="form-group">
              <label for="firebase_api">Firebase Server API Key:</label>
              <input type="hidden" required="" class="form-control" id="firebase_api" placeholder="Enter Firebase Server API Key" name="firebase_api">
            </div> -->
            <!-- <div class="form-group" id="firebase_token_group">
              <label for="firebase_token">Firebase Token:</label>
              <input type="hidden" required="" class="form-control" id="firebase_token" placeholder="Enter Firebase Token" name="firebase_token">
            </div> -->
            <!-- <div class="form-group" style="display: none" id="topic_group">
              <label for="topic">Topic Name:</label>
              <input type="text" class="form-control" id="topic" placeholder="Enter Topic Name" name="topic">
            </div> -->
        <div class="form-group">
              <!-- <label for="title">Title:</label> -->
              <input type="hidden" required="" class="form-control" id="title" placeholder="Enter Notification Title" name="title" value="Pemberitahuan">
            </div>
            <div class="form-group">
              <!-- <label for="message">Message:</label> -->
              <textarea required="" class="form-control" rows="5" id="message" placeholder="Enter Notification Message" name="message" name="hide" style="display: none;" >Form Tiba/Berangkat Telah Di Verifikasi</textarea>
            </div>
            

            <button type="submit" class="btn btn-info">Verifikasi</button>
          </form>

                    
            <div class="box-body">
              <div class="row">

                <div class="col-xs-3"><label>Nama Kapal</label>
                  <?php if(isset($laporan_kapal_tiba_berangkat)) {
                    foreach ($laporan_kapal_tiba_berangkat as $value) { 

                    }
                } ?>
                  <input type="text" class="form-control" value="<?php echo $value->nama_kapal?>" disabled>
                </div>
                <div class="col-xs-3"><label>Nama Nahkoda</label>
                  <?php if(isset($laporan_kapal_tiba_berangkat)) {
                    foreach ($laporan_kapal_tiba_berangkat as $value) {
                        

                    }
                } ?>
                  <input type="text" class="form-control" value="<?php echo $value->nama_nahkoda?>" disabled>
                </div>
                <div class="col-xs-3"><label>Tanggal </label>
                  <input type="text" class="form-control" value="<?php echo $value->tanggal?>" disabled>
                </div>
                 <div class="col-xs-3"><label>Jam Tiba </label>
                  <input type="text" class="form-control" value="<?php echo $value->jam_tiba?>" disabled>
                </div>
                
              </div>
              <div class="row">
                <div class="col-xs-3"><label>Jumlah ABK</label>
                  <input type="text" class="form-control" value="<?php echo $value->jumlah_abkkapal?>" disabled>
                </div>
                <div class="col-xs-3"><label>Jumlah Perwira</label>
                  <input type="text" class="form-control" value="<?php echo $value->jumlah_perwirakapal?>" disabled>
                </div>
                <div class="col-xs-3"><label>Trip Ke</label>
                  <input type="text" class="form-control" value="<?php echo $value->trip_ke?>" disabled>
                </div>
                <div class="col-xs-3"><label>Draft Kapal </label>
                  <input type="text" class="form-control" value="<?php echo $value->draft_kapal?>" disabled>
                </div>
               
              </div>

              

             
            </div>
            <!-- /.box-body -->
                                      <div class="col-lg-6">
          <?php
          if(isset($_POST['title'])){
    
            require_once __DIR__ . '/notification.php';
            $notification = new Notification();
  
            $title = $_POST['title'];
            $message = isset($_POST['message'])?$_POST['message']:'';
            $imageUrl = isset($_POST['image_url'])?$_POST['image_url']:'';
            $action = isset($_POST['action'])?$_POST['action']:'';
            
            $actionDestination = isset($_POST['action_destination'])?$_POST['action_destination']:'';
  
            if($actionDestination ==''){
              $action = '';
            }
            $notification->setTitle($title);
            $notification->setMessage($message);
            $notification->setImage($imageUrl);
            $notification->setAction($action);
            $notification->setActionDestination($actionDestination);
            
            $firebase_token = 'eyDce9ZO03g:APA91bEM5T-8k8gSidpqzxXeMAl_pK85lMeZLmEKz5IwsuIIPnayUyKwhpjEOcMHHjR0ddOHy1eNOybxiw7n0zb_VlLUMOw6OuzHiunhPU6dSCMdYJsDAjZie8T-_qoleP7Vv55H62qo';
            $firebase_api = 'AAAASEG_tyw:APA91bFJ3RhkQCg3-6zsjQEMMDpicfJA07tVORLREzc_ml1BOLXCUuoJ8jP_AUAtheNsGqKW-1ZQmieHqBdlJtNOhbzS5K4oLQiNu5MxA-agxAq4RJIY7renAazdXiu3vHd35rWePqCd';
            
            //$topic = $_POST['topic'];
            
            $requestData = $notification->getNotificatin();
            
            // if($_POST['send_to']=='topic'){
            //   $fields = array(
            //     'to' => '/topics/' . $topic,
            //     'data' => $requestData,
            //   );
              
            // }else{
              
              $fields = array(
                'to' => $firebase_token,
                'data' => $requestData,
              );
            //}
    
    
            // Set POST variables
            $url = 'https://fcm.googleapis.com/fcm/send';
 
            $headers = array(
              'Authorization: key=' . $firebase_api,
              'Content-Type: application/json'
            );
            
            // Open connection
            $ch = curl_init();
 
            // Set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_URL, $url);
 
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
            // Disabling SSL Certificate support temporarily
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
 
            // Execute post
            $result = curl_exec($ch);
            if($result === FALSE){
              die('Curl failed: ' . curl_error($ch));
            }
 
            // Close connection
            curl_close($ch);
            
            // echo '<h2>Result</h2><hr/><h3>Request </h3><p><pre>';
            // echo json_encode($fields,JSON_PRETTY_PRINT);
            // echo '</pre></p><h3>Response </h3><p><pre>';
            // echo $result;
            // echo '</pre></p>';
          }
          ?>
  
        </div>
          </div>
          <button onclick="goBack()" class="btn btn-default btn-md">
            <span class="glyphicon glyphicon-chevron-left"></span>
          Go Back</button>
          <script>
              function goBack() {
                  window.history.back();
              }
          </script>
    </section>
    <!-- /.content -->
  </div>
        <!-- footer -->
        <?php require_once('layout/_footer.php') ;?>

        <div class="control-sidebar-bg"></div>
    </div>
    <!-- js -->
     <script>
      $('#include_image').change(function(e){
          if($(this).prop("checked")==true){
            $('#image_url_group').show();
            $("#image_url").prop('required',true);
          }else{
            $('#image_url_group').hide();
            $("#image_url").prop('required',false);
          
          
          }
        });
      $('#include_action').change(function(e){
          if($(this).prop("checked")==true){
            $('#action_group').show();
            $('#action_destination_group').show();
            $("#action_destination").prop('required',true);
          }else{
            $('#action_group').hide();
            $('#action_destination_group').hide();
            $("#action_destination").prop('required',false);
          
          
          }
        });
        
      // $('#send_to').change(function(e){
      //     var selectedVal = $("#send_to option:selected").val();
      //     if(selectedVal=='topic'){
      //       $('#topic_group').show();
      //       $("#topic").prop('required',true);
      //       $('#firebase_token_group').hide();
      //       $("#firebase_token").prop('required',false);
      //     }else{
      //       $('#topic_group').hide();
      //       $("#topic").prop('required',false);
      //       $('#firebase_token_group').show();
      //       $("#firebase_token").prop('required',true);
      //     }
      //   });
    </script>
    <?php require_once('layout/_js.php') ;?>
</body>

</html>
