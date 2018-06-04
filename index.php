<?php

$arr = [5,15,1,13,96,72,13,15,0,6];
$temp = "<pre>";
$odd = "";
$even = "";

foreach ($arr as $key => $value) {
    if($value % 2 == 0) {
        $even .= ($value * $value) . " ";
        $arr[$key] = $value * $value;
    }

    if($value % 2 != 0) {
        $odd .= ($value / 2) . " ";
        $arr[$key] = $value / 2;
    }
}

$temp .= "Четные: $even";
$temp .= "\n";
$temp .= "Нечетные: $odd";

$temp .= "</pre>";

echo $temp;

var_dump($arr);
