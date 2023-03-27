<?php

$table = [1,2,3,4,5,6,7,8,9,10];
$array = [3, 5, 8, 12];


foreach($array as $value) {
    foreach($table as $value2){
        $outcome = $value * $value2;
        echo $value, " x ", $value2, " = ", $outcome, "<br>";
    }
}

