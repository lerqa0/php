<?php
$n = $_GET['n'];

if ($n <= 0) {
    echo "n trebuie să fie un număr pozitiv.";
    exit;
}

$suma = 0;
$count = 0;

for ($i = -1; $i > -$n; $i -= 2) {
    $suma += $i;
    $count++;
}

if ($count > 0) {
    $media = (float)$suma / $count;
    echo "Media aritmetică: " . $media;
} else {
    echo "Nu există numere negative impare mai mari decât -$n.";
}
