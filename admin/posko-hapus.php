<?php
session_start();
include "class/posko.php";
$posko = new Posko();
$hapus = $posko->hapus($_GET['id']);
if ($hapus) {
  ?>
  <script type="text/javascript">
    alert("Berhasil Menghapus Data");
    window.location = "admin.php?page=posko";
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
