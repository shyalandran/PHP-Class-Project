<?php

class Database {
    public static $conn = null;

    public static function getConnection() {
        if (Database::$conn == null) {
            $servername = 'localhost';
            $dbusername = 'root';
            $dbpassword = '';
            $dbname = 'newdb';

            // Create connection
            $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                printf("new connection");
                Database::$conn = $conn;
                return Database::$conn;
            }
        } else {
            printf("exection connection");
            return Database::$conn;
        }
        
    }

}