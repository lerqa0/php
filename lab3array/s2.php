<?php
$n = $_GET['n'];

// Generăm array-urile X și Y cu valori aleatorii între -10 și 10
for ($i = 0; $i < $n; $i++) {
    $x[$i] = rand(-10, 10);
    $y[$i] = rand(-10, 10);
}

echo 'Array-ul X: ' . implode(',', $x) . '<br>';
echo 'Array-ul Y: ' . implode(',', $y) . '<br>';

// a) Calculați suma S = X[1]*Y[1] + … + X[N]*Y[N]
$sum = 0;
for ($i = 0; $i < $n; $i++) {
    $sum += $x[$i] * $y[$i];
}
echo 'Suma produselor: ' . $sum . '<br>';

// b) Determinați intersecția mulțimilor X și Y
$intersection = array_intersect($x, $y);
echo 'Intersecția: ' . implode(', ', $intersection) . '<br>';

// c) Determinați reuniunea mulțimilor X și Y
$union = array_unique(array_merge($x, $y));
echo 'Reuniunea: ' . implode(', ', $union) . '<br>';

// d) Determinați numărul elementelor din Y care apar cel puțin o dată în X
$countInX = 0;
foreach ($y as $element) {
    if (in_array($element, $x)) {
        $countInX++;
    }
}
echo 'Numărul elementelor din Y care apar în X: ' . $countInX . '<br>';

// e) Determinați dacă elementele din X reprezintă un subșir al lui Y
$isSubsequence = true;
$j = 0;
for ($i = 0; $i < $n && $isSubsequence; $i++) {
    while ($j < count($y) && $x[$i] != $y[$j]) {
        $j++;
    }
    if ($j == count($y)) {
        $isSubsequence = false;
    }
    $j++;
}

if ($isSubsequence) {
    echo 'X este un subșir al lui Y.<br>';
} else {
    echo 'X nu este un subșir al lui Y.<br>';
}

// f) Sortați tablourile și aplicați algoritmul de interclasare
sort($x);
sort($y);

$mergedArray = [];
$i = $j = 0;

while ($i < count($x) && $j < count($y)) {
    if ($x[$i] < $y[$j]) {
        $mergedArray[] = $x[$i];
        $i++;
    } else {
        $mergedArray[] = $y[$j];
        $j++;
    }
}

while ($i < count($x)) {
    $mergedArray[] = $x[$i];
    $i++;
}

while ($j < count($y)) {
    $mergedArray[] = $y[$j];
    $j++;
}

echo 'Tablourile interclasate: ' . implode(', ', $mergedArray);
?>
