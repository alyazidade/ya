<?php
include "class/user.php";
include "class/posko.php";
$user = new User();
$posko = new Posko();
$detail = $user->detail($_GET['id']);
$data_posko = $posko->data();
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $nama = $_POST['nama'];
  $id_posko = $_POST['id_posko'];

  $data = "username = '$username', password = '$password', nama = '$nama', id_posko = '$id_posko'";
  $edit = $user->edit($_GET['id'], $data);
  if ($edit) {
    header("Location: admin.php?page=operator&action=detail&id=".$username);
  } else {
    $messages = "Gagal Edit Data";
  }
}
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h1>Ubah Data Operator</h1>
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
                <label class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="username" value="<?php echo $d['username']; ?>" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="password" value="<?php echo $d['password']; ?>" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>" required>
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Posko</label>
                <div class="col-sm-8">
                  <select class="form-control" name="id_posko">
                    <option value="">--- Pilih Posko ---</option>
                    <?php foreach ($data_posko as $key => $i) { ?>
                      <option value="<?php echo $i['id_posko']; ?>" <?php if($i['id_indomaret']==$d['id_posko']){echo "selected";} ?>><?php echo $i['nama_posko']; ?></option>
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
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
