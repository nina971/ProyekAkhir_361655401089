<!DOCTYPE html>
<html>

<head>
    <title>
     Pengajuan
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
            <!-- <?php require_once('layout/_wrappertiba.php') ;?>  -->
            <!-- Main content -->
             <section class="content">
     <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pengajuan</h3>
            </div>
            <!-- /.box-header -->
            
                                <p><?php echo $this->session->flashdata('msg_success') ?></p>
      
                <br>
            <table  class="table table-bordered table-hover table-responsive">
                 <div>
                <thead class="bg-purple">
                <tr>

                        <!-- <th>No</th> -->
                        <th>Form Tiba Berangkat</th>
                        <th >Form Permohonan SPB</th>
                        <th >Form Pernyataan Nahkoda</th>
                        <th>Form Pemenuhan Kewajiban</th>
                        <th>Form Pernyataan Pengikatan</th>
                        <th>Form Manifest</th>
                        <th>Form Muatan</th>
                        <th>Kirim Pesan</th>
                        
                       
                        
                </tr>
                </thead>
                <tbody>


                   
                  <?php
                        $no = 1;
                        foreach ($pengajuan as $key): ?>
                        <tr >
                            <!-- <td><?php echo $no ?></td> -->
                            <td>
                              <a href="<?php echo base_url('tiba/get_profil/'.$key->id_tiba_berangkat);?>" class="btn bg-navy"><i class="fa fa-info"></i>Lihat</a>
                            </td>
                            <td>
                                <a href="<?php echo site_url('permohonan/get_profil/'.$key->id_permohonan_spb);?>" class="btn bg-navy"><i class="fa fa-info"></i>Lihat</a>
                            </td>
                            <td>
                               <a href="<?php echo site_url('nahkoda/get_profil/'.$key->id_pernyataan_nahkoda);?>" class="btn bg-navy"><i class="fa fa-info"></i>Lihat</a>
                            </td>
                           <td>
                               <a href="<?php echo site_url('kewajiban/get_profil/'.$key->id_pemenuhan_kewajiban);?>" class="btn bg-navy"><i class="fa fa-info"></i>Lihat</a>
                           </td>
                           <td>
                               <a href="<?php echo site_url('pengikatan/get_profil/'.$key->id_pengikatan);?>" class="btn bg-navy"><i class="fa fa-info"></i>Lihat</a>
                           </td>
                           <td>
                               <a href="<?php echo site_url('manifest/');?>" class="btn bg-navy"><i class="fa fa-info"></i>Lihat</a>
                           </td>

                           <td>
                               <a href="<?php echo site_url('total/get_profil/'.$key->id_muatan);?>" class="btn bg-navy"><i class="fa fa-info"></i>Lihat</a>
                           </td>
                          
                           <td>
                            
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
              <label for="title">Title:</label>
              <input type="text" required="" class="form-control" id="title" placeholder="Message Title" name="title">
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea required="" class="form-control" rows="5" id="message" placeholder="Enter  Message" name="message"></textarea>
            </div>
           

            <button type="submit" class="btn btn-info">Submit</button>
          </form>


       
                           </td>
                            
                        </tr>
                    <?php $no++; endforeach;?>
           
                </tbody>
                
              </table>

             
             
           
      </div>

      
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
