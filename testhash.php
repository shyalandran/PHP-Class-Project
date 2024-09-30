<?php

$pass = isset($_GET['pass']) ? $_GET['pass'] : "itisatestpass";

echo md5($pass);