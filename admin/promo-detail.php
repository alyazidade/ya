<?php
include "class/promo.php";
$promo = new Promo();
$detail = $promo->detail($_GET['id']);
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Detail Promo</h2>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-hover">
                <?php foreach ($detail as $key => $d) { ?>
                  <tr>
                    <th width="200">Foto</th>
                    <td><img style="max-width:200px; max-height:200px;" src="<?php echo $url.'upload/promo/'.$d['foto']; ?>" alt=""></td>
                  </tr>
                  <tr>
                    <th>Judul</th>
                    <td><?php echo $d['judul']; ?></td>
                  </tr>
                  <tr>
                    <th>Tanggal</th>
                    <td><?php echo my_date($d['tgl_mulai']).' - '.my_date($d['tgl_selesai']); ?></td>
                  </tr>
                  <tr>
                    <th>Indomaret</th>
                    <td><?php echo $d['nama_indomaret']; ?></td>
                  </tr>
                  <tr>
                    <th>Isi</th>
                    <td><?php echo $d['isi']; ?></td>
                  </tr>
                <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
