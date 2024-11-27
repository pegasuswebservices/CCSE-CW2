<?php


$host = "sql207.infinityfree.com";
$dbname="if0_37577160_login_db";
$username="if0_37577160";
$password="k4EXLLsy4w";

$mysqli = new mysqli($host, $username, $password, $dbname);

if($mysqli->connect_errno){
    die('Connection Error:' . $mysqli->mysqli_connect_error);
}


return $mysqli;





















?>