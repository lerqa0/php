<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

if ($a < $b + $c && $b < $a + $c && $c < $a + $b) {
    echo "Arie: " . $a + $b + $c . "<br>";
    $p = (float) ($a + $b + $c) / 2;
    echo "Perimetru: " . sqrt($p * ($p - $a) * ($p - $b) * ($p - $c)) . "<br>";
    echo "Tipul triunghiului: ";
    if ($a == $b && $b == $c && $c == $a) {
        echo "echilateral <br>";
    }
    elseif ($a == $b || $b == $c || $c == $a) {
        echo "isoscel <br>";
    }
    elseif (pow($a, 2) + pow($b, 2) == pow($c, 2) || pow($b, 2) + pow($c, 2) == pow($a, 2) || pow($c, 2) + pow($a, 2) == pow($b, 2)) {
        echo "dreptunghic <br>";
    }
    else echo "scalen <br>";
}
else echo "Triunghiul nu exista";