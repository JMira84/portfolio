<?php
class Base {
    protected $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=portfolio;charset=utf8mb4", "root", "");
    }
}