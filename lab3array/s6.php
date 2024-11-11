<?php

// Funcție pentru a determina divizorii unui număr
function getDivisors($number): array
{
    $divisors = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $divisors[] = $i;
        }
    }
    return $divisors;
}

// Citirea numerelor a și b
$a = $_GET['a'];
$b = $_GET['b'];

// Obținem divizorii pentru numerele a și b
$divisorsA = getDivisors($a);
$divisorsB = getDivisors($b);

// Inițializăm stivele
$stackS1 = [];
$stackS2 = [];

// Introducem divizorii în stive
foreach ($divisorsA as $divisor) {
    $stackS1[] = $divisor;
}
foreach ($divisorsB as $divisor) {
    $stackS2[] = $divisor;
}

// Calculăm cel mai mare divizor comun
$gcd = 1;
while (!empty($stackS1)) {
    $divisorA = array_pop($stackS1);
    foreach ($stackS2 as $divisorB) {
        if ($divisorA == $divisorB && $divisorA > $gcd) {
            $gcd = $divisorA; // Actualizăm cmmdc-ul
        }
    }
}

// Afișăm rezultatul
echo "Cel mai mare divizor comun al numerelor $a și $b este: $gcd<br>";

