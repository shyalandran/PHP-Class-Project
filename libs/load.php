<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

function load_template($name){
    include $_SERVER["DOCUMENT_ROOT"]."/loginapp/_templates/$name.php";

}

function validate_creadentials($email, $pass) {
    if ($email == "abc@gmail.com") {
        return true;
    } else {
        return false;
    }
}

function signup($username, $password, $email, $phone) {
    $servername = 'localhost';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'newdb';

    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

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