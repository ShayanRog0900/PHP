<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personal";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if (!$conn){
    die("Connection Failed");
}

?>