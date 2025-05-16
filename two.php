<?php
// create tablr from loops
$table=9;
for($i = 1;$i<=10;$i++){
    echo "<br> $table x $i=" .$table*$i."<br>";
}

// arry

$crypto =["btc","xrp","doge","etc","algo"];
// echo "<br>".$crypto [2];

foreach ($crypto as $cryptos){
    echo "<br>".$cryptos."<br>";
}


?>