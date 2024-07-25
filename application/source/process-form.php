<?php
// Database connection details
$host = "db"; // Service name in docker-compose.yml
$dbname = "messages_db";
$username = "root";
$password = "pass"; // Ensure this matches the password in docker-compose.yml

header("Location: success.html");

    $dbh = new PDO('mysql:host=db;dbname=messages_db', $username, $password);

    $Nom = $_POST["Nom"] ?? '';
    $Prénom = $_POST["Prénom"] ?? '';
    $Message = $_POST["Message"] ?? '';
    $Objet = filter_input(INPUT_POST, "Objet", FILTER_VALIDATE_INT);
    $Email = filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL);

    $sql = "INSERT INTO messages (Nom, Prénom, Message, Objet, Email) VALUES (?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);

$stmt->execute([$Nom, $Prénom, $Message, $Objet, $Email]);

