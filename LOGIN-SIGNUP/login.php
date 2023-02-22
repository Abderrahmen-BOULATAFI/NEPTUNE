<?php
session_start();

// Connexion à la base de données
$host = "localhost";
$username = "root";
$password = "";
$dbname = "neptun";
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Préparation de la requête de sélection pour récupérer les données de l'utilisateur
    $stmt = $pdo->prepare("SELECT * FROM signup WHERE email=:email LIMIT 1");
    $stmt->execute(['email' => $email]);

    if ($stmt->rowCount() == 1) {
        $user = $stmt->fetch();

        // Vérifier si le mot de passe est correct
        if (password_verify($password, $user['password'])) {
            // Enregistrement des informations de l'utilisateur dans la session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: ../../CLIENT/aceuil/aceuil.php");
            exit();
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Adresse e-mail incorrecte.";
    }
}

// Fermeture de la connexion
$pdo = null;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <img class="logo" src="../CLIENT/image/logo.png" alt="logo Neptune">
        <h2>NEPTUNE</h2>


        <ul>
            <li><a href="../CLIENT/aceuil/aceuil.php">Acceuil</a></li>
            <li><a href="../CLIENT/reservation/reservation.php">Réservation</a></li>
            <li><a href="">Privilèges</a></li>
            <li><a href="../CLIENT/photos/galerie.php">Photos</a></li>
            <li><a href="../contact/contact.php">Contact</a></li>
        </ul>
        <img class="logo-login " src="../CLIENT/image/login.jpg" alt="logo logine">
    </nav>


    <div class="container">
        <h1>Connexion</h1>
        <p class="soustitre">Veuillez bien saisir votre E-mail et Mot de passe</p>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" placeholder="Adresse e-mail" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Se connecter</button>
            <div class="sign">
                <p class="paragraphe-creationdecompte">Vous n'avez pas de compte ? &nbsp; </p>
                <a class="sigup" href="./signup.php"> Inscrivez-vous.</a>
            </div>
        </form>
    </div>



    <style>
        body {
            background-color: lightgray;
            margin: 0;
            height: 100vh;
        }

        /*style de la nav*/
        nav {
            display: flex;
            width: 100%;
            align-items: center;
            flex-wrap: wrap;
            padding: 5px 0;
        }

        /*logo neptune*/
        .logo {
            width: 50px;
            cursor: pointer;
            margin-left: 20px;
        }

        /*texte neptune */
        h2 {
            color: #00000073;
            margin-left: 20px;
            font-size: 50px;
            -webkit-text-stroke: 1px #000000;
        }

        /*logo de logine de la nav*/
        .logo-login {
            width: 30px;
            cursor: pointer;
            margin-right: 40px;

        }

        /* liens de la nav */
        nav ul {
            flex: 1;
            text-align: right;
            padding-right: 30px;
        }

        nav ul li {
            display: inline-block;
            list-style: none;
            margin: 10px 30px;
            position: relative;
        }

        nav ul li a {
            color: #000000;
            text-decoration: none;

        }

        nav ul li a::after {
            content: '';
            width: 0;
            height: 3px;
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            background: #000000;
            transition: width 0.5s;

        }

        nav ul li a:hover::after {
            width: 50%;

        }

        /* login */
        .container {
            background-color: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
            width: 400px;
            margin-top: 50px;
            margin-left: 600px;
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
            margin-bottom: 40px;
            color: gray;
            text-transform: inherit;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }

        label {
            font-size: 1.2em;
            margin-bottom: 10px;

        }

        input[type="email"],
        input[type="password"] {
            padding: 10px;
            font-size: 1.2em;
            width: 100%;
            border-radius: 5px;
            border: 1px solid gray;
            transition: all 0.3s ease-in-out;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            transform: translateY(-10px);
            box-shadow: 0px 0px 10px gray;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: lightgray;
            border-radius: 5px;
            border: none;
            font-size: 1.2em;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            margin-top: 20px;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: rgb(0, 0, 0);
            transform: scale(1.1);
            color: #fafafa;
        }

        .sign {
            margin-top: 20px;
            display: flex;
        }

        .paragraphe-creationdecompte {
            color: gray;
            margin-left: 10px;
            font-size: 15px;
        }

        .sigup {

            font-size: 15px;
            text-decoration: none;
            margin-top: 15px;
        }
    </style>
</body>

</html>