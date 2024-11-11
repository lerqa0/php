<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Înmulțirii</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fff;
        }
        .container {
            display: flex;
            border: 2px solid #006400;
            background-color: white;
        }
        .books {
            width: 180px;
            background-color: #006400;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }
        .apple {
            width: 120px;
            position: absolute;
            margin-top: -500px;
            margin-left: 100px;
        }
        .book-el {
            margin-top: 200px;
            margin-left: 20px;
            height: 460px;
        }
        .books div {
            width: 40px;
            height: 10px;
        }

        table {
            border-collapse: collapse;
            margin: 30px 40px;
        }
        th, td {
            border: 1px solid black;
            width: 50px;
            height: 40px;
            text-align: center;
            font-size: 18px;
        }
        th {
            background-color: #ff6f6f;
        }
        .header {
            margin-top: 20px;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="books">
        <img src="./apple.png" alt="apple" class="apple">
        <img src="./book.png" alt="books" class="book-el">
    </div>
    <div>
        <div class="header">Tabla Înmulțirii</div>
        <table>
            <tr>
                <th>x</th>
                <?php
                for ($i = 0; $i <= 12; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
            <?php
            for ($i = 0; $i <= 12; $i++) {
                echo "<tr>";
                echo "<th>$i</th>";
                for ($j = 0; $j <= 12; $j++) {
                    $r = $i * $j;
                    echo "<td>$r</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>
