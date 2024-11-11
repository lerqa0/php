<?php
$a = $_GET['x'];
$b = $_GET['y'];

if ($a > 0 && $b > 0) {
    $arie = $a * $b;
    $perimetru = 2 * ($a + $b);
    $diagonala = sqrt(pow($a, 2) + pow($b, 2));
    echo "Arie: " . $arie . "<br>Perimetru: " . $perimetru . "<br>Diagonala: " . $diagonala . "<br>";
}
else {
    echo "Dreptunghiul nu exista";
}
