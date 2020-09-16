<?php

for ($i = 1; $i <= 10; ++$i) {
    print $i;
}

echo "<br><br>";
$cislo = "1";

switch($cislo) {
    case 1:
        echo "malo";
    case 2:
        echo "akorat";
        break;
    case 3:
    case 4:
        echo "moc";
        break;
    default:
        echo "???";
}
