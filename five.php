<?php

include ("./four.php");

$date = date("y-m-d H:i:s");

// $sql = "insert into students (name,email,password,create-at)  values
// ('shayan','shayan@gmail.com','1596','$date')";

$sql = "insert into students (name , email , password ,created_at) values 
('wahab' , 'wahab@gmail.com' , '752' , '$date')";

$result = $conn->query($sql);

if ($result == true){
    echo "<h1>your file is inserted</h1>";
}
?>