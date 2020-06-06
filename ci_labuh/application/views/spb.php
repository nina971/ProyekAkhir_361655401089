<!DOCTYPE html>
<html>

<head>
    <title>
     Penerbitan SPB
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
            <!-- <?php require_once('layout/_wrapperspb.php') ;?> -->
            <!-- Main content -->
             <section class="content">
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">Penerbitan SPB</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        

                    </div>
                </div>
              <table id="example1" class="table table-bordered table-hover table-responsive">
                <p>NB :* Silahkan Buat Penerbitan Surat Persetujuan Berlayar</p>
                <br>
                <p>Isi data sesuai dengan form permohonan spb yang dikirim oleh nahkoda.</p>
                <div>
                    <a href="<?php echo site_url('spb/create') ?>" class="btn btn-success">Tambah</a>
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
                        <th>No</th>
                        <th >No Registrasi</th>
                        <th >No Surat</th>
                        <th>Aksi</th>
                        <th>Lihat SPB</th>
                        
                </tr>
                </thead>
                <tbody>
                <?php
                        $no = 1;
                        foreach ($spb as $key): ?>
                        <tr >
                            <td><?php echo $no ?></td>
                            <td>
                                <?php echo $key->no_registrasi ?>
                            </td>
                            <td>
                                <?php echo $key->no_surat ?>
                            </td>
                           
                           <td>
                               <!-- <a href="<?php echo site_url('pengajuan/cetak/'.$key->id_spb);?>" class="btn bg-navy"><i class="fa fa-download"></i>Cetak PDF</a> -->
                               <!--  <span class="badge bg-gray"><a href="<?php echo site_url('spb/edit/'.$key->id_spb)?>" >Sunting</a></span>|  -->
                               <span class="badge bg-gray"> <a href="<?php echo site_url('spb/delete/'.$key->id_spb)?>" onclick="return confirm('Apakah kamu yakin?')">Hapus</a></span>
                           </td> ||
                           <td>
                               <span class="badge bg-gray"><a target="_blank" href="<?php echo site_url('spb/lihat/'.$key->id_spb);?>" >Lihat </a></span>
                                
                           </td>
                            
                        </tr>
                    <?php $no++; endforeach;?>
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
