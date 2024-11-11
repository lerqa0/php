<?php
$a = $_GET['x'];
$b = $_GET['y'];
$c = $_GET['z'];

if ($a > $b && $a > $c) $max = $a;
elseif ($b > $a && $b > $c) $max = $b;
else $max = $c;

if ($a < $b && $a < $c) $min = $a;
elseif ($b < $a && $b < $c) $min = $b;
else $min = $c;

if ($a != $max && $a != $min) $med = $a;
elseif ($b != $max && $b != $min) $med = $b;
else $med = $c;

echo "descrescator: " . $max . " " . $med . " " . $min . "<br>";
