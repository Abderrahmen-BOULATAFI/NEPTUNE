<?php
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "neptun";
try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$basededonnees", $utilisateur, $motdepasse);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

if (isset($_POST['valider'])) {
    $user = $_POST['user'];
    $phone = $_POST['phone'];
    $email = $_POST['mail'];
    $adress = $_POST['adress'];
    $nbrpersonne = $_POST['nbrpersonne'];
    $dtarriver = $_POST['dtarriver'];
    $dtsortie = $_POST['dtsortie'];
    $nom = $_POST['nom'];

    $requete = "INSERT INTO listersv( user, phone, mail, adress, nbrpersonne, dtarriver, dtsortie, nom) VALUES ( :user, :phone, :email, :adress, :nbrpersonne, :dtarriver, :dtsortie, :nom)";

    $add = $connexion->prepare($requete);

    $add->execute(array(":user" => $user, ":phone" => $phone, ":email" => $email, ":adress" => $adress, ":nbrpersonne" => $nbrpersonne, ":dtarriver" => $dtarriver, ":dtsortie" => $dtsortie, ":nom" => $nom));

    header("Location: ./reservation.php?msg=Vous avez reuissi a payer votre commande");
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
        input[type="tel"],
        input[type="mail"],
        input[type="adress"],
        input[type="number"],
        input[type="dtarriver"],
        input[type="dtsortie"] {
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

        .valider {
            padding: 10px 20px;
            background-color: lightgray;
            border-radius: 5px;
            border: none;
            font-size: 1.2em;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            margin-top: 5px;
            width: 20%;
            margin-left: 35%;
        }

        .valider:hover {
            background-color: rgb(0, 0, 0);
            transform: scale(1.1);
            color: #fafafa;
        }

        .Payer {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        section {
            flex: 1 1 40%;
            margin: 0 10px;
        }

        form {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;

        }

        .position {
            display: flex;
        }

        .paragraph-deselection {
            margin-top: 27px;
        }

        .cart-pay {
            display: flex;
            margin-bottom: 10px;
        }

        .second-child {
            margin-left: 30px;
        }
    </style>
    <title>Paiement-GAZO</title>
</head>

<body>

    <?php

    include '../navbar-client/navbar.php';
    ?>

    <div class="form-container">
        <h1>Paiement</h1>
        <p class="soustitre">Veuillez remplire tout le formulaire pour valider votre achat</p>
        <form method="post" action="">
            <label for="user">Nom complet:</label>
            <input type="text" id="user" name="user" placeholder="Entrez votre nom complet">

            <label for="phone">Numéro de téléphone:</label>
            <input type="tel" id="phone" name="phone" placeholder="Entrez votre numéro de téléphone">

            <label for="mail">E-mail:</label>
            <input type="mail" id="mail" name="mail" placeholder="Entrez votre adresse mail">



            <label for="adress">Adresse:</label>
            <input type="adress" id="adress" name="adress" placeholder="Entrez votre adresse">
            <label for="adress">Nombre de personne:</label>
            <input type="number" id="nbrpersonne" name="nbrpersonne" placeholder="Combien de personnes vousêtes">
            <label for="dtarriver">date d'arriver:</label>
            <input type="date" id="dtarriver" name="dtarriver">
            <label for="dtsortie">date de sortie:</label>
            <input type="date" id="dtsortie" name="dtsortie">

            <label for="nom">Nom du chambre:</label>
            <input type="text" id="nom" name="nom" value="<?php echo isset($_GET['produit']) ? $_GET['produit'] : ''; ?>" readonly>
            <section>
                <div class="position">
                    <h3>Paiement : &nbsp; </h3>
                    <p class="paragraph-deselection">Choisissez votre mode de paiement :</p>
                </div>
                <form action="" method="post">
                    <div class="cart-pay">
                        <div>
                            <label for="credit-card">Carte de crédit</label>
                            <input type="radio" id="credit-card" name="payment" value="credit-card">
                        </div>
                        <div class="second-child">
                            <label for="paypal">Apple pay</label>
                            <input type="radio" id="paypal" name="payment" value="paypal">
                        </div>
                    </div>
                    <button type="submit" name="valider">Payer</button>
                </form>
            </section>
        </form>
    </div>

</body>

</html>