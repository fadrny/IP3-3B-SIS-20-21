<?php

$a = "";
$b = "";

//$who = $a ? $a : "Nobody";
//$who = $a ?: $b ?: "Nobody";
//$who = $a ?: "Nobody";
$who = $a ?? "Nobody";


var_dump($who);

