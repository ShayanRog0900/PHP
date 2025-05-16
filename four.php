<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "papers";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn){
    echo "connection has been succesfull";
}

?>