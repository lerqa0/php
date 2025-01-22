<?php
// File: upload_download_tool.php

// Configuration
$uploadDir = 'uploads/';

// Ensure the upload directory exists
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $uploadPath = $uploadDir . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
        $message = "File uploaded successfully!";
    } else {
        $message = "Failed to upload file.";
    }
}

// Handle file deletion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_file'])) {
    $fileToDelete = $uploadDir . basename($_POST['delete_file']);
    if (file_exists($fileToDelete) && unlink($fileToDelete)) {
        $message = "File deleted successfully!";
    } else {
        $message = "Failed to delete file.";
    }
}

// Get all uploaded files
$files = array_diff(scandir($uploadDir), ['.', '..']);

// Count file extensions
$fileStats = [];
foreach ($files as $file) {
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    $fileStats[$ext] = ($fileStats[$ext] ?? 0) + 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploader</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Upload and Download Files</h1>

    <?php if (isset($message)) : ?>
        <p style="color: green; font-weight: bold;">
            <?= htmlspecialchars($message) ?>
        </p>
    <?php endif; ?>

    <!-- File Upload Form -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Choose a file to upload:</label>
        <input type="file" name="file" id="file" required>
        <button type="submit" class="upload">Upload</button>
    </form>

    <!-- Uploaded Files -->
    <h2>Uploaded Files</h2>
    <ul>
        <?php foreach ($files as $file) : ?>
            <li>
                <a href="<?= $uploadDir . htmlspecialchars($file) ?>" download>
                    <?= htmlspecialchars($file) ?>
                </a>
                <!-- Delete File Button -->
                <form action="" method="post" style="display: inline;">
                    <input type="hidden" name="delete_file" value="<?= htmlspecialchars($file) ?>">
                    <button type="submit" class="delete" style="color: white;">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <!-- File Extension Statistics -->
    <h2>File Extension Statistics</h2>
    <table>
        <thead>
        <tr>
            <th>Extension</th>
            <th>Count</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($fileStats as $ext => $count) : ?>
            <tr>
                <td><?= htmlspecialchars($ext) ?></td>
                <td><?= $count ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
