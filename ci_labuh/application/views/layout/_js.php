<!-- JavaScript -->
<script src="<?php echo base_url('assets');?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets');?>/vendor/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url('assets');?>/vendor/AdminLTE-2.4.3/js/adminlte.min.js"></script>
<script src="<?php echo base_url('assets');?>/vendor/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets');?>/chartjs/Chart.js"></script>
<script src="<?php echo base_url('assets');?>/vendor/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets');?>/DataTables/datatables.min.js"></script>

<!-- <script type="text/javascript" src="<?php echo base_url('assets');?>/DataTables/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets');?>/DataTables/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets');?>/DataTables/1.5.6/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets');?>/DataTables/1.5.6/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets');?>/DataTables/1.5.6/js/buttons.print.min.js"> --></script>


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
<!--   <script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>  -->
<script> 
	window.onload = function() {
		<?php if ($this->session->flashdata('msg') != '') {
    echo "effect_msg();";
}?>
	}

	function effect_msg_form() {
		$('.form-msg').slideDown(1000),
			setTimeout(function() {
				$('.form-msg').slideUp(1000);
			}, 3000)
	}

	function effect_msg() {
		$('.msg').show(1000),
			setTimeout(function() {
				$('.msg').fadeOut(1000);
			}, 3000)
	}
</script>
