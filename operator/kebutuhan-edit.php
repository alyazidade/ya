<?php
include "class/kebutuhan.php";
$kebutuhan = new Kebutuhan();
$detail = $kebutuhan->detail($_GET['id']);

if(isset($_POST['submit'])){
  $kebutuhan = $_POST['kebutuhan'];
  $tanggal = $_POST['tanggal'];

  $data = "'$kebutuhan','$tanggal'";
  $edit = $kebutuhan->edit($_GET['id'], $data);
  if ($edit) {
    header("Location: operator.php?page=kebutuhan&action=detail&id=".$edit);
  } else {
    $messages = "Gagal Edit Data";
  }
}
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h1>Ubah Data Kebutuhan</h1>
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
                  <input type="text" class="form-control" name="nama_kebutuhan" value="<?php echo $d['nama_kebutuhan']; ?>" required>
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
