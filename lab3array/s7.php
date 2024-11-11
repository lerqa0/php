<?php

// Funcție pentru a crea o coadă (array)
function createQueue($n): array
{
    $queue = [];
    for ($i = 2; $i <= $n; $i++) {
        $queue[] = $i; // Introducem numerele în coadă
    }
    return $queue;
}

// Funcție pentru a verifica dacă un număr este divizibil
function isDivisible($number, $divisor): bool
{
    return $number % $divisor === 0;
}

// Citirea valorii lui n
$n = $_GET['n'];

// PAS 1: Crearea cozii C1 cu numerele de la 2 la n
$queueC1 = createQueue($n);
$queueC2 = []; // Inițializăm coada C2

// PAS 2 și PAS 3: Extragem numerele și eliminăm multiplii
while (!empty($queueC1)) {
    $x = array_shift($queueC1); // Extragem primul element din C1
    $queueC2[] = $x; // Introducem x în coada C2

    // Creăm o coadă temporară pentru a păstra numerele care nu sunt eliminate
    $tempQueue = [];

    // Eliminăm din C1 numerele divizibile cu x
    foreach ($queueC1 as $number) {
        if (!isDivisible($number, $x)) {
            $tempQueue[] = $number; // Păstrăm numerele care nu sunt divizibile
        }
    }

    // Actualizăm coada C1 cu numerele rămase
    $queueC1 = $tempQueue;
}

// Afișăm rezultatul
echo "Numerele prime din intervalul [2, $n] sunt: " . implode(", ", $queueC2) . "<br>";

