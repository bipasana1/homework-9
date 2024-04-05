<?php

namespace app\core;

use PDO;
use PDOException;

trait Database {
    private $host = 'localhost'; // Change this to your database host if it's not localhost
    private $dbname = 'homework_9'; // Change this to your database name
    private $username = 'your_username'; // Change this to your database username
    private $password = 'your_password'; // Change this to your database password
    private $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    protected $conn;

    public function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
            $this->conn = new PDO($dsn, $this->root, $this->root, $this->options);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function query($query) {
        return $this->conn->query($query);
    }

    public function queryWithParams($query, $params) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }

    public function fetchAll($query) {
        return $this->conn->query($query)->fetchAll();
    }
}
