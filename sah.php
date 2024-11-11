<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de șah</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 50px auto;
            border: 1px solid black;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
            font-size: 20px;
        }
        .white {
            background-color: #fff;
        }
        .black {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body>
<table>
    <?php
    // Generăm tabla de șah
    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col++) {
            // Alternăm culorile în funcție de rând și coloană
            if (($row + $col) % 2 == 0) {
                echo "<td class='white'></td>"; // Celulă albă
            } else {
                echo "<td class='black'></td>"; // Celulă neagră
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
