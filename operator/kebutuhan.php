<?php
include "class/kebutuhan.php";
$kebutuhan = new Kebutuhan();
$data = $kebutuhan->data();
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h1>Data Kebutuhan</h1>
  </div>
</div>
<div class="wrapper  animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-content">
          <div class="table-responsive">
            <a href="<?php echo $url.'operator.php?page=kebutuhan&action=tambah'; ?>" class="btn btn-primary"><i class="fa fa-plus"></i> <b>Tambah</b> </a>
            <br>
            <br>
            <table class="table table-bordered table-hover dataTables-example" >
              <thead>
                <tr>
                    <th width="20">No</i></th>
                    <th>Nama</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $i=1;
                  foreach ($data as $key => $d) { ?>
                  <tr onClick = "top.location.href ='<?php echo $url.'operator.php?page=kebutuhan&action=detail&id='.$d['id_kebutuhan']; ?>'" style="cursor : pointer" </tr>
                    <td><?php echo $i; $i++; ?> </td> 
                    <td><?php echo $d['nama_kebutuhan']; ?></td>
                  
                <?php } ?>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


