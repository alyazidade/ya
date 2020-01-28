<?php

class User extends Koneksi {

  public function __construct()
  {
    parent::__construct();
  }

  public function login($username, $password)
  {
    $query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    }

    $row = $result->num_rows;

    if($row == 1){
      while ($rows = $result->fetch_assoc()) {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $rows['username'];
        $_SESSION['nama'] = $rows['nama'];
        $_SESSION['level'] = $rows['level'];
        $_SESSION['id_posko'] = $rows['id_posko'];
        $level = $rows['level'];
      }
      return $level;
    } else {
      return false;
    }
  }

  public function logout()
  {
    session_start();
    session_destroy();
    return true;
  }

  public function data()
  {
    $query = "SELECT * FROM user LEFT JOIN posko ON user.id_posko = posko.id_posko WHERE user.level = 'operator'";

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

  public function detail($username)
  {
    $query = "SELECT * FROM user LEFT JOIN posko ON user.id_posko = posko.id_posko WHERE username = '$username'";

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
    $query = "INSERT INTO user (username, password, nama, level, id_posko) VALUES ($data)";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return true;
    }
  }

  public function edit($username, $data)
  {
    $query = "UPDATE user SET $data WHERE username = '$username'";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return true;
    }
  }

  public function hapus($username)
  {
    $query = "DELETE FROM user WHERE username = '$username'";

    $result = $this->connection->query($query);
    if ($result == false) {
      return false;
    } else {
      return true;
    }
  }
}
