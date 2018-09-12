  <?php

    if(!(empty($highlight_dashboard)))
    {
      $highlight_dashboard  =   'active';
    }
    else
    {
      $highlight_dashboard  =   '';
    }

    if(!(empty($highlight_jurnal)))
    {
      $highlight_jurnal   =   'active';
    }
    else
    {
      $highlight_jurnal   =   '';
    }

    if(!(empty($highlight_daftar_jurnal)))
    {
      $highlight_daftar_jurnal  =   'active';
    }
    else
    {
      $highlight_daftar_jurnal  =   '';
    }

    if(!(empty($highlight_export_jurnal)))
    {
      $highlight_export_jurnal  =   'active';
    }
    else
    {
      $highlight_export_jurnal  =   '';
    }

    if(!(empty($highlight_laporan)))
    {
      $highlight_laporan  =   'active';
    }
    else
    {
      $highlight_laporan  =   '';
    }

    if(!(empty($highlight_laporan_bab3)))
    {
      $highlight_laporan_bab3  =   'active';
    }
    else
    {
      $highlight_laporan_bab3  =   '';
    }

  ?>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets').'/';?>img/no_account_photo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo ucwords(strtolower($this->session->nama_lengkap));?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="<?php echo $highlight_dashboard;?>">
          <a href="<?php echo base_url('index');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview <?php echo $highlight_jurnal;?>">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Jurnal</span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo $highlight_daftar_jurnal;?>"><a href="<?php echo base_url('daftar_jurnal');?>"><i class="fa fa-circle-o"></i> Daftar Jurnal</a></li>
            <li class="<?php echo $highlight_export_jurnal;?>"><a href="<?php echo base_url('export_jurnal').'/';?>pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Ekspor</a></li>
          </ul>
        </li>
        <li class="treeview <?php echo $highlight_laporan;?>">
          <a href="#">
            <i class="fa fa-th"></i> <span>Buat Laporan</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php ;?>"><i class="fa fa-circle-o"></i> Judul</a></li>
            <li><a href="<?php ;?>"><i class="fa fa-circle-o"></i> Bab I</a></li>
            <li><a href="<?php ;?>"><i class="fa fa-circle-o"></i> Bab II</a></li>
            <li class="<?php echo $highlight_laporan_bab3;?>"><a href="<?php echo base_url('laporan_bab3');?>"><i class="fa fa-circle-o"></i> Bab III</a></li>
            <li><a href="<?php ;?>"><i class="fa fa-circle-o"></i> Bab IV</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Pengaturan</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php ;?>"><i class="fa fa-circle-o"></i> Layout Cetak</a></li>
            <li><a href="<?php ;?>"><i class="fa fa-circle-o"></i> Jam Kerja Kantor</a></li> 
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">