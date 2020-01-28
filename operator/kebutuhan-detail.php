<?php
include "class/kebutuhan.php";
$kebutuhan = new Kebutuhan();
$detail = $kebutuhan->detail($_GET['id']);
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h1>Detail Data kebutuhan</h1>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-content">
          <div class="table-responsive">
            <a href="<?php echo $url.'operator.php?page=kebutuhan'; ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> <b>Kembali</b> </a>
            
            <br>
            <br>
	        <table class="table table">
              <?php foreach ($detail as $key => $d) { ?>
                <tr>
                  <th>Kebutuhan</th>
                  <td><?php echo $d['nama_kebutuhan']; ?></td>
                </tr>
                <tr>
                  <th>Tanggal Keluar</th>
                  <td><?php echo my_date($d['tanggal']); ?></td>
                </tr>
                <tr>
                  <th width="200"></th>
                  <td>
                    <div class="btn-group">
                      <a href="<?php echo $url.'operator.php?page=kebutuhan&action=edit&id='.$d['id_kebutuhan']; ?>" class="btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                    </div>
                      
                    <div class="btn-group">
                      <a href="<?php echo $url.'operator.php?page=kebutuhan&action=hapus&id='.$d['id_kebutuhan']; ?>" class="btn-sm btn-danger" onclick="return(confirm('Apakah Anda Yakin Akan Menghapus Data Ini?'))"><i class="fa fa-trash"></i></a>
                    </div>
                  </td>
                </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>