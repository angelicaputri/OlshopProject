<!DOCTYPE html>
<html lang="en">
<head>
 <title>Registrasi</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>
</head>
<body>
 <?php $this->load->view('layout/top_menu') ?>
 <div><?=validation_errors()?></div>
 <div><?=$this->session->flashdata('error')?></div>
 <?=form_open('Login/create', ['class'=>'form-horizontal'])?>
 <div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" name="nama">
  </div>
</div>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" name="email">
    <p>Gunakan email yang masih aktif!</p>
  </div>
</div>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" name="alamat">
    <p>Sertakan kecamatan,kelurahan,kota,provinsi, dan kode pos!</p>
  </div>
</div>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" name="username">
  </div>
</div>
<div class="form-group">
 <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
 <div class="col-sm-9">
   <input type="password" class="form-control" name="password" id="password" data-toggle="password">
   <p>Isi minimal 8 karakter!</p>
 </div>
</div>
<div class="form-group">
 <div class="col-sm-offset-2 col-sm-10">
  <button type="submit" class="btn btn-default">Ganti Data</button>
 </div>
</div>

</form>
<?php $this->load->view('layout/footer') ?>
<script type="text/javascript">
  $("#password").password('toggle');
</script>
</body>
</html>