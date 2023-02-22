<?php
session_start();
require("../securiser/auth.php");
if (Auth::isLogged()) {
    // ... code de la page admin ...
} else {
    header('location: ../../LOGIN-SIGNUP-ADMIN/login-admine.php');
}

?>

<?php


// Connexion à la base de données
$host = "localhost";
$username = "root";
$password = "";
$dbname = "neptun";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}

// Vérification du formulaire soumis
if (isset($_POST['valider'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification de l'adresse email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Adresse email invalide.";
        exit();
    }

    // Hash du mot de passe
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Requête d'insertion
    $stmt = $pdo->prepare("INSERT INTO adminlogin (user, email, password) VALUES (:user, :email, :password)");
    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password_hash);

    try {
        $stmt->execute();
        echo "Le compte a été créé avec succès.";
    } catch (PDOException $e) {
        echo "Erreur lors de la création du compte: " . $e->getMessage();
    }

    // Fermeture de la connexion
    $pdo = null;
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        body {
            background-color: #DDD;
        }

        h1 {
            text-align: center;
            margin: 0;
            margin-bottom: 10px;
            -webkit-text-stroke: 1px #000000;
            text-transform: uppercase;
            color: rgb(90, 82, 82);

        }

        .soustitre {
            margin: 0;
            text-align: center;
            margin-bottom: 20px;
            color: gray;
            text-transform: inherit;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 12px 15px 20px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 7px 6px 10px 12px rgba(148, 106, 0, 0.428);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="mail"],
        input[type="password"] {
            width: 100%;
            padding: 10px 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="text"] .commentaire {
            display: flex;
        }

        .commentaire {
            font-family: sans-serif;
            color: #ccc;
        }

        .valider,
        .annuler {
            padding: 10px 20px;
            background-color: gray;
            border-radius: 5px;
            border: none;
            font-size: 1.2em;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            margin-top: 5px;
            width: 20%;
            display: flex;

        }

        a {
            text-decoration: none;
        }

        .valider:hover {
            background-color: green;
            transform: scale(1.1);
            color: white;
        }

        .annuler:hover {
            background-color: red;
            transform: scale(1.1);
            color: white;
        }
    </style>
    <title>Paiement-GAZO</title>
</head>

<body>

    <?php
    include '../navbar-admin/navbar.php'

    ?>
    <div class="form-container">
        <h1>Ajouter un admine</h1>
        <p class="soustitre">Y'a pas une page de creation conexion admine que celle là</p>
        <form method="post" action="">
            <label for="user">Nom complet:</label>
            <input type="text" id="user" name="user" placeholder="Entrez le nom complet" required>

            <label for="email">E-mail:</label>
            <input type="mail" id="email" name="email" placeholder="Entrez l'adresse mail" required>

            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" placeholder="Entrer le password" required>
            <div class="button">
                <button type="submit" name="valider" class="valider">ajouter</button>
                <a href="./ajouter-admine.php"><button type="submit" class="annuler">Annuler</button></a>
            </div>
        </form>
    </div>

</body>

</html>