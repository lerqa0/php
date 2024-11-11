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

$sum = 0;
$min = 101;
$max = -1;
$indexMin = 0;
$indexMax = 0;
$countDivizor = 0;
$countPrime = 0;
for ($i = 0; $i < $n; $i++) {
    $sum += $array[$i];
    if ($array[$i] < $min) {
        $min = $array[$i];
        $indexMin = $i;
    }
    if ($array[$i] > $max) {
        $max = $array[$i];
        $indexMax = $i;
    }
    for ($j = 1; $j <= $array[$i]; $j++) {
        if ($array[$i] % $j == 0) {
            $countDivizor++;
        }
    }
    if ($countDivizor == 2)
        $countPrime++;
    $countDivizor = 0;
}

echo "<br>Suma elementelor: " . $sum . "<br>";
echo "Elem max: " . $max . " Indexul: " . $indexMax . "<br>";
echo "Elem min: " . $min . " Indexul: " . $indexMin . "<br>";
echo "Nr elem prime: ". $countPrime . "<br>";