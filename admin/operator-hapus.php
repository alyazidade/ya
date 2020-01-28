<?php
session_start();
include "class/user.php";
$user = new User();
$hapus = $user->hapus($_GET['id']);
if ($hapus) {
  ?>
  <script type="text/javascript">
    alert("Berhasil Menghapus Data");
    window.location = "admin.php?page=operator";
  </script>
  <?php
} else {
  ?>
  <script type="text/javascript">
    alert("Gagal Menghapus Data");
    window.location = "<?php echo $_SERVER['HTTP_REFERER']; ?>";
  </script>
  <?php
}
?>
