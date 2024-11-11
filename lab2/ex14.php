<?php
$n = $_GET['x'];
$s = 0;

for ($i = 1, $c = 0; $c < $n; $i += 2, $c++) {
    $s += $i;
}

echo $s;
