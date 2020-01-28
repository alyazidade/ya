<?php
include "class/user.php";
include "class/posko.php";
$user = new User();
$posko = new Posko();
$data_posko = $posko->data();
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama = $_POST['nama'];
  $id_posko = $_POST['id_posko'];
  $level = 'operator';

  $data = "'$username', '$password', '$nama', '$level', '$id_posko'";
  $tambah = $user->tambah($data);
  if ($tambah) {
    header("Location: admin.php?page=operator&action=detail&id=".$username);
  } else {
    $messages = "Gagal Input Data";
  }
}
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h1>Tambah Data Operator</h1>
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
              <label class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="username" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="password" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nama Petugas</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="nama" required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Posko</label>
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
