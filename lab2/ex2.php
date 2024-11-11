<?php
$x = $_GET['x'];
$y = $_GET['y'];

$rez = ($x + 1 == $y || $y + 1 == $x) ? "true" : "false";
echo $rez;
