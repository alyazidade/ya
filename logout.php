<?php
  session_start();
  include "class/koneksi.php";
  include "class/user.php";

  $user = new user();
  $logout = $user->logout();
  header('location:index.php');
?>
