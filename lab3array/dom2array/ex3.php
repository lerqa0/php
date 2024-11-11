<?php
$n = $_GET['n'];
function generateRandomArray($n): array
{
    $array = [];
    for ($i = 0; $i < $n; $i++) {
        $array[] = rand(0, 100);
    }
    return $array;
}

$array = generateRandomArray($n);

echo "Array-ul initial: " . implode(", ", $array);
//for ($i = 0; $i < $n; $i++) {
//    echo "$array[$i] ";
//}

$consecutiv = false;
for ($i = 0; $i < $n - 2; $i++) {
    if ($array[$i] + 1 == $array[$i + 1] && $array[$i + 1] + 1 == $array[$i + 2]) {
        $consecutiv = true;
    }
    if ($array[$i] == $array[$i + 1] + 1 && $array[$i + 1] == $array[$i + 2] + 1) {
        $consecutiv = true;
    }
}

echo "<br>";
if ($consecutiv) {
    echo "Da";
}
else echo "Nu";