<?php

// switch cases

$day = "monday";             

switch($day){
    case "monday":
        echo "<br> Today Is Monday : ".$day;
            break;
}

switch($day){
    case "tuesday":
        echo "<br> Today Is tuesday : ".$day;
            break;
}

switch($day){
    case "wednesday":
        echo "<br> Today Is wednesday : ".$day;
            break;
}

switch($day){
    case "thursday":
        echo "<br> Today Is thursday : ".$day;
            break;
}

switch($day){
    case "friday":
        echo "<br> Today Is friday : ".$day;
            break;
}

switch($day){
    case "saturday":
        echo "<br> Today Is saturday : ".$day;
            break;
}

switch($day){
    case "sunday":
        echo "<br> Today Is sunday : ".$day;
            break;
}

$student =[

"std-name" => "hammad",
"std-age" => "18",
"std-iscnic" => " 0-123456- 852 -9",
"std-city" => "karachi",

];


// foreach ($student as $s){
//     echo "<br>".$s."<br>";
// }

echo "<pre>";
print_r($student);

$students = [

["std-name" => "hammad","std-age" => "18","std-iscnic" => " 0-123456-852-9","std-company" => "shan-food-masala"],
["std-name" => "shayan","std-age" => "18","std-iscnic" => " 0-123156-256-9","std-company" => "shan-food-masala"],
["std-name" => "usama","std-age" => "18","std-iscnic" => "  0-156599-852-9","std-company" => "shan-food-masala"],
["std-name" => "wahab","std-age" => "18","std-iscnic" => "  0-159631-852-9","std-company" => "shan-food-masala"],
];


// foreach ($students as $key => $values){
//     foreach ( $values as $k => $v){
//         echo "<br>".$k."<br>".$v."<br>";
// }
// }

echo "<pre>";
print_r($students);

?>