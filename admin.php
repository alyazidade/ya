<?php
session_start();
if ($_SESSION['level'] != 'admin') {
  header('Location: index.php');
}
include 'class/koneksi.php';

if (isset($_GET['page'])) {
  $page = $_GET['page'];

  if (isset($_GET['action'])) {
    $page.= '-'.$_GET['action'];
  }

} else {
  $page = 'dashboard';
}
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Bencana Alam</title>

  <link href="<?php echo $url; ?>theme-admin/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $url; ?>theme-admin/font-awesome/css/font-awesome.css" rel="stylesheet">

  <link href="<?php echo $url; ?>theme-admin/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

  <link href="<?php echo $url; ?>theme-admin/css/plugins/toastr/toastr.min.css" rel="stylesheet">

  <link href="<?php echo $url; ?>theme-admin/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

  <link href="<?php echo $url; ?>theme-admin/css/animate.css" rel="stylesheet">
  <link href="<?php echo $url; ?>theme-admin/css/style.css" rel="stylesheet">

  <link href="<?php echo $url; ?>theme-admin/css/plugins/iCheck/custom.css" rel="stylesheet">
  <link href="<?php echo $url; ?>theme-admin/css/plugins/datapicker/datepicker3.css" rel="stylesheet">
  <link href="<?php echo $url; ?>theme-admin/css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
  <link href="<?php echo $url; ?>theme-admin/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

</head>

<body>
  <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
          <li class="nav-header">
            <div class="dropdown profile-element">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <span class="block m-t-xs font-bold"><?php echo $_SESSION['nama']; ?></span>
                <span class="text-muted text-xs block"><?php echo $_SESSION['level']; ?></span>
              </a>
            </div>
            <div class="logo-element">
              
            </div>
          </li>
        
        <li><a href="<?php echo $url.'admin.php?'; ?>"> <span class="nav-label">Home</span></a></li>
        <li><a href="<?php echo $url.'admin.php?page=posko'; ?>"> <span class="nav-label">Kelola Data Posko</span></a></li>
        <li> 
        <li><a href="<?php echo $url.'admin.php?page=kebutuhan'; ?>"> <span class="nav-label">Kebutuhan</span></a></li>
        <li>
        <a href="admin.php"><span class="nav-label">Kelola Data Logistik</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo $url.'admin.php?page=masuk'; ?>"><span class="nav-label">Masuk</span></a></li>
                            <li><a href="<?php echo $url.'admin.php?page=keluar'; ?>"><span class="nav-label"> Keluar</span></a></li>
                        </ul>
        </li>            
          <li><a href="<?php echo $url.'admin.php?page=operator'; ?>"></i> <span class="nav-label">Kelola Data Pengguna</span></a></li>
        </ul>

      </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
      <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
          </div>
          <ul class="nav navbar-top-links navbar-right">
            <li>
              <a href="<?php echo $url.'logout.php'; ?>">
                <i class="fa fa-sign-out"></i> Log out
              </a>
            </li>
          </ul>

        </nav>
      </div>

      <?php
      if(!@include('admin/'.$page.'.php')) {
        header('Location: '.$url.'NOT FOUND.php');
      }
      ?>

      <script src="<?php echo $url; ?>theme-admin/js/jquery-3.1.1.min.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/popper.min.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/bootstrap.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

      <script src="<?php echo $url; ?>theme-admin/js/plugins/dataTables/datatables.min.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

      <script src="<?php echo $url; ?>theme-admin/js/plugins/flot/jquery.flot.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/plugins/flot/jquery.flot.spline.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/plugins/flot/jquery.flot.resize.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/plugins/flot/jquery.flot.pie.js"></script>

      <script src="<?php echo $url; ?>theme-admin/js/plugins/peity/jquery.peity.min.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/demo/peity-demo.js"></script>

      <script src="<?php echo $url; ?>theme-admin/js/inspinia.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/plugins/pace/pace.min.js"></script>

      <script src="<?php echo $url; ?>theme-admin/js/plugins/jquery-ui/jquery-ui.min.js"></script>

      <script src="<?php echo $url; ?>theme-admin/js/plugins/gritter/jquery.gritter.min.js"></script>

      <script src="<?php echo $url; ?>theme-admin/js/plugins/sparkline/jquery.sparkline.min.js"></script>

      <script src="<?php echo $url; ?>theme-admin/js/demo/sparkline-demo.js"></script>

      <script src="<?php echo $url; ?>theme-admin/js/plugins/chartJs/Chart.min.js"></script>

      <script src="<?php echo $url; ?>theme-admin/js/plugins/toastr/toastr.min.js"></script>

      <script src="<?php echo $url; ?>theme-admin/js/plugins/iCheck/icheck.min.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/plugins/datapicker/bootstrap-datepicker.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/plugins/clockpicker/clockpicker.js"></script>
      <script src="<?php echo $url; ?>theme-admin/js/plugins/daterangepicker/daterangepicker.js"></script>

      <script>
      $(document).ready(function(){
        $('.dataTables-example').DataTable({
          pageLength: 10,
          responsive: true,
          dom: '<"html5buttons"B>lTfgitp',
          buttons: [
            {extend: 'excel', title: 'export'},
            {extend: 'pdf', title: 'export'},

            {extend: 'print',
            customize: function (win){
              $(win.document.body).addClass('white-bg');
              $(win.document.body).css('font-size', '10px');

              $(win.document.body).find('table')
              .addClass('compact')
              .css('font-size', 'inherit');
            }
          }
        ]
      });
    });
    </script>
  </body>
  </html>
