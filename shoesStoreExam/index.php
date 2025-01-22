<?php
$conn = new mysqli('localhost', 'root', '', 'magazin');
if ($conn->connect_error) {
    die("Conexiunea a esuat: " . $conn->connect_error);
}

$sql = "SELECT * FROM incaltaminte";
$result = $conn->query($sql);

session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$total_items = 0;
$total_price = 0;
foreach ($cart as $item) {
    $total_items += $item['quantity'];
    $total_price += $item['quantity'] * $item['price'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magazin</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function updateCart(totalItems, totalPrice) {
            document.getElementById('total_items').textContent = totalItems;
            document.getElementById('total_price').textContent = "$" + totalPrice.toFixed(2);
        }

        async function handleCartUpdate(form) {
            const formData = new FormData(form);
            const response = await fetch('cart.php', {
                method: 'POST',
                body: formData
            });
            const data = await response.json();
            updateCart(data.total_items, data.total_price);
        }

        async function clearCart() {
            const response = await fetch('cart.php?action=clear', {
                method: 'POST'
            });
            const data = await response.json();
            updateCart(data.total_items, data.total_price);
        }
    </script>
</head>
<body>
    <h1>Magazin</h1>
    <hr>
    <div class="container">
        <div class="products">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="product">
                    <img src="resource/item<?php echo $row['id']; ?>.jpg" alt="<?php echo $row['brand']; ?>" class="product-image">
                    <h3 class="brand"><?php echo $row['brand']; ?> - $<?php echo $row['pret']; ?></h3>
                    <p><?php echo $row['descriere']; ?></p>
                    <form onsubmit="event.preventDefault(); handleCartUpdate(this);">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="number" name="quantity" value="1" min="1" max="<?php echo $row['cantitate']; ?>" class="quantity">
                        <button type="submit">Adauga in cos</button>
                    </form>
                </div>
            <?php } ?>
        </div>
        <div class="cart">
            <h3>Cos</h3>
            <p>Total produse: <span id="total_items"><?php echo $total_items; ?></span></p>
            <p>Total: <span id="total_price">$<?php echo number_format($total_price, 2); ?></span></p>
            <button class="cos-btn" onclick="clearCart()">Goleste cosul</button>
            <button class="cos-btn">Comanda acum</button>
        </div>
    </div>
</body>
</html>
<?php $conn->close(); ?>