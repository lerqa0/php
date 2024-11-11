<?php
//echo "ex1<br>";
//$a = 5;
//$b = 10;
//
//$ev = ($a%2==0)&&($b%2==0)||($a%2==1)&&($b%2==1) ? "true" : "false";
//echo $ev;
//
//echo "<br>";
//echo "<br>ex2<br>";
//$x = $_GET['x'];
//$y = $_GET['y'];
//
//$rez = ($x + 1 == $y || $y + 1 == $x) ? "true" : "false";
//echo $rez;
//
//echo "<br>";
//echo "<br>ex3<br>";
//$a = $_GET['a'];
//$b = $_GET['b'];
//$c = $_GET['c'];
//
//$aux = $c;
//$c = $b;
//$b = $a;
//$a = $aux;
//
//echo "a=".$a . " b=" . $b . " c=" . $c . "<br>";
//
//echo "<br>";
//echo "<br>ex4<br>";
//$n = $_GET['n'];
//$s = 0;
//
//for ($i = 1; $i <= $n; $i++) {
//    $s += $i * 2;
//}
//
//echo "S = " . $s;
//
//echo "<br>";
//echo "<br>ex5<br>";
//$a = $_GET['a'];
//$b = $_GET['b'];
//$c = $_GET['c'];
//
//if ($a < $b + $c && $b < $a + $c && $c < $a + $b) {
//    echo "Arie: " . $a + $b + $c . "<br>";
//    $p = (float) ($a + $b + $c) / 2;
//    echo "Perimetru: " . sqrt($p * ($p - $a) * ($p - $b) * ($p - $c)) . "<br>";
//    echo "Tipul triunghiului: ";
//    if ($a == $b && $b == $c && $c == $a) {
//        echo "echilateral <br>";
//    }
//    elseif ($a == $b || $b == $c || $c == $a) {
//        echo "isoscel <br>";
//    }
//    elseif (pow($a, 2) + pow($b, 2) == pow($c, 2) || pow($b, 2) + pow($c, 2) == pow($a, 2) || pow($c, 2) + pow($a, 2) == pow($b, 2)) {
//        echo "dreptunghic <br>";
//    }
//    else echo "scalen <br>";
//}
//else echo "Triunghiul nu exista";
//
//echo "<br>";
//echo "<br>ex7<br>";
//$n = $_GET['n'];
//
//echo $n % 10;
//
//echo "<br>";
//echo "<br>ex8<br>";
//$n = $_GET['n'];
//
//if ($n <= 0) {
//    echo "n trebuie să fie un număr pozitiv.";
//    exit;
//}
//
//$suma = 0;
//$count = 0;
//
//for ($i = -1; $i > -$n; $i -= 2) {
//    $suma += $i;
//    $count++;
//}
//
//if ($count > 0) {
//    $media = (float)$suma / $count;
//    echo "Media aritmetică: " . $media;
//} else {
//    echo "Nu există numere negative impare mai mari decât -$n.";
//}
//
//echo "<br>";
//echo "<br>ex9<br>";
//$a = $_GET['x'];
//$b = $_GET['y'];
//$c = $_GET['z'];
//
//if ($a > $b && $a > $c) $max = $a;
//elseif ($b > $a && $b > $c) $max = $b;
//else $max = $c;
//
//if ($a < $b && $a < $c) $min = $a;
//elseif ($b < $a && $b < $c) $min = $b;
//else $min = $c;
//
//if ($a != $max && $a != $min) $med = $a;
//elseif ($b != $max && $b != $min) $med = $b;
//else $med = $c;
//
//echo "descrescator: " . $max . " " . $med . " " . $min . "<br>";
//
//echo "<br>";
//echo "<br>ex10<br>";
//$a = $_GET['x'];
//$b = $_GET['y'];
//$count = 0;
//
//for ($i = $a; $i <= $b; $i++) {
//    if ($i % 3 == 0) {
//        $count++;
//    }
//}
//
//echo $count;
//
//echo "<br>";
//echo "<br>ex11<br>";
//$a = $_GET['x'];
//$b = $_GET['y'];
//
//if ($a > 0 && $b > 0) {
//    $arie = $a * $b;
//    $perimetru = 2 * ($a + $b);
//    $diagonala = sqrt(pow($a, 2) + pow($b, 2));
//    echo "Arie: " . $arie . "<br>Perimetru: " . $perimetru . "<br>Diagonala: " . $diagonala . "<br>";
//}
//else {
//    echo "Dreptunghiul nu exista";
//}
//
//echo "<br>";
//echo "<br>ex12<br>";
//$a = $_GET['x'];
//
//echo abs($a);
//
//echo "<br>";
//echo "<br>ex13<br>";
//$n = $_GET['x'];
//
//if ($n % 400 == 0) {
//    echo "An bisect";
//}
//else echo "Nu e an bisect";
//
//echo "<br>";
//echo "<br>ex14<br>";
//$n = $_GET['n'];
//$s = 0;
//
//for ($i = 1, $c = 0; $c < $n; $i += 2, $c++) {
//    $s += $i;
//}
//
//echo $s;
//
//echo "<br>";
//echo "<br>ex15<br>";
//$n = $_GET['n'];
//
//if (strlen(strval($n)) == 2) {
//    echo "Da";
//} else {
//    echo "Nu";
//}
$a=5;$b='2';
$c=$a-$b;
echo $c;