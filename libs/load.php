<?php

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