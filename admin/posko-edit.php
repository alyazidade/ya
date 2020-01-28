<?php
include "class/posko.php";
$posko = new Posko();
$detail = $posko->detail($_GET['id']);

if(isset($_POST['submit'])){
  $nama_posko = $_POST['nama_posko'];
  $alamat_posko = $_POST['alamat_posko'];
  $telp_posko = $_POST['telp_posko'];

  $data = "nama_posko = '$nama_posko', alamat_posko = '$alamat_posko', telp_posko = '$telp_posko', id_posko = '$id_posko'";
  $edit = $posko->edit($_GET['id'], $data);
  if ($edit) {
    header("Location: admin.php?page=posko&action=detail&id=".$id_posko);
  } else {
    $messages = "Gagal Edit Data";
  }
}
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h1>Ubah Data Posko</h1>
  </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox ">
        <div class="ibox-content">
          <?php if($messages) {
            echo "<h4 align='center' class='text-danger'><b>".$messages."</b></h4>";
            echo "<hr>";
          } ?>
          <?php foreach ($detail as $key => $d) { ?>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Posko</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama_posko" value="<?php echo $d['nama_posko']; ?>" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat Posko</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="alamat_posko" value="<?php echo $d['alamat_posko']; ?>" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nomor Telepon Posko</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="telp_posko" value="<?php echo $d['telp_posko']; ?>" required>
                </div>
              </div>

              <div class="hr-line-dashed"></div>
              <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4 col-sm-offset-2">
                  <button class="btn btn-primary btn-md" type="submit" name="submit">Simpan</button>
                </div>
              </div>
            </form>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
