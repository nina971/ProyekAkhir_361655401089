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
    <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/vendor/bower_components/select2/dist/css/select2.min.css">
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
            <?php require_once('layout/_wrappertambahabk.php') ;?>
            <!-- Main content -->
             <section class="content">
              
                <!-- SELECT2 EXAMPLE -->

      <div class="box box-default" >
        <div class="box-header with-border">
          <h3 class="box-title">Tambah ABK</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
                <form action="<?php echo site_url('abkkapal/save') ?>" method = "post">
              <div class="form-group">
                <label>Nama ABK</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-male"></i>
                  </div>
                  <input type="text" name="nama_abk" class="form-control">
                </div>
              </div>
              <!-- /.form-group -->
             <div class="form-group">
                <label>Nama Kapal</label>
                <select class="form-control select2" name="kapal">
                   <?php foreach ($kapal as $kapals): ?>
                                <option value="<?php echo $kapals->id ?>"><?php echo $kapals->nama_kapal ?></option>
                            <?php endforeach; ?>
                </select>
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
               <div class="form-group">
                <label>Status:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-check-circle-o"></i>
                  </div>
                  <input type="radio" name="status_aktif" value="Aktif">Aktif
                  <input type="radio" name="status_aktif" value="Tidak ">Tidak Aktif
                </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
                <label>Jabatan:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-user"></i>
                  </div>
                  <input type="text" class="form-control" name="jabatan">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group">
                <label>Nama Ijazah</label>
                <select class="form-control select2" name="ijazah">
                   <?php foreach ($ijazah as $ijazahs): ?>
                                <option value="<?php echo $ijazahs->id ?>"><?php echo $ijazahs->nama_ijazah ?></option>
                            <?php endforeach; ?>
                        </select>
                </select>
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
               <div class="form-group">
                <label>Alamat:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-building"></i>
                  </div>
                  <textarea name="alamat" rows="3" class="form-control"></textarea>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <!-- /.form-group -->
               <div class="form-group">
                <label>No Hp:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa  fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" name="no_hp">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

            </div>
            <button type="submit" class="btn bg-purple margin" value="Simpan">Simpan</button>
           
            <!-- /.col -->
        </form>
          </div>
          <!-- /.row -->

              </div>
          </div>
      </section>
  </div>
        <!-- footer -->
        <?php require_once('layout/_footer.php') ;?>

        <div class="control-sidebar-bg"></div>
    </div>
    <!-- js -->
    <?php require_once('layout/_js.php') ;?>
    <!-- Select2 -->
    
<script type="text/javascript" src="<?php echo base_url('assets');?>/vendor/bower_components/select2/dist/js/select2.full.min.js">
    <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</script>

</body>

</html>
