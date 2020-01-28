<?php
include "class/posko.php";
$posko = new Posko();
$data = $posko->data();
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Data Posko</h2>
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
                    <th>No</th>
                    <th>Nama Posko</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $i=1;
                  foreach ($data as $key => $d) { ?>
                  <tr onClick = "top.location.href ='<?php echo $url.'admin.php?page=posko&action=detail&id='.$d['id_posko']; ?>'" style="cursor : pointer" </tr>
                    <td><?php echo $i ?> </td> 
                    <td><?php echo $d['nama_posko']; ?></td>
                  
                <?php } ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


