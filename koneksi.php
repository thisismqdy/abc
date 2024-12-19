<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "dbperpus";
    protected $connection;

    public function __construct() {
        
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
            if ($this->connection->connect_error) {
                throw new Exception("Connection failed: " . $this->connection->connect_error);
            }
        } 
    }

    Class Buku extends Database {
        public function tampilBuku() {
            $sql = "SELECT * FROM buku";
            $result = $this->connection->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }

    class LokerBuku extends Buku {
        public function tampilLoker($loker) {
            $sql = "SELECT * FROM buku WHERE loker_buku ='" . $loker . "'";
            $result = $this->connection->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }

?>