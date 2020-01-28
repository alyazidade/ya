<?php

class Fasilitas_indomaret extends Koneksi {

  public function __construct()
  {
    parent::__construct();
  }

  public function data($id_indomaret)
  {
    $query = "SELECT * FROM fasilitas_indomaret as i, fasilitas as f WHERE i.id_fasilitas = f.id_fasilitas AND i.id_indomaret = '$id_indomaret'";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      $rows = array();
      while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
      }
      return $rows;
    }
  }

  public function simpan($data)
  {
    $query = "INSERT INTO fasilitas_indomaret (id_indomaret, id_fasilitas) VALUES ($data)";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return true;
    }
  }

  public function hapus($id_indomaret)
  {
    $query = "DELETE FROM fasilitas_indomaret WHERE id_indomaret = '$id_indomaret'";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return true;
    }
  }
}
