<?php

$arr = [0, 4.3, "Karel"];

var_dump($arr);


$assoc = [
    "name" => "Franta",
    "age" => 29,
    "wage" => 39000.50
];

var_dump($assoc);

echo $assoc["wage"];

$arr2 = [
    "a",
    8 => "b",
    6 => "c",
    "d"
];

$arr2[] = "e";
$arr2[3] = "f";

var_dump($arr2);

$arr3 = array(1, 2, 3, 4);
foreach ($arr3 as $value) {
    echo "$value <br>";
}

foreach ($arr3 as $key => $value) {
    echo "$key : $value <br>";
}

