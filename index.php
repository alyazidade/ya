<?php
session_start();
include 'class/koneksi.php';

$center = "0.477629, 101.377010";

if (isset($_GET['page'])) {
  $page = $_GET['page'];

  if (isset($_GET['action'])) {
    $page.= '-'.$_GET['action'];
  }

} else {
  $page = 'main';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BENCANA ALAM</title>

  <link href="<?php echo $url; ?>theme/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $url; ?>theme/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo $url; ?>theme/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo $url; ?>theme/css/style.css" rel="stylesheet">
</head>
<body id="page-top">
  <div class="navbar-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" >GIS INDOMARET</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php if ($page == 'main') { ?>
            <li><a class="page-scroll" href="#page-top">Home</a></li>
            <li><a class="page-scroll" href="#peta">Peta</a></li>
            <li><a class="page-scroll" href="#promo">Promo</a></li>
            <li><a class="page-scroll" href="#indomaret">Indomaret</a></li>
            <li><a class="page-scroll" href="<?php echo $url.'login.php'; ?>">Login</a></li>
            <?php } else { ?>
            <li><a class="page-scroll" href="<?php echo $url.'index.php'; ?>">Home</a></li>
            <li><a class="page-scroll" href="<?php echo $url.'index.php#peta'; ?>">Peta</a></li>
            <li><a class="page-scroll" href="<?php echo $url.'index.php?page=promo'; ?>">Promo</a></li>
            <li><a class="page-scroll" href="<?php echo $url.'index.php?page=indomaret'; ?>">Indomaret</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <?php
  if(!@include('publik/'.$page.'.php')) {
    header('Location: '.$url.'404.php');
  }
  ?>

  <section class="gray-section contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
          <p><strong>&copy; 2019 Manajemen Informatika </strong></p>
        </div>
      </div>
    </div>
  </section>

  <script src="<?php echo $url; ?>theme/js/jquery-2.1.1.js"></script>
  <script src="<?php echo $url; ?>theme/js/pace.min.js"></script>
  <script src="<?php echo $url; ?>theme/js/bootstrap.min.js"></script>
  <script src="<?php echo $url; ?>theme/js/classie.js"></script>
  <script src="<?php echo $url; ?>theme/js/cbpAnimatedHeader.js"></script>
  <script src="<?php echo $url; ?>theme/js/wow.min.js"></script>
  <script src="<?php echo $url; ?>theme/js/inspinia.js"></script>
</body>
</html>

<?php @include('publik/js/'.$page.'.php'); ?>
