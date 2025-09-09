<?php
class Database {
    private static $host = "localhost";
    private static $dbname = "hospital_restauracao";
    private static $user = "root";
    private static $password = ""; // A sua imagem indica que a senha está vazia.

    public static function connect() {
        try {
            $conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$user, self::$password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            die("Falha na conexão com o banco de dados: " . $e->getMessage());
        }
    }
} 