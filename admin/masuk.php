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
            <a href="<?php echo $url.'admin.php?page=masuk&action=tambah'; ?>" class="btn btn-primary"><i class="fa fa-plus"></i> <b>Tambah</b> </a>
            <br>
            <br>
            <table class="table table-bordered table-hover dataTables-example" >
              <thead>
                <tr>
                    <th width="20">No</i></th>
                    <th>Nama</th>
                    <th width="20">Jumlah</i></th>
                    <th width="20">Satuan</i></th>
                    <th>Tanggal Masuk</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $i=1;
                  foreach ($data as $key => $d) { ?>
                    <tr onClick = "top.location.href ='<?php echo $url.'admin.php?page=masuk&action=detail&id='.$d['id_masuk']; ?>'" style="cursor : pointer" </tr>
                    <td><?php echo $i; $i++; ?> </td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['jumlah']; ?></td>
                    <td><?php echo $d['satuan']; ?></td>
                    <td><?php echo my_date($d['tanggal']); ?></td>
                    
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
