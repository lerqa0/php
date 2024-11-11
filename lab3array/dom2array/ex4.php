<?php


$n = $_GET['n'];

function generateRandomArray($n): array
{
    $array = [];
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            $array[$i][$j] = rand(0, 100); // Generăm numere între 0 și 100
        }
    }
    return $array;
}

function printMatrix($matrix, $n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo $matrix[$i][$j] . " ";
        }
        echo "<br>";
    }
}

$a = generateRandomArray($n);

echo "Matricea inițială:<br>";
printMatrix($a, $n);

$minSum = PHP_INT_MAX;
$bestPermutation = [];

// Generăm toate permutările de coloane folosind algoritmul backtracking
function permute($arr, $l, $r, &$a, &$minSum, &$bestPermutation, $n)
{
    if ($l == $r) {
        // Calculăm suma elementelor de pe diagonala principală pentru această permutare de coloane
        $currentSum = 0;
        for ($i = 0; $i < $n; $i++) {
            $currentSum += $a[$i][$arr[$i]]; // Elementul pe diagonală după permutare
        }

        // Verificăm dacă această permutare oferă o sumă mai mică
        if ($currentSum < $minSum) {
            $minSum = $currentSum;
            $bestPermutation = $arr;
        }
    } else {
        for ($i = $l; $i <= $r; $i++) {
            // Schimbăm coloanele
            $arr = swap($arr, $l, $i);
            permute($arr, $l + 1, $r, $a, $minSum, $bestPermutation, $n);
            $arr = swap($arr, $l, $i); // Revenim la starea inițială
        }
    }
}

// Funcția pentru schimbarea elementelor
function swap($arr, $i, $j)
{
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
    return $arr;
}

// Vectorul inițial de coloane (0, 1, 2, ..., n-1)
$columns = [];
for ($i = 0; $i < $n; $i++) {
    $columns[] = $i;
}

// Generăm permutările pentru coloane și găsim suma minimă
permute($columns, 0, $n - 1, $a, $minSum, $bestPermutation, $n);

echo "<br>Suma minimă de pe diagonala principală este: " . $minSum . "<br>";

echo "Permutarea optimă a coloanelor:<br>";
for ($i = 0; $i < $n; $i++) {
    echo $bestPermutation[$i] . " ";
}

echo "<br>Matricea după permutarea coloanelor:<br>";
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        echo $a[$i][$bestPermutation[$j]] . " ";
    }
    echo "<br>";
}



