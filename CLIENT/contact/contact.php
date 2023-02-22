<html>

<head>
    <style>
        * body {
            margin: 0;
            padding: 0;
            background-color: rgba(0, 0, 0, 0.19);
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .info-container {
            background-color: #f2f2f2;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
            animation: slide-in-elliptic-top-fwd 4s cubic-bezier(0.39, 0.575, 0.565, 1) both;
            text-align: center;
            margin-top: 0;
        }

        @keyframes slide-in-elliptic-top-fwd {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }

            100% {
                transform: translateY(-15%);
                opacity: 1;
            }
        }

        .info-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .info-group h3 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .info-group p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .foot-liendecondition ul img {
            width: 20px;
            height: 20px;
        }

        .foot-reseauxsociaux {
            margin: 0;
        }

        .foot-reseauxsociaux a {
            text-decoration: none;
            color: #383d52;
        }

        .foot-reseauxsociaux ul img {
            width: 20px;
            height: 20px;
        }

        .foot-liendecondition {
            margin: 0;

        }

        .foot-liendecondition a {
            text-decoration: none;
            color: #383d52;
        }
    </style>
</head>

<body>
    <?php

    include '../navbar-client/navbar.php';
    ?>
    <div class="container">
        <div class="info-container">
            <div class="info-group">
                <h2>Hotel Neptune</h2>
                <p>Adresse: <strong>239, rue de l’Etang de l’Or Carnon Plage 34130 Mauguio</strong></p>
                <p>Téléphone: <strong>+33 (0)4 67 50 88 00</strong></p>
                <p>Email: <strong>contact@hotel-neptune.fr</strong></p>
                <h3>NOS RESEAUX SOCIAUX</h3>
                <div class="foot-reseauxsociaux">
                    <h4>SUIVEZ NOUS SUR :</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/hotelneptunecarnon"><img src="../image/facebook.png" alt="facebook">facebook</a></li>
                        <li><a href="https://www.instagram.com/hotelneptunecarnon/"><img src="../image/instagram.png" alt="instagrame">instagrame</a></li>
                        <li><a href="https://www.pinterest.fr/hotelneptune/_created/"><img src="../image/printerest.png" alt="pinterest">pinterest</a></li>
                        <li><a href="https://twitter.com/hotelneptune"><img src="../image/twiter.png" alt="twitter">twitter</a>
                        </li>
                        <li><a href="https://www.linkedin.com/company/h%C3%B4telneptune/?originalSubdomain=fr"><img src="../image/linkedin.png" alt="linkedin">linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>

</html>