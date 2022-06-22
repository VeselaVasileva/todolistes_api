<?php
namespace repository;


 class DBConnection {
    private static $connection = null;
    private static string $dbName = 'todolists';
    private static string $host = 'localhost';
    private static string $dbUser = 'root';
    private static string $dbPswd = '';

    private function __construct()
    {   }

    private function init() {
        try
        {
            return new \PDO("mysql:host=".self::$host.";port=3307;dbname=".self::$dbName, self::$dbUser, self::$dbPswd);
        } catch (Exception $e) {
            die("Impossible de se connecter à la base de données : " . $e->getMessage());
        }
    }
    public static function getDBConnection() {
        self::$connection = is_null(self::$connection) ? (new DBConnection())->init() : self::$connection;
        return self::$connection;
    }
 }

 ?>