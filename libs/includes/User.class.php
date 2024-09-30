<?php

class User {
    private $conn;

    public static function signup($username, $password, $email, $phone) {
        $password = md5($password);
        $conn = Database::getConnection();
        // Assuming $username, $password, $email, $phone are defined elsewhere
        
        $sql = "INSERT INTO auth (`username`, `password`, `email`, `phone`, `blocked`, `active`)
        VALUES ('$username', '$password', '$email', '$phone', '0', '1')";
        
        $error = false;
        
        if ($conn->query($sql)) {
            $error = false;
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
            $error = $conn->error;
        }

        $conn->close();
        return $error;
    }

    public static function login($username, $password) {
        $password = md5($password);
        $sql = "SELECT * FROM `auth` WHERE `username` = '$username'";
        $conn = Database::getConnection();
        $result = $conn->query($sql);
        if ($result->num_rows == 1) { 
            $row = $result->fetch_assoc();
            if ($row["password"] == $password) {
                return $row;
            } else {
                return false;
            }
        } else { 
            echo "error";
        }

        

    }

    public function __construct($username)
    {
        $this->conn = Database::getConnection();
        $this->conn->query();
    }
}