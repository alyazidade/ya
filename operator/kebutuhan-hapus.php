<?php
session_start();
include "class/kebutuhan.php";
$kebutuhan = new Kebutuhan();
$hapus = $kebutuhan->hapus($_GET['id']);
if ($hapus) {
  ?>
  <script type="text/javascript">
    alert("Berhasil Menghapus Data");
    window.location = "operator.php?page=kebutuhan";
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
