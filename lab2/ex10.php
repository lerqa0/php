<?php
$a = $_GET['x'];
$b = $_GET['y'];
$count = 0;

for ($i = $a; $i <= $b; $i++) {
    if ($i % 3 == 0) {
        $count++;
    }
}

echo $count;
