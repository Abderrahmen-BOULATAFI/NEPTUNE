<?php

$host = "localhost";
$dbname = "neptun";
$username = "root";
$password = "";
try {
    $access = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "La connexion à la base de données a échoué : " . $e->getMessage();
}
