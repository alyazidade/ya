<?php

class Masuk extends Koneksi {

  public function __construct()
  {
    parent::__construct();
  }

  public function data()
  {
    $query = "SELECT * FROM masuk";

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

  public function detail($id_masuk)
  {
    $query = "SELECT * FROM masuk WHERE id_masuk = '$id_masuk'";

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

  public function tambah($data)
  {
    $query = "INSERT INTO masuk (nama, tanggal, jumlah) VALUES ($data)";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return $this->connection->insert_id;
    }
  }

  public function edit($id_masuk, $data)
  {
    $query = "UPDATE masuk SET $data WHERE id_masuk = '$id_masuk'";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return true;
    }
  }

  public function hapus($id_masuk)
  {
    $query = "DELETE FROM masuk WHERE id_masuk = '$id_masuk'";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return true;
    }
  }

}
