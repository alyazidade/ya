<?php
include "class/masuk.php";
$masuk = new Masuk();
$detail = $masuk->detail($_GET['id']);
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h1>Detail Data Logistik Masuk</h1>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-content">
          <div class="table-responsive">
            <a href="<?php echo $url.'operator.php?page=masuk'; ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> <b>Kembali</b> </a>
            
            <br>
            <br>
	        <table class="table table">
              <?php foreach ($detail as $key => $d) { ?>
                <tr>
                  <th>Nama</th>
                  <td><?php echo $d['nama']; ?></td>
                </tr>
                <tr>
                  <th>Tanggal Masuk</th>
                  <td><?php echo my_date($d['tanggal']); ?></td>
                </tr>
                <tr>
                  <th>Jumlah</th>
                  <td><?php echo $d['jumlah']; ?></td>
                </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>