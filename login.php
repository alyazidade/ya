<?php
session_start();
error_reporting(0);
if ($_SESSION['login']) {
  header('Location: '.$_SESSION['level'].'.php');
}
if (isset($_POST['submit'])) {
  include "class/koneksi.php";
  include "class/user.php";
  $user = new User();
  $login = $user->login($_POST['username'], $_POST['password']);
  if($login == 'admin') {
    header('location:admin.php');
  } elseif ($login == 'operator') {
    header('location:operator.php');
  } else {
    $messages = "username atau password salah";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Bencana Alam</title>

  <link href="theme-admin/css/bootstrap.min.css" rel="stylesheet">
  <link href="theme-admin/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="theme-admin/css/animate.css" rel="stylesheet">
  <link href="theme-admin/css/style.css" rel="stylesheet">
</head>
<body class="gray-bg">
  <div class="loginColumns animated fadeInDown">
    <div class="row">
      <div class="col-md-6">
        <div class="ibox-content">
          <form class="m-t" role="form" action="" method="post">
            <?php if($messages) {
              echo "<h5 align='center' class='text-danger'><b>".$messages."</b></h5>";
              echo "<hr>";
            } ?>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Username" name="username" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary block full-width m-b">Login</button>
          </form>
        </div>
      </div>
    </div>
    <hr/>
    <div class="row">
      <div class="col-md-6">
        Copyright Manajemen Informatika
      </div>
      <div class="col-md-6 text-right">
        <small>© 2019</small>
      </div>
    </div>
  </div>
</body>
</html>
