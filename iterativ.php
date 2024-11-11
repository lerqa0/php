<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//1
echo "ex1<br>";
$k = $_GET['k'];
$n = $_GET['n'];

for ($i = 0; $i < $n; $i++) {
    echo $k;
}

//4
echo "<br>";
echo "<br>ex4<br>";
$zi_nastere = 26;
$luna_nastere = 3;
$an_nastere = 2005;

$zi_curent = 8;
$luna_curent = 10;
$an_curent = 2024;

$ani = $an_curent - $an_nastere;

$luni = $luna_curent - $luna_nastere;

if ($luni < 0) {
    $ani = $ani - 1;
    $luni = $luni + 12;
}

$zile = $zi_curent - $zi_nastere;

if ($zile < 0) {
    $luni = $luni - 1;
    $zile = $zile + 30;
}

echo "Ani: " . $ani . "<br>";
echo "Luni: " . $luni . "<br>";
echo "Zile: " . $zile . "<br>";

//5
echo "<br>ex5<br>";
$numar = 0;

for ($i = 1; $i <= 9; $i++) {
    $numar = $numar * 10 + $i;

    $rezultat = $numar * 9 + ($i + 1);

    echo "$numar * 9 + " . ($i + 1) . " = $rezultat<br>";
}

//6
echo "<br>ex6<br>";
$n = $_GET['n'];

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
?>
</body>
</html>
