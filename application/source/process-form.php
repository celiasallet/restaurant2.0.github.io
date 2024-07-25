<?php
// Database connection details
$host = "db"; // Service name in docker-compose.yml
$dbname = "messages_db";
$username = "root";
$password = "pass"; // Ensure this matches the password in docker-compose.yml


try  
{
    $dbh = new PDO('mysql:host=db;dbname=messages_db', $username, $password);
// Check the connection
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

try 
{
    $Nom = $_POST["Nom"] ?? '';
    $Prénom = $_POST["Prénom"] ?? '';
    $Message = $_POST["Message"] ?? '';
    $Objet = filter_input(INPUT_POST, "Objet", FILTER_VALIDATE_INT);
    $Email = filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL);
}   
    catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
// Retrieve and sanitize POST data

// $Prénom = $_POST["Prénom"] ?? '';
// $Message = $_POST["Message"] ?? '';
// $Objet = filter_input(INPUT_POST, "Objet", FILTER_VALIDATE_INT);
// $Email = filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL);

try 
{
    $sql = "INSERT INTO messages (Nom, Prénom, Message, Objet, Email) VALUES (?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);
}   
    catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


try
{
$stmt->execute([$Nom, $Prénom, $Message, $Objet, $Email]);
}   
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}


var_dump($Nom, $Prénom, $Message, $Objet, $Email);
//var dump 
// post script 