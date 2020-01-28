<?php
include "class/kebutuhan.php";
$kebutuhan = new Kebutuhan();

if(isset($_POST['submit'])){
  $nama_kebutuhan = $_POST['nama_kebutuhan'];
  $tanggal = $_POST['tanggal'];

  $data = "'$nama_kebutuhan', '$tanggal'";
  $tambah = $kebutuhan->tambah($data);
  if ($tambah) {
    header("Location: operator.php?page=kebutuhan&action=detail&id=".$tambah);
  } else {
    $messages = "Gagal Input Data";
  }
}
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h1>Tambah Data Kebutuhan</h1>
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
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Kebutuhan</label>
              <div class="col-sm-8">
                <textarea class="form-control" name="nama_kebutuhan" required></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
              <div class="col-sm-8">
                <div class="form-group" id="data_5">
                    <div class="input-group" id="">
                        <input type="date" class="form-control-sm form-control" name="tanggal" value="" />
                    </div>
                </div>
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
        </div>
      </div>
    </div>
  </div>
</div>
