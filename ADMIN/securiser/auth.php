<?php

class Auth
{
    static function isLogged()
    {
        if (isset($_SESSION['Auth']) && isset($_SESSION['Auth']['login']) && isset($_SESSION['Auth']['pass'])) {
            // Vérifier si les informations de connexion sont valides en effectuant une requête à la base de données
            $host = "localhost";
            $username = "root";
            $password = "";
            $dbname = "neptun";
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

            $stmt = $conn->prepare("SELECT * FROM adminlogin WHERE email=:email LIMIT 1");
            $stmt->execute(['email' => $_SESSION['Auth']['login']]);
            $user = $stmt->fetch();

            if ($user && $_SESSION['Auth']['pass'] == $user['password']) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
