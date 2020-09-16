<?php
$str = "Áhoj";
echo $str[0];
echo $str[1];
var_dump(mb_strlen($str));

echo mb_substr($str,0, 1);

//$str[0] = 'A';
//echo $str;
//$str = $str . " Bobe";
//echo $str;
//$str .= ", jak se vede"; //preferovaný způsob
//echo $str;
