<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livrare Comandă</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Mesajul de livrare are id-ul "text" și este ascuns inițial -->
<h1 id="text" style="display: none;">
    <?php
    date_default_timezone_set('Europe/Chisinau');

    // Obține data și ora curente
    $currentDate = new DateTime();

    // Definește zilele de sărbători
    $holidaysRM = [
        '2024-01-01', // 1 ianuarie - Anul Nou
        '2024-01-07', // 7 ianuarie - Crăciunul pe stil vechi
        '2024-01-08', // 8 ianuarie - A doua zi de Crăciun pe stil vechi
        '2024-03-08', // 8 martie - Ziua internațională a femeilor
        '2024-05-05', // Paștele
        '2024-05-06', // A doua zi de Paște
        '2024-08-27', // 27 august - Ziua Independenței
        '2024-08-31', // 31 august - Limba Noastră
        '2024-12-25'  // 25 decembrie - Crăciunul pe stil nou
    ];

    // Funcție pentru a seta data de livrare pentru ziua următoare la ora 8:00
    function setTomorrow($date) {
        $date->modify('+1 day');
        $date->setTime(8, 0);
        return $date;
    }

    // Funcție pentru a obține numele lunii
    function getTextMonth($month): string
    {
        $months = [
            'Ianuarie', 'Februarie', 'Martie', 'Aprilie', 'Mai', 'Iunie',
            'Iulie', 'August', 'Septembrie', 'Octombrie', 'Noiembrie', 'Decembrie'
        ];
        return $months[$month - 1];
    }

    // Funcție pentru a stabili ziua de livrare
    function getShippingDay($date, $holidays): string
    {
        // Verifică dacă data este o zi de sărbătoare
        while (in_array($date->format('Y-m-d'), $holidays) || $date->format('N') >= 6 || $date->format('H') >= 12) {
            // Dacă e sâmbătă, duminică sau după ora 12:00, setează pentru ziua următoare
            $date = setTomorrow($date);
        }
        // Returnează mesajul cu data de livrare
        return "Comanda va fi livrată la data: " . $date->format('d') . " " . getTextMonth($date->format('m')) . " " . $date->format('Y');
    }

    // Afișează ziua de livrare
    echo getShippingDay($currentDate, $holidaysRM);
    ?>
</h1>
<button id="button">
    Comanda
</button>

<script>
    // JavaScript pentru afișarea mesajului când se apasă butonul
    document.getElementById("button").addEventListener("click", function() {
        document.getElementById("text").style.display = "block";
        this.style.display = "none";
    });
</script>
</body>
</html>
