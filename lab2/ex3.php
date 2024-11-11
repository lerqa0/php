<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

$aux = $c;
$c = $b;
$b = $a;
$a = $aux;

echo "a=".$a . " b=" . $b . " c=" . $c . "<br>";

