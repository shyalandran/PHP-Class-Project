<?php
include_once "includes/Database.class.php";
include_once "includes/User.class.php";

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
    
    
    
}