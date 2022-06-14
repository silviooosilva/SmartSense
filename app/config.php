<?php

/* DATABASE */

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "smartads_2";
$conn = mysqli_connect($server, $user, $pass, $dbname);





$pdo = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass, array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
));
