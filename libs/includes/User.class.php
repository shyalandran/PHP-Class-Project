<?php

class User {

    public static function signup($username, $password, $email, $phone) {
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
}