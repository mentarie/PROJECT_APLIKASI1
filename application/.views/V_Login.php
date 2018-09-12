<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Praktek Kerja Lapangan | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/2.4.0/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/2.4.0/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/2.4.0/bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/2.4.0/dist/css/AdminLTE.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/adminlte/2.4.0/plugins/iCheck/square/blue.css'); ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo base_url('assets/img/logoStembaseBesar.png');?>" style="width: 125px; height: 125px">
    <br/>
    <b style="font-size: 30px">Praktek Kerja Lapangan</b>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in</p>
    <?php echo $error ?>
    <form action="<?php echo base_url('login'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" id="txtUsername" name="txtUsername" class="form-control" placeholder="Username / Nomor Induk" required="true">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required="true">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8" style="padding-top: 6px; padding-left: 20px;">
          <a href="<?php echo base_url('register')?>" class="text-center">Belum terdaftar? Daftar disini</a>  
        </div>
        <div class="col-xs-4" style="padding-top: 6px; padding-left: 20px;">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script src="<?php echo base_url('assets/plugins/jquery/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/2.4.0/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/adminlte/2.4.0/plugins/iCheck/icheck.min.js'); ?>"></script>
</body>
</html>