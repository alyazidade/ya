<?php
include "class/keluar.php";
include "class/posko.php";
$keluar = new Keluar();
$posko = new Posko();
$data_posko = $posko->data();
if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $tanggal = $_POST['tanggal'];
  $jumlah = $_POST['jumlah'];
  $id_posko = $_POST['id_posko'];
  $satuan = $_POST['satuan'];

  $data = "'$nama', '$tanggal', '$jumlah', '$satuan', '$id_posko'";
  $tambah = $keluar->tambah($data);
  if ($tambah) {
    header("Location: admin.php?page=keluar&action=detail&id=".$tambah);
  } else {
    $messages = "Gagal Input Data";
  }
}
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h1>Tambah Data Logistik Keluar</h1>
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
              <label class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="nama" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tanggal Masuk Logistik</label>
              <div class="col-sm-8">
                <div class="form-group" id="data_5">
                    <div class="input-group" id="">
                        <input type="date" class="form-control-sm form-control" name="tanggal" value="" />
                    </div>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Jumlah</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="jumlah" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Satuan</label>
              <div class="col-sm-8">
                <select class="form-control" name="satuan">
                  <?php if($satuan == 'Kg') {?>
                            <option selected>Kg</option>
                        <?php }  else {?>
                            <option selected>--- Pilih Satuan---</option>
                        <?php } ?>
                       <option value="Kg">Kg</option>
                       <option value="Lusin">Lusin</option>
                       <option value="Dos">Dos</option>
                       <option value="Karung">Karung</option>

                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tujuan Posko</label>
              <div class="col-sm-8">
                <select class="form-control" name="id_posko">
                  <option value="">--- Pilih Posko ---</option>
                  <?php foreach ($data_posko as $key => $i) { ?>
                    <option value="<?php echo $i['id_posko']; ?>"><?php echo $i['nama_posko']; ?></option>
                  <?php } ?>
                </select>
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
