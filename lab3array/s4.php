<?php
// Tabloul NOTE cu 28 de note aleatorii între 1 și 10
$note = [9, 8, 7, 9, 6, 5, 9, 10, 8, 7, 6, 5, 8, 7, 6, 9, 10, 8, 7, 6, 5, 9, 10, 8, 7, 6, 5, 4];

// Determinarea frecvenței notelor fără funcții predefinite
$freq = [];
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $freq[$i] = 0; // Inițializăm frecvența fiecărei note cu 0
}

for ($i = 0; $i < count($note); $i++) {
    $freq[$note[$i]]++;  // Incrementăm frecvența fiecărei note întâlnite
    $sum += $note[$i];   // Calculăm suma notelor
}

// Afișăm frecvența fiecărei note
echo "Frecvența notelor (fără funcții predefinite): <br>";
for ($i = 1; $i <= 10; $i++) {
    echo "Nota $i apare de " . $freq[$i] . " ori.<br>";
}

// Calculăm și afișăm media aritmetică
$media = $sum / count($note);
echo "Media aritmetică a clasei este: " . $media . "<br>";


// ---------------------------------------------
echo "<br>";
// Determinarea frecvenței notelor cu funcția array_count_values()
$freq = array_count_values($note);

// Afișăm frecvența fiecărei note
echo "Frecvența notelor (cu funcții predefinite): <br>";
for ($i = 1; $i <= 10; $i++) {
    $count = $freq[$i] ?? 0;
    echo "Nota $i apare de " . $count . " ori.<br>";
}

// Calculăm și afișăm media aritmetică cu funcția array_sum()
$sum = array_sum($note);
$media = $sum / count($note);
echo "Media aritmetică a clasei este: " . $media . "<br>";

