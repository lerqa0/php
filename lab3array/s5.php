<?php

// Citim numărul de aruncări din parametrii GET
$n = $_GET['n'];

// Inițializăm tabloul pentru a stoca valorile aruncărilor și frecvențele fiecărei fețe (1-6)
$aruncari = [];
$freq = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0];

// Simulăm aruncarea zarului de N ori
for ($i = 0; $i < $n; $i++) {
    $zar = rand(1, 6); // Generăm o valoare aleatoare între 1 și 6
    $aruncari[] = $zar; // Stocăm aruncarea în tabloul $aruncari
    $freq[$zar]++; // Incrementăm frecvența feței corespunzătoare
}

// Afișăm valorile obținute la fiecare aruncare
echo "Valorile obținute la aruncările zarului: " . implode(", ", $aruncari) . "<br>";

// Afișăm frecvența de apariție a fiecărei fețe a zarului
echo "Frecvența de apariție a fiecărei fețe:<br>";
for ($i = 1; $i <= 6; $i++) {
    echo "Fața $i a apărut de " . $freq[$i] . " ori.<br>";
}

