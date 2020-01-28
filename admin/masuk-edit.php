<?php
include "class/masuk.php";
$masuk = new Masuk();
$detail = $masuk->detail($_GET['id']);

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $tanggal = $_POST['tanggal'];
  $jumlah = $_POST['jumlah'];

  $data = "'$nama','$tanggal','$jumlah'";
  $edit = $masuk->edit($_GET['id'], $data);
  if ($edit) {
    header("Location: admin.php?page=masuk&action=detail&id=".$id_masuk);
  } else {
    $messages = "Gagal Edit Data";
  }
}
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h1>Ubah Data Logistik Masuk</h1>
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
                <label class="col-sm-2 col-form-label">Nama Logistik Masuk</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tanggal Logistik Masuk</label>
                <div class="col-sm-8">
                  <div class="form-group" id="data_5">
                    <div class="input-group" id="">
                      <input type="date" class="form-control-sm form-control" name="tanggal" value="<?php echo $d['tanggal']; ?>" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jumlah Logistik Masuk</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="jumlah" value="<?php echo $d['jumlah']; ?>" required>
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
