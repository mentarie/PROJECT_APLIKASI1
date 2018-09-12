<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Praktek Kerja Lapangan | Registrasi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/2.4.0/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/2.4.0/bower_components/font-awesome/css/font-awesome.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/2.4.0/bower_components/Ionicons/css/ionicons.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/2.4.0/dist/css/AdminLTE.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/2.4.0/plugins/iCheck/square/blue.css')?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
<!--   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <b style="font-size: 30px">Praktek Kerja Lapangan</b>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Pendaftaran</p>
    <?php
      if(!(empty($error)))
      {
        echo $error;
      }
    ?>
    <form action="<?php echo base_url('register');?>" method="post">

      <div class="form-group" id="registrasi-inputgroup-NomorInduk">
        <input type="text" class="form-control" id="registrasi-nomorInduk" placeholder="NOMOR INDUK" name="txtNomorInduk" value="">
        <span class="help-block" id="registrasi-notifikasiNomorInduk"></span>
      </div>      

      <div class="form-group" id="registrasi-inputgroup-NamaLengkap">
        <input type="text" class="form-control" id="registrasi-namaLengkap" placeholder="NAMA LENGKAP" style="text-transform: uppercase;" name="txtNamaLengkap" value="">
        <span class="help-block" id="registrasi-notifikasiNamaLengkap"></span>
      </div>      

      <div class="form-group" id="registrasi-inputgroup-Username">
        <input type="text" class="form-control" id="registrasi-username" placeholder="USERNAME" name="txtUsername" value="">
        <span class="help-block" id="registrasi-notifikasiUsername"></span>
      </div>      

      <div class="form-group" id="registrasi-inputgroup-Password">
        <input type="password" class="form-control" id="registrasi-password" placeholder="PASSWORD" name="txtPassword" value="">
        <span class="help-block" id="registrasi-notifikasiPassword"></span>
      </div>      

      <div class="form-group" id="registrasi-inputgroup-VerifyPassword">
        <input type="password" class="form-control" id="registrasi-verifyPassword" placeholder="VERIFIKASI PASSWORD" value="">
        <span class="help-block" id="registrasi-notifikasiVerifyPassword"></span>
      </div>      

      <div class="row">
        <div class="col-xs-8">
          <a href="<?php echo base_url('login')?>" class="text-center">Sudah memiliki akun</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="registrasi-btnDaftar" class="btn btn-primary btn-block btn-flat" disabled="true">Daftar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery-3.2.1.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/adminlte/2.4.0/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets/adminlte/2.4.0/plugins/iCheck/icheck.min.js')?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
<script src="<?php echo base_url('assets/js/prakerin-custom.js');?>"></script>
</body>
</html>
