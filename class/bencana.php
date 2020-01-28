<?php

class Keluar extends Koneksi {

  public function __construct()
  {
    parent::__construct();
  }

  public function data()
  {
    $query = "SELECT * FROM keluar LEFT JOIN posko ON keluar.id_posko = posko.id_posko";

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

  public function data_posko($id_posko)
  {
    $query = "SELECT * FROM keluar WHERE id_posko = '$id_posko'";

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

  public function data_part($page, $limit=9)
  {
    $page -= 1;
    $start = $page * $limit;
    $query = "SELECT p.*, i.nama_posko FROM keluar as p, posko as i WHERE p.id_posko = i.id_posko ORDER BY p.id_keluar DESC LIMIT $start,$limit";

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

  public function data_part_posko($id_posko, $page, $limit=9)
  {
    $page -= 1;
    $start = $page * $limit;
    $query = "SELECT * FROM keluar WHERE id_posko = '$id_posko' ORDER BY id_keluar DESC LIMIT $start,$limit";

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

  public function detail($id_keluar)
  {
    $query = "SELECT p.*, i.nama_posko FROM keluar as p, posko as i WHERE p.id_posko = i.id_posko AND id_keluar = '$id_keluar'";

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
    $query = "INSERT INTO keluar (id_posko, judul, foto, tgl_mulai, tgl_selesai, isi) VALUES ($data)";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return $this->connection->insert_id;
    }
  }

  public function edit($id_keluar, $data)
  {
    $query = "UPDATE keluar SET $data WHERE id_keluar = '$id_keluar'";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return true;
    }
  }

  public function hapus($id_keluar)
  {
    $query = "DELETE FROM keluar WHERE id_keluar = '$id_keluar'";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return true;
    }
  }

}
