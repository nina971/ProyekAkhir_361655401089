
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
				<img src="<?php echo base_url('assets/upload/images/foto_profil/'.$this->session->userdata('photo')); ?>" class="img-circle">
			</div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('username')?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
   
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">HEADER</li>
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="<?php echo base_url('member/home');?>"><i class="fa fa-link"></i> <span>Beranda Admin</span></a></li>
      <!-- semua data yang masuk -->
          
             <li><a href="<?php echo base_url('data');?>">Pengajuan</a></li>
             <li><a href="<?php echo base_url('lokasilabuh');?>">Data Lokasi Labuh</a></li>
             <li><a href="<?php echo base_url('uploads');?>">Data Upload</a></li>
          
        
        
      
          
            <li><a href="<?php echo base_url('laporanrekap/cari_kapal');?>"> Laporan Muatan </a></li>
             <li><a href="<?php echo base_url('laporanrekap/grafikmuatan');?>"> Grafik Muatan </a></li>
             <li><a href="<?php echo base_url('laporantrip/labuh_sandar');?>">Laporan Trip </a></li>
             <li><a href="<?php echo base_url('laporanrekap/sandar');?>"> Grafik Trip </a></li>
          <!--   <li><a href="<?php echo base_url('laporanperlengkapan/perlengkapan');?>"><i class="fa fa-circle-o"></i> Laporan Perlengkapan</a></li> -->
            
                                      
       <!-- <li class="active"><a href="<?php echo base_url('laporan');?>"><i class="fa  fa-clipboard"></i> <span> Kelola Laporan</span></a></li> -->
       <li class="active"><a href="<?php echo base_url('spb');?>"><i class="fa  fa-clipboard"></i> <span> Buat SPB</span></a></li>
     
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
