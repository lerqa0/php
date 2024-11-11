<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greeting</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="background">
    <?php
    // Obține ora și minutul curent
    date_default_timezone_set('Europe/Chisinau'); // setează fusul orar
    $hour = date("H");
    $minutes = date("i");

    // Funcție pentru a adăuga 0 în fața numerelor mai mici de 10
    function add0($number) {
        return ($number < 10) ? '0' . $number : $number;
    }

    // Afisează ora curentă
    $time = "$hour : $minutes";

    // Setează mesajul și fundalul în funcție de ora curentă
    $message = '';
    $backgroundImage = '';

    if ($hour >= 7 && $hour < 11) {
        $message = "Bună Dimineața";
        $backgroundImage = "sources/morning.png";
    } elseif ($hour >= 11 && $hour < 18) {
        $message = "Bună Ziua";
        $backgroundImage = "sources/day.png";
    } elseif ($hour >= 18 && $hour < 22) {
        $message = "Bună Seara";
        $backgroundImage = "sources/evening.png";
    } elseif ($hour >= 22 && $hour <= 23) {
        $message = "Noapte Bună";
        $backgroundImage = "sources/night.png";
    } elseif ($hour >= 0 && $hour < 7) {
        $message = "De ce nu dormi? <br> Mâine ai Programarea Web";
        $backgroundImage = "sources/web.png";
    }
    ?>

    <p id="hour"><?= $time ?></p>
    <p id="message"><?= $message ?></p>
</div>
<style>
    /* CSS-ul rămâne la fel */
    @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap');

    * {
        margin: 0;
        padding: 0;
    }

    #background {
        height: 100vh;
        width: 100%;
        background-image: url('<?php echo $backgroundImage; ?>');
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    p {
        text-align: center;
        font-weight: bold;
        color: #3d1906;
    }

    #hour {
        margin-top: 100px;
        font-size: 100px;
        font-family: "Digital-7 Mono", sans-serif;
    }

    #message {
        font-size: 80px;
        font-family: "Space Grotesk", sans-serif;
        color: <?= ($hour >= 22 || $hour < 7) ? '#ffedb7' : '#3d1906' ?>;
    }
</style>

</body>
</html>
