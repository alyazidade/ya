<?php
include "class/user.php";
$user = new User();
$detail = $user->detail($_GET['id']);
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h1>Detail Data Operator</h1>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-content">
          <div class="table-responsive">
            <a href="<?php echo $url.'admin.php?page=operator'; ?>" class="btn btn-primary"><i class="fa fa-arrow-left"></i> <b>Kembali</b> </a>
            <br>
            <br>
            <table class="table table-hover">
              <?php foreach ($detail as $key => $d) { ?>
                <tr>
                  <th>Username</th>
                  <td><?php echo $d['username']; ?></td>
                </tr>
                <tr>
                  <th>Password</th>
                  <td><?php echo $d['password']; ?></td>
                </tr>
                <tr>
                  <th>Nama Petugas</th>
                  <td><?php echo $d['nama']; ?></td>
                </tr>
                <tr>
                  <th>Posko</th>
                  <td><?php echo $d['nama_posko']; ?></td>
                </tr>
                <tr>
                  <th width="200"></th>
                  <td>
                    <div class="btn-group">
                      <a href="<?php echo $url.'admin.php?page=operator&action=edit&id='.$d['username']; ?>" class="btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                    </div>
                      
                    <div class="btn-group">
                      <a href="<?php echo $url.'admin.php?page=operator&action=hapus&id='.$d['username']; ?>" class="btn-sm btn-danger" onclick="return(confirm('Apakah Anda Yakin Akan Menghapus Data Ini?'))"><i class="fa fa-trash"></i></a>
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
