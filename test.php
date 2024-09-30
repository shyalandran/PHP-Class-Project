<pre>

<?php
    include "libs/load.php";

    
    // if(signup("shylu1", "12345", "shylu1@test.com", "11223355")) {
    //     echo "successfully" ;
    // } else {
    //     echo "faild" ;
    // }
    // $conn = Database::getConnection();
    
    // $result = mysqli_query($conn, "SELECT * FROM `auth` WHERE 1");
    // $result = $conn->query("SELECT `id`, `username` FROM `auth`");
    // if ($result->num_rows > 0) {
    //     // Output data of each row
    //     while ($row = $result->fetch_assoc()) {
    //         print_r($row);  // This will print the entire row as an associative array
    //     }
    // } else {
    //     echo "No results found";
    // }

    $conn = User::login("test2","123");
    $result = null;
    if(Session::get(isset($_SESSION["is_logedin"]))) { 
        echo "alteady logedin";
        $result = Session::get($_SESSION["user_login"]);
    } else { 
        echo "session not exist";
        Session::set("is_logedin","true");
        Session::set("user_login","$conn");
        $result = Session::get($_SESSION["user_login"]);
    }

    if ($rsult) {
        echo"success";
    } else {
        echo "error";
    }
    
?>

</pre>