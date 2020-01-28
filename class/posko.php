<?php

class posko extends Koneksi {

  public function __construct()
  {
    parent::__construct();
  }

  public function data()
  {
    $query = "SELECT * FROM posko";

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
    $query = "SELECT * FROM posko LIMIT $start,$limit";

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

  public function detail($id_posko)
  {
    $query = "SELECT * FROM posko WHERE id_posko = '$id_posko'";

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
    $query = "INSERT INTO posko (nama_posko, alamat_posko, telp_posko) VALUES ($data)";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return $this->connection->insert_id;
    }
  }

  public function edit($id_posko, $data)
  {
    $query = "UPDATE posko SET $data WHERE id_posko = '$id_posko'";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return true;
    }
  }

  public function hapus($id_posko)
  {
    $query = "DELETE FROM posko WHERE id_posko = '$id_posko'";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return true;
    }
  }

}
