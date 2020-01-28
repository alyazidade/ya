<?php

class kebutuhan extends Koneksi {

  public function __construct()
  {
    parent::__construct();
  }

  public function data()
  {
    $query = "SELECT * FROM kebutuhan JOIN tersedia JOIN posko WHERE kebutuhan.id_posko = tersedia.id_posko";

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


  public function data_part($page, $limit=5)
  {
    $page -= 1;
    $start = $page * $limit;
    $query = "SELECT * FROM kebutuhan LIMIT $start,$limit";

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

  public function detail($id_kebutuhan)
  {
    $query = "SELECT * FROM kebutuhan WHERE id_kebutuhan = '$id_kebutuhan'";

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
    $query = "INSERT INTO kebutuhan(nama_kebutuhan, tanggal) VALUES ($data)";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return $this->connection->insert_id;
    }
  }

  public function edit($id_kebutuhan, $data)
  {
    $query = "UPDATE kebutuhan SET $data WHERE id_kebutuhan = '$id_kebutuhan'";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return true;
    }
  }

  public function hapus($id_kebutuhan)
  {
    $query = "DELETE FROM kebutuhan WHERE id_kebutuhan = '$id_kebutuhan'";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return true;
    }
  }

}
