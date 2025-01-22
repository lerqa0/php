<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phppoll';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
    echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>' . $title . '</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <nav class="navtop">
        <div>
            <a href="index.php">Poll &amp; Voting System</a>
        </div>
    </nav>';
}
// Template footer
function template_footer() {
    echo '</body>
</html>';
}