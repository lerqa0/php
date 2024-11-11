<?php
$n = $_GET['n'];

for ($i = 0; $i < $n; $i++) {
    $array[$i] = rand(-10, 10);
}

echo 'Array-ul initial: ' . implode(',', $array) . '<br>';

//a
$min = 51;
for ($i = 0; $i < $n; $i++) {
    if ($array[$i] < $min)
        $min = $array[$i];
}

echo 'Elem. min.: ' . $min . '<br>';

//b
$max = 0;
for ($i = 0; $i < $n; $i++) {
    if ($array[$i] > $max)
        $max = $array[$i];
}

echo 'Elem. max.: ' . $max . '<br>';

//c
$test = 0;
for ($i = 0; $i < $n - 1; $i++) {
    if ($array[$i] < $array[$i + 1])
        $test++;
}

if ($test == $n - 1)
    echo 'Elem. sunt sortate crescator';
else echo 'Elem. nu sunt sortate crescator';

//d
echo '<br>';
$sum = 0;
$count = 0;
for ($i = 1; $i < $n; $i += 2) {
    if ($array[$i] > 0) {
        $sum += $array[$i];
        $count++;
    }
}

if ($count == 0)
    echo 'Elementele nu satisfac conditiei. <br>';
else echo 'Media aritmetica: ' . $sum/$count . '<br>';

//e
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

echo "Array-ul sortat crescator cu bubbleSort: " . implode(", ", $array);

//f
for ($i = 1; $i < $n; $i++) {
    $aux = $array[$i];
    $j = $i - 1;

    while ($j >= 0 && $array[$j] < $aux) {
        $array[$j + 1] = $array[$j];
        $j = $j - 1;
    }
    $array[$j + 1] = $aux;
}

echo "<br>Array-ul sortat descrescator cu insertie: " . implode(", ", $array);

//g
$min = min($array);
$max = max($array);
$count = array_fill($min, $max - $min + 1, 0);

for ($i = 0; $i < $n; $i++) {
    $count[$array[$i]]++;
}

$index = 0;
for ($i = $min; $i <= $max; $i++) {
    while ($count[$i] > 0) {
        $array[$index++] = $i;
        $count[$i]--;
    }
}

echo "<br>Array-ul sortat crescator prin numarare: " . implode(", ", $array);

// h
$value = $_GET['x'];
$found = false;

for ($i = 0; $i < $n; $i++) {
    if ($array[$i] == $value) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "<br>Valoarea $value există în tablou.";
} else {
    echo "<br>Valoarea $value nu există în tablou.";
}

// i
$multime = true;

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
        if ($array[$i] == $array[$j]) {
            $multime = false;
            break 2;
        }
    }
}

if ($multime) {
    echo "<br>Tabloul poate fi considerat o mulțime";
} else {
    echo "<br>Tabloul nu poate fi considerat o mulțime";
}

// j
$searchedValue = $_GET['x'];
$stanga = 0;
$dreapta = $n - 1;
$gasit = false;

while ($stanga <= $dreapta) {
    $mijloc = floor(($stanga + $dreapta) / 2);

    if ($array[$mijloc] == $searchedValue) {
        $gasit = true;
        break;
    } elseif ($array[$mijloc] < $searchedValue) {
        $stanga = $mijloc + 1;
    } else {
        $dreapta = $mijloc - 1;
    }
}

if ($gasit) {
    echo "<br>Valoarea $searchedValue a fost găsită în tablou folosind căutarea binară.";
} else {
    echo "<br>Valoarea $searchedValue nu a fost găsită în tablou folosind căutarea binară.";
}
