<pre>

<?php
    include "libs/load.php";
    // print("globle");
    // print_r($GLOBALS);
    // print("SERVER:-");
    // print_r($_SERVER);
    // print("REQUEST:-");
    // print_r($_REQUEST);
    // print("post:-");
    // print_r($_POST);
    // print("get:-");
    // print_r($_GET);
    // print("file");
    // print_r($_FILES)
    if(signup("shylu1", "12345", "shylu1@test.com", "11223355")) {
        echo "successfully" ;
    } else {
        echo "faild" ;
    }
        
    
    
?>

</pre>