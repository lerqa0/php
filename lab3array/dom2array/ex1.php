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

do {
    $flag = false;
    for ($i = 0; $i < $n - 1; $i++) {
        if ($array[$i] > $array[$i + 1]) {
            $aux = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $aux;
            $flag = true;
        }
    }
} while ($flag);

echo "<br>Array-ul sortat crescator: " . implode(", ", $array);
//for ($i = 0; $i < $n; $i++) {
//    echo "$array[$i] ";
//}

do {
    $flag = false;
    for ($i = 0; $i < $n - 1; $i++) {
        if ($array[$i] < $array[$i + 1]) {
            $aux = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $aux;
            $flag = true;
        }
    }
} while ($flag);

echo "<br>Array-ul sortat descrescator: " . implode(", ", $array);
//for ($i = 0; $i < $n; $i++) {
//    echo "$array[$i] ";
//}