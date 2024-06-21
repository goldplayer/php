<?php

class Database
{

    private static $instance = null;
    private $connection;

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'test';

    // Приватный конструктор для предотвращения создания нескольких экземпляров
    private function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Ошибка подключения: " . $this->connection->connect_error);
        }
    }

    // Метод для получения экземпляра класса
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    // Метод для получения соединения
    public function getConnection() {
        return $this->connection;
    }

}