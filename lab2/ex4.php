<?php
$n = $_GET['n'];
$s = 0;

for ($i = 1; $i <= $n; $i++) {
    $s += $i * 2;
}

echo "S = " . $s;
