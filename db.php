<?php

class DB {
  private $dbHost = "URL";
  private $dbUser = "user";
  private $dbPassword = "password";
  private $dbName = "database";
  private $conn;

  public function __construct() {
    try{
      $dsn = "mysql:host=" . $this->dbHost . ";dbname=". $this->dbName;
      $this->conn = new PDO($dsn, $this->dbUser, $this->dbPassword);
    } catch (PDOException $e) {
      die("DB Connection failed: " . $e->getMessage());
    }
  }

  public function getData() {
    $sql = "SELECT initdata FROM alpine_test WHERE id = 1";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
  }

  public function setData($newValue) {
    $sql = "UPDATE alpine_test SET initdata = :initdata WHERE id = 1"; 
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['initdata' => $newValue]);
    echo "data updated";
}

}

?>