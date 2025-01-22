<?php
include '../includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']); // Asigură-te că ID-ul este valid

    // Execută ștergerea logică
    $query = "DELETE FROM items WHERE id= ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo '<script>alert("Item deleted successfully!"); window.location.href="../index.php";</script>';
    } else {
        echo '<script>alert("Failed to delete item."); window.location.href="../index.php";</script>';
    }

    $stmt->close();
    $con->close();
}


