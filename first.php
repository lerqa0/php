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
//    $a = "Valeria";
//    $b = 4;
//    echo "Ma numesc $a si am $b ani.";
//
//    $var = 2;
//    $v = "3";
//    $c = $var <=> $v;
//    echo "<br> $c";

//$x = 4;
//$y = 5;
//$A = 2 + $x - $y;
//$B = $x * $A + $y;
//$C = $A - 2 * $B + $x;
//echo "$A <br> $B <br> $C";

//$ziua=2;
//echo $ziua;
//echo "<br>";
//switch ($ziua) {
//    case 1: echo "Luni"; break;
//    case 2: echo "Marti"; break;
//    case 3: echo "Miercuri"; break;
//    case 4: echo "Joi"; break;
//    case 5: echo "Vineri"; break;
//    case 6: echo "Sambata"; break;
//    case 7: echo "Duminica"; break;
//}

//$i=2;
//switch($i) {
//    case 0: echo "i este egal cu 0"; break;
//    case 1: echo "i este egal cu 1"; break;
//    case 2: echo "i este egal cu 2"; break;
//    default: echo "i nu este egal cu 0,1,2";
//}

//if(!isset($_GET['pag'])) $_GET['pag'] = '';
//switch($_GET['pag']) {
//    case '': echo 'Pagina first.php'; break;
//    case 'pagina1': echo 'Pagina first.php?pag=pagina1'; break;
//    case 'pagina2': echo 'Pagina first.php?pag=pagina2'; break;
//}

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
//echo "max = " . $max . " min = " . $min . "<br>";
//
//if ($a != $max && $a != $min) $med = $a;
//elseif ($b != $max && $b != $min) $med = $b;
//else $med = $c;
//
//echo "descrescator: " . $max . " " . $med . " " . $min . "<br>";
//echo "crescator: " . $min . " " . $med . " " . $max . "<br>";

//$a = 1;
//echo "Nr pare> ";
//while ($a <= 100) {
//    if ($a % 2 == 0) {
//        echo "$a ";
//    }
//    $a++;
//}
//
//$a = 1;
//echo "<br> Nr impare> ";
//while ($a <= 100) {
//    if ($a % 2 != 0) {
//        echo "$a ";
//    }
//    $a++;
//}

for ($i=1; $i<=15; $i++):
    echo "<strong><font size=5 ";
    echo "color=";
    if ( !($i%2) )
        echo"red";
    elseif (!($i%3))
        echo"green";
    else
        echo"blue";
    echo">$i</font></strong>";
endfor;
?>
</body>
</html>
