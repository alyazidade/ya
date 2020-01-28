<?php
include "class/posko.php";
$posko = new Posko();
$data = $posko->data();
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h1>Data Posko</h1>
  </div>
</div>
<div class="wrapper  animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-content">
          <div class="table-responsive">
            <a href="<?php echo $url.'admin.php?page=posko&action=tambah'; ?>" class="btn btn-primary"><i class="fa fa-plus"></i> <b>Tambah</b> </a>
            <br>
            <br>
            <table class="table table-bordered table-hover dataTables-example" >
              <thead>
                <tr>
                    <th width="20">No</i></th>
                    <th width="200">Nama Posko</i></th>
                    <th>Alamat Posko</th>
                    <th width="100">Nomor Telepon Posko</i></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $i=1;
                  foreach ($data as $key => $d) { ?>
                  <tr onClick = "top.location.href ='<?php echo $url.'admin.php?page=posko&action=detail&id='.$d['id_posko']; ?>'" style="cursor : pointer" </tr>
                    <td><?php echo $i; $i++; ?> </td> 
                    <td><?php echo $d['nama_posko']; ?></td>
                    <td><?php echo $d['alamat_posko']; ?></td>
                    <td><?php echo $d['telp_posko']; ?></td>
                  
                <?php } ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


