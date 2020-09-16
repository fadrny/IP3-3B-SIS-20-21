<?php

$a = 5;


function test() {
    global $a;
    $a++;
 	echo $a;
}


test(); // vypíše 1
var_dump($a);