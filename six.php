<?php

include ("./four.php");

$sql = "select * from students";
$result = $conn->query($sql);

echo "<pre>";
print_r($result);

// if ($result->num_rows > 0){

// while($row = $result->fetch_assoc())
//     echo "<pre>";
//     print_r($row);
// }

    if($result-> num_rows > 0){
        while($row = $result->fetch_assoc()){
            

    echo "<pre>";
    print_r($row);
        }
    }
?>