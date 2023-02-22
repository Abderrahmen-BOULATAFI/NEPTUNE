<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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
            color: #c24848;
            margin-left: 20px;
            font-size: 50px;
            -webkit-text-stroke: 1px #383d52;
            text-transform: uppercase;

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
    </style>
    <title>navbar</title>
</head>

<body>

    <!--la navbar-->
    <nav>
        <img class="logo" src="../image/logo.png" alt="logo Neptune">
        <h2>Neptune</h2>


        <ul>
            <li><a href="../aceuil/aceuil.php">Acceuil</a></li>
            <li><a href="../reservation/reservation.php">Réservation</a></li>
            <li><a href="">Privilèges</a></li>
            <li><a href="../photos/galerie.php">Photos</a></li>
            <li><a href="../../LOGIN-SIGNUP/login.php">Contact</a></li>
        </ul>
        <a href="../../LOGIN-SIGNUP/login.php"><img class="logo-login " src="../image/login.jpg" alt="logo logine"></a>
    </nav>

</body>

</html>