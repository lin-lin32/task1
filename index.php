<?php

$arr = [5,15,1,13,96,72,13,15,0,6];
$temp = "<pre>";
$odd = "";
$even = "";

foreach ($arr as $value) {
    if($value % 2 == 0){
        $even .= ($value * $value) . " ";
    }
    if($value % 2 != 0){
        $odd .= ($value / 2) . " ";
    }
}

$temp .= "Четные: $even";
$temp .= "\n";
$temp .= "Нечетные: $odd";
$temp .= "</pre>";

echo $temp;
