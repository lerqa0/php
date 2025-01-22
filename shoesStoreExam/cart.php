<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    if ($action === 'clear') {
        $_SESSION['cart'] = [];
    } else {
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];

        $conn = new mysqli('localhost', 'root', '', 'magazin');
        if ($conn->connect_error) {
            die("Conexiunea a esuat: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM incaltaminte WHERE id = $id";
        $result = $conn->query($sql);
        $product = $result->fetch_assoc();

        if ($product) {
            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['quantity'] += $quantity;
            } else {
                $_SESSION['cart'][$id] = [
                    'name' => $product['brand'],
                    'price' => $product['pret'],
                    'quantity' => $quantity,
                ];
            }
        }

        $conn->close();
    }
}

$total_items = 0;
$total_price = 0;
foreach ($_SESSION['cart'] as $item) {
    $total_items += $item['quantity'];
    $total_price += $item['quantity'] * $item['price'];
}

echo json_encode([
    'total_items' => $total_items,
    'total_price' => $total_price
]);
exit;
?>