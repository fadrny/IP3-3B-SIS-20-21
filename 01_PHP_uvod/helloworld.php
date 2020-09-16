<?php
header('Content-Type: text/html; charset=windows-1250');
$author = "já";
define("JMENO", "Karel");
//define("JMENO", "Eman");
$a = 'b';
$b = 'c';
$c = 'a';
?>
<html>
<head>
    <meta name="author" content="<?=$author?>">

<!--    <meta charset="windows-1250">-->
    <meta http-equiv="Content-type" content="text/html; charset=windows-1250" />

    <title>PHP7 Test</title>
</head>
<body>
<?php
echo '<p>Hello World</p>';
echo "<pre>asdf\n\n\nrge\nsed</pre>";
echo '<p>Hello World</p>';
echo "<p>Hello World {$author}</p>". JMENO;
var_dump($author);
?>
</body>
</html>