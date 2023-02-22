<?php
session_start();
require("../securiser/auth.php");
if (Auth::isLogged()) {
    // ... code de la page admin ...
} else {
    header('location: ../../LOGIN-SIGNUP-ADMIN/login-admine.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        .slider {
            width: 100vw;
            height: 100vh;
            background: url(../../CLIENT/image/plage.jpg);
        }

        .text {
            margin-left: 30px;
            margin-top: 300px;
        }

        .title-bienvenue {
            color: rgba(148, 106, 0, 0.831);
            -webkit-text-stroke: 1px #00000073;
            font-family: "Allura";
            font-size: 50px;
            font-weight: 900;
            letter-spacing: 10px;
            padding: 0;
            margin: 0;
            line-height: 1;
            box-sizing: border-box;
            margin-bottom: 20px;
            animation-duration: 6s;
            animation-name: slidein;


        }


        @keyframes slidein {
            from {
                margin-left: 20%;
                width: 300%;
            }

            to {
                margin-left: 0px;
                width: 100%;
            }
        }

        /* title description*/
        .title-descrip {
            color: rgba(128, 128, 128, 0.748);
            -webkit-text-stroke: 1px #00000073;
            font-size: 40px;
            font-weight: 500;
            padding: 0;
            margin: 0;
            line-height: 1;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            animation-duration: 7s;
            animation-name: txt;

        }

        @keyframes txt {
            from {
                margin-top: 15%;
                width: 300%;
            }

            to {
                margin-top: 0px;
                width: 100%;
            }
        }
    </style>
    <title>ACCEUIL NEPTUNE</title>
</head>

<body>
    <div class="slider">
        <?php
        //  la navbar
        include '../navbar-admin/navbar.php';
        ?>

        <div class="text">
            <h1 class="title-bienvenue">Bienvenue</h1>
            <h1 class="title-descrip">Sur la page NEPTUNE-ADMIN</h1>
        </div>
    </div>
</body>

</html>