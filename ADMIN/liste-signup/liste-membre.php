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
require('./function.php');
$Liste = afficher();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Liste des réservations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        h1 {
            color: rgba(148, 106, 0, 0.831);
            -webkit-text-stroke: 1px #00000073;
            font-family: "Allura";
            font-size: 50px;
            font-weight: 900;
            letter-spacing: 10px;
            padding: 0;
            margin-top: 30px;
            line-height: 1;
            box-sizing: border-box;
            margin-left: 100px;
            animation-duration: 5s;
            animation-name: slidein;
        }

        @keyframes slidein {
            from {
                margin-left: 90px;
                width: 100%;
            }

            to {
                margin-left: 100px;
                width: 100%;
            }
        }

        h4 {
            color: rgba(148, 106, 0, 0.831);
            -webkit-text-stroke: 1px #00000073;
            font-family: "Allura";
            font-size: 30px;
            font-weight: 900;
            letter-spacing: 10px;
            padding: 0;
            margin-top: -30px;

            line-height: 1;
            box-sizing: border-box;
            margin-left: 750px;
        }


        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 30px;
            margin-left: 20vh;
        }

        th {
            background-color: #bebebe;
            color: rgba(148, 106, 0, 0.831);
            text-shadow: 0.3px 0.6px white;
            font-weight: bold;
            padding: 10px;
            text-align: left;
        }

        td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        tr:hover {
            background-color: #3333334b;
        }

        .action-buttons {
            display: flex;
            justify-content: space-around;
        }

        .action-buttons a {
            color: #fff;
            text-decoration: none;
            border: none;
            padding: 10px 10px;
            cursor: pointer;

        }

        .action-buttons a.edit {
            background-color: #333;
            transition: background-color 0.5s ease-in-out;
            margin-right: 20px;
        }

        .action-buttons a.edit:hover {
            background-color: #047f19;
        }

        .action-buttons a.delete {
            background-color: #333;
            transition: background-color 0.5s ease-in-out;
        }

        .action-buttons a.delete:hover {
            background-color: #b40000;
        }
    </style>
</head>

<body>
    <?php
    include '../navbar-admin/navbar.php'

    ?>

    <h1>Liste des clients qui ont creer un compte</h1>
    <h4>SINGUP</h4>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>E-mail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <tbody>
            <?php foreach ($Liste as $liste) { ?>
                <tr>
                    <td><?= $liste->username ?></td>
                    <td><?= $liste->email ?></td>

                    <td class="action-buttons">
                        <!--<a class="edit" href="#">Modifier</a>-->
                        <a class="delete" href="#">Supprimer</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>


        </tbody>
    </table>
</body>

</html>
<!--By Abderrahmen-BOULATAFI-->