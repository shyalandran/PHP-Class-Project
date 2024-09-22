<?php
session_start();
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

print("SESSION:-\n");
print_r($_SESSION);

print("a is created");
$a = 100;

if ($a) {
    print("a exist");
} else {
    $a = time();
    print("a is created");
}
