<?php

// 1. Se consideră un şir de caractere. Să se determine raportul dintre numărul vocalelor şi numărul cifrelor din şir.
function raportVocaleCifre($sir): float|int|string
{
    $numarVocale = preg_match_all('/[aeiouAEIOU]/', $sir);
    $numarCifre = preg_match_all('/[0-9]/', $sir);

    return $numarCifre > 0 ? $numarVocale / $numarCifre : "Nu există cifre în șir.";
}

$sir1 = "Ionel are 10 lei noi";
echo "1. Raport vocale/cifre pentru '$sir1': " . raportVocaleCifre($sir1) . "\n";

// 2. Se consideră un şir de caractere. Să se determine poziţia primului caracter litera mare din acest şir.
function pozitiePrimaLiteraMare($sir): int|string
{
    for ($i = 0; $i < strlen($sir); $i++) {
        if (ctype_upper($sir[$i])) {
            return $i + 1;
        }
    }
    return "Nu există litere mari în șir.";
}

$sir2 = "tatal lui Gigel merge la Metrou";
echo "<br> 2. Poziția primei litere mari pentru '$sir2': " . pozitiePrimaLiteraMare($sir2) . "\n";

// 3. Se consideră un şir de caractere. Să se afişeze numărul vocalelor aflate pe poziţii impare în şirul dat.
function numarVocalePozitiiImpare($sir): int
{
    $numarVocale = 0;
    for ($i = 0; $i < strlen($sir); $i++) {
        if ($i % 2 == 0 && preg_match('/[aeiouAEIOU]/', $sir[$i])) {
            $numarVocale++;
        }
    }
    return $numarVocale;
}

$sir3 = "mama spala vase";
echo "<br> 3. Număr vocale pe poziții impare pentru '$sir3': " . numarVocalePozitiiImpare($sir3) . "\n";

// 4. Se consideră un şir de caractere. Să se determine poziţia ultimului caracter cifră din acest text.
function pozitieUltimaCifra($sir): int|string
{
    for ($i = strlen($sir) - 1; $i >= 0; $i--) {
        if (ctype_digit($sir[$i])) {
            return $i + 1;
        }
    }
    return "Nu există cifre în șir.";
}

$sir4 = "2+3 fac cinci";
echo "<br> 4. Poziția ultimei cifre pentru '$sir4': " . pozitieUltimaCifra($sir4) . "\n";

// 5. Se consideră un şir de caractere format doar din litere. Să se determine procentul literelor mari din acest şir.
function procentLitereMari($sir): string
{
    $numarLitereMari = preg_match_all('/[A-Z]/', $sir);
    $totalLitere = strlen($sir);
    return $totalLitere > 0 ? ($numarLitereMari / $totalLitere) * 100 . "%" : "Șirul este gol.";
}

$sir5 = "euMERg";
echo "<br> 5. Procent litere mari pentru '$sir5': " . procentLitereMari($sir5) . "\n";

// 6. Se consideră un şir de caractere S şi două caractere C1 şi C2. Să se verifice dacă numărul de apariţii ale caracterului C1 în S este egal cu numărul de apariţii ale caracterului C2 în S.
function egalitateAparitiiCaractere($sir, $c1, $c2): string
{
    $numarC1 = substr_count($sir, $c1);
    $numarC2 = substr_count($sir, $c2);

    return $numarC1 == $numarC2 ? "Da" : "Nu";
}

$sir6 = "aurul alb";
$c1 = $_GET['c1'] ?? 'a';
$c2 = $_GET['c2'] ?? 'u';
echo "<br> 6. Egalitate apariții caractere '$c1' și '$c2' în '$sir6': " . egalitateAparitiiCaractere($sir6, $c1, $c2) . "\n";

// 7. Funcții pentru criptarea și decriptarea unui text prin deplasarea literelor cu K poziții în codul ASCII
function cripteazaText($text, $k): string
{
    $textCriptat = '';
    for ($i = 0; $i < strlen($text); $i++) {
        $caracter = $text[$i];
        if (ctype_alpha($caracter)) {
            $offset = ctype_upper($caracter) ? ord('A') : ord('a');
            $textCriptat .= chr($offset + (ord($caracter) - $offset + $k) % 26);
        } else {
            $textCriptat .= $caracter;
        }
    }
    return $textCriptat;
}

function decripteazaText($text, $k): string
{
    return cripteazaText($text, 26 - $k);
}

$text = "acasa";
$k = $_GET['k'] ?? 1;
echo "<br> 7. Text criptat pentru '$text' cu K=$k: " . cripteazaText($text, $k) . "\n";
echo "<br> 7. Text decriptat: " . decripteazaText(cripteazaText($text, $k), $k) . "\n";

// 8. Piramida alfabetică
function afiseazaPiramida($n): string
{
    $output = '';
    for ($i = 0; $i < $n; $i++) {
        $char = chr(ord('A') + $i);
        $output .= str_repeat($char . ' ', $i + 1) . "<br>";
    }
    return $output;
}

$n = $_GET['n'] ?? 3;
echo "<br> 8. Primele $n linii din piramidă: <br>" . afiseazaPiramida($n);

// 9. Listă de adrese e-mail distincte, ordonate alfabetic
function listeazaAdreseDistincte($adrese): array
{
    $lista = array_unique(array_map('trim', explode(',', $adrese)));
    sort($lista);
    return $lista;
}

$adrese = "test1@example.com, test2@example.com, test1@example.com, test3@example.com";
echo "9. Adrese distincte pentru '$adrese': <br>";
foreach (listeazaAdreseDistincte($adrese) as $adresa) {
    echo "$adresa <br>";
}

// 10. Numele serverului cu cele mai multe conturi și cel mai frecvent nume de utilizator
function serverPopularSiUserFrecvent($adrese): array
{
    $servere = [];
    $utilizatori = [];
    $adreseUnice = array_map('trim', explode(',', $adrese));
    foreach ($adreseUnice as $adresa) {
        list($utilizator, $server) = explode('@', $adresa);
        $servere[$server] = ($servere[$server] ?? 0) + 1;
        $utilizatori[$utilizator] = ($utilizatori[$utilizator] ?? 0) + 1;
    }
    $serverPopular = array_search(max($servere), $servere);
    $userFrecvent = array_search(max($utilizatori), $utilizatori);
    return ["Server" => $serverPopular, "User" => $userFrecvent];
}

echo "10. Server și utilizator frecvent pentru '$adrese':<br>";
foreach (serverPopularSiUserFrecvent($adrese) as $adresa) {
    echo "$adresa <br>";
}

// 11. Extrage și sortează cuvintele după lungime și alfabet
function extrageCuvinteSortate($text): array|false
{
    $cuvinte = preg_split('/[\s,.;?!]+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    usort($cuvinte, function ($a, $b) {
        return strlen($a) === strlen($b) ? strcmp($a, $b) : strlen($a) - strlen($b);
    });
    return $cuvinte;
}

$text11 = "Aceasta este o propoziție, cu mai multe cuvinte!";
echo "11. Cuvinte sortate pentru '$text11': <br>";
foreach (extrageCuvinteSortate($text11) as $text) {
    echo "$text <br>";
}

// 12. Salariu minim, maxim și listele de angajați aferente
function salariiExtremum($salarii): array
{
    $salariuMinim = min($salarii);
    $salariuMaxim = max($salarii);
    $angajatiMinim = array_keys($salarii, $salariuMinim);
    $angajatiMaxim = array_keys($salarii, $salariuMaxim);
    return [
        "Salariu Minim" => $salariuMinim,
        "Angajați Minim" => $angajatiMinim,
        "Salariu Maxim" => $salariuMaxim,
        "Angajați Maxim" => $angajatiMaxim
    ];
}

$salarii = [
    "Ion" => 3000,
    "Maria" => 4500,
    "Ana" => 3000,
    "Vasile" => 6000,
    "George" => 6000
];
$result12 = salariiExtremum($salarii);
echo "12. <br>";
echo "Salariu Minim: " . $result12["Salariu Minim"] . "<br>";
echo "Angajați cu salariu minim:<br>";
foreach ($result12["Angajați Minim"] as $angajat) {
    echo "$angajat<br>";
}
echo "Salariu Maxim: " . $result12["Salariu Maxim"] . "<br>";
echo "Angajați cu salariu maxim:<br>";
foreach ($result12["Angajați Maxim"] as $angajat) {
    echo "$angajat<br>";
}

// 13. Construiește un tablou T cu grupuri de câte X caractere din S
function imparteSirul($s, $x): array
{
    $t = [];
    $lungime = strlen($s);
    for ($i = 0; $i < $lungime; $i += $x) {
        $t[] = substr($s, $i, $x);
    }
    return $t;
}

$s = "Acesta este un exemplu de text.";
$x = $_GET['x'] ?? 5;
echo "13. Tabloul T pentru șirul '$s' cu X=$x caractere:<br>";
foreach (imparteSirul($s, $x) as $index => $segment) {
    echo "T[$index]: $segment<br>";
}

// 14. Determină soluțiile ecuațiilor de gradul 1 dintr-un șir
function solutieEcuatie($a, $b): float|int|string
{
    if ($a == 0) {
        if ($b == 0) {
            return "x aparține lui R"; // Ecuație identică
        } else {
            return "nu are soluție"; // Ecuație imposibilă
        }
    }
    return -$b / $a; // Soluția ecuației de forma ax + b = 0
}

function rezolvaEcuatii($s): array
{
    $ecuatii = explode(',', $s);
    $rezultate = [];
    foreach ($ecuatii as $index => $ec) {
        // Extragem coeficienții folosind expresii regulate
        preg_match('/([+-]?\d*)x\s*([+-]?\d+)?\s*=\s*0/', str_replace(' ', '', $ec), $matches);
        $a = isset($matches[1]) && $matches[1] !== '' ? (int) $matches[1] : 1;
        $b = isset($matches[2]) ? (int) $matches[2] : 0;
        $solutie = solutieEcuatie($a, $b);
        $rezultate[] = "Ecuația " . ($index + 1) . " are soluția: $solutie";
    }
    return $rezultate;
}

$s_ecuatii = "2x+4=0, x-2=0, -3x-6=0, 2=0, 0x+0=0";
echo "14. Soluțiile ecuațiilor din șirul '$s_ecuatii':<br>";
foreach (rezolvaEcuatii($s_ecuatii) as $rezultat) {
    echo $rezultat . "<br>";
}
