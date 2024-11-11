<?php
// Generăm tablourile A și B cu valori aleatorii și citim valoarea lui poz
$n = $_GET['n'];  // Dimensiunea tabloului A
$m = $_GET['m'];  // Dimensiunea tabloului B
$poz = $_GET['poz']; // Poziția de inserare

// Generăm tabloul A
for ($i = 0; $i < $n; $i++) {
    $a[$i] = rand(-10, 10);
}

// Generăm tabloul B
for ($i = 0; $i < $m; $i++) {
    $b[$i] = rand(-10, 10);
}

echo 'Tabloul A inițial: ' . implode(', ', $a) . '<br>';
echo 'Tabloul B: ' . implode(', ', $b) . '<br>';

// Dacă poziția este mai mare decât numărul elementelor din A, adăugăm B la sfârșit
if ($poz > $n) {
    $poz = $n;
}

// Inserăm elementele din B în A începând de la poziția dată
array_splice($a, $poz, 0, $b);

echo 'Tabloul A după inserarea lui B la poziția ' . $poz . ': ' . implode(', ', $a) . '<br>';

