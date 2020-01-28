<?php
include "class/masuk.php";
$masuk = new Masuk();
$data = $masuk->data();
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h1>Data Logistik Masuk</h1>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-content">
          <div class="table-responsive">
            <a href="<?php echo $url.'operator.php?'; ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> <b>Kembali</b> </a>
            <br>
            <br>
            <table class="table table-bordered table-hover dataTables-example" >
              <thead>
                <tr>
                    <th width="20">No</i></th>
                    <th>Nama</th>
                    <th>Tanggal Masuk</th>
                    <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $i=1;
                  foreach ($data as $key => $d) { ?>
                    <tr onClick = "top.location.href ='<?php echo $url.'operator.php?page=masuk&action=detail&id='.$d['id_masuk']; ?>'" style="cursor : pointer" </tr>
                    <td><?php echo $i; $i++; ?> </td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo my_date($d['tanggal']); ?></td>
                    <td><?php echo $d['jumlah']; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
