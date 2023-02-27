

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Annuler une réservation d'hôtel</title>
    <style>
        body {
    font-family: Arial, sans-serif;
}

h1 {
    text-align: center;
    margin-top: 20%;
}

form {
    margin: 0 auto;
    max-width: 400px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"] {
    padding: 5px;
    width: 100%;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
}

input[type="submit"] {
    margin-top: 10px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #3e8e41;
}

    </style>
</head>
<body>
    <?php

    include '../navbar-client/navbar.php';
    ?>
   <h1>Annuler une réservation d'hôtel</h1>
<form method="post" action="">
  <label for="email">Entrez l'e-mail associé à la réservation :</label>
  <input type="email" name="email" required>
  <br>
  <button type="submit" name="annuler_reservation">Annuler la réservation</button>
</form>