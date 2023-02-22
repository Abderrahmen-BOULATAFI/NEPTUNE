<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!--css-->
    <style>
        body {
            margin: 0;
            padding: 0;
            /* height: 3000px; */
        }

        /* 1er partie de la page d'acceuil */
        /* style de slider qui contient la nav et la fleche de bas */
        /*style des photo d'acceuil et l'animation*/
        .slider {
            width: 1707px;
            height: 841px;
            background: url(../image/fruit.jpg);
            animation: slide 10s infinite;
        }


        @keyframes slide {
            25% {
                background: url(../image/fruit.jpg);
            }

            50% {
                background: url(../image/pisine.jpg);
            }

            75% {
                background: url(../image/plage.jpg);
            }

            100% {
                background: url(../image/saledemanger.jpg);
            }
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
            color: #fff;
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
            color: #fff;
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
            background: #fff;
            transition: width 0.5s;

        }

        nav ul li a:hover::after {
            width: 50%;

        }

        /*style de scrolle (fleche de bas) */
        .btn {
            height: 100px;
            width: 100px;

            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            margin-left: 1550px;
            bottom: 20px;
            cursor: pointer;
        }

        .iconflechedebas {
            width: 50px;
        }

        /*reservation*/
        /*style de l'ecriture avec animationt */
        .acceuil-suite h1 {
            text-decoration: double;
            margin-left: 425px;
            margin-top: 50px;
            color: rgb(163, 140, 7);
            text-shadow: 1px 1px 2px rgb(0, 0, 0);
            animation: sliden 3s;
        }

        @keyframes sliden {
            from {
                margin-left: 100%;
                width: 300%;
            }

            to {
                margin-left: 425px;
                width: 100%;
            }
        }

        /*style de formulaire de reservation*/
        form {
            width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f2f2f2;
            display: flex;
            border: 1px solid gray;
            border-radius: 10px;

        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: serif;
            margin-left: 20px;
        }

        input[type="date"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            font-size: 15px;
            border-radius: 5px;
            border: 1px solid rgb(0, 0, 0);
            margin-left: 10px;
        }

        input[type="submit"] {
            width: 50%;
            height: 50%;
            padding: 10px;
            font-size: 18px;
            background-color: #ddd;
            border: none;
            border-radius: 5px;
            color: rgb(0, 0, 0);
            cursor: pointer;
            margin-left: 20px;
            margin-top: 18px;
            transition: 0.3s, background-color 0.3s, color 0.3s;
        }

        input[type="submit"]:hover {
            transform: translateY(-10px);
            background-color: rgb(0, 0, 0);
            color: white;
        }

        /* modification de la partie qui suit la reservation et avant la footer
                        /*la modificationt du background */
        .descriptionsurneptune {
            background-color: #383d5215;
            border-radius: 20px;
            width: 75%;
            margin-left: 13%;
            margin-bottom: 50px;

        }

        /*******partie description***********/
        /*la modification de l'animation de titre de dexieme partie de la page 'bienvenue a l'hotel neptune */
        .title-description {
            animation-duration: 3s;
            animation-name: titre;
            margin-left: 9%;
            text-shadow: 1px 1px 2px #fff;
        }

        @keyframes titre {
            from {
                margin-left: 100%;
                width: 300%;
            }

            to {
                margin-left: 9%;
                width: 100%;
            }
        }

        /* modification de bienvenue */
        .title-welcom {
            color: #e4bc36;
            font-family: "Allura", Sans-serif;
            font-size: 50px;
            font-weight: 900;
            letter-spacing: -0.9px;
            padding: 0;
            margin: 0;
            line-height: 1;
            box-sizing: border-box;
        }

        /* modification de a l'hotel neptune */
        .title-hotel {
            font-size: 51px;
            font-weight: 500;
            padding: 0;
            margin: 0;
            line-height: 1;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        /* modification de logo de l'hotel [the original ...... Montpelier sud ] */
        .title-logo {
            font-size: 15px;
            text-transform: uppercase;
            padding: 0;
            margin: 0;
        }

        /*modification de paragraphe de description */
        .p-description {
            text-transform: capitalize;
            margin-left: 20px;
        }

        /* modification des image */
        /*modification de flex du paragraphe et l'animation des images */
        .description-paragraph-image {
            display: flex;
        }

        /* modification de la position des l'image et overflow(mettre tout les images ensemble)*/
        #img-description {
            overflow: hidden;
            width: 250px;
            height: 200px;
            margin-left: 20%;
        }

        /* modification des lal tailles des images */
        .imgst-dscp {
            width: 250px;
            height: 200px;
        }

        /* modification de l'animation des images */
        .picture-description {
            display: flex;
            animation-name: pictures;
            animation-duration: 10s;
            animation-iteration-count: infinite;
        }

        @keyframes pictures {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-250px);
            }

            50% {
                transform: translateX(-500px);
            }

            75% {
                transform: translateX(-750px);
            }

            100% {
                transform: translateX(0);
            }

        }

        /***************partie motivation************/
        .title-motivation {
            animation-duration: 3s;
            animation-name: titre-motivation;
            margin-left: 55%;
            text-shadow: 1px 1px 2px #fff;
            margin-top: 20px;
        }

        @keyframes titre-motivation {
            from {
                margin-left: 100%;
                width: 300%;
            }

            to {
                margin-left: 55%;
                width: 100%;
            }
        }

        /* modification de venez */
        .titlr-appele {
            color: #e4bc36;
            font-family: "Allura", Sans-serif;
            font-size: 50px;
            font-weight: 900;
            letter-spacing: -0.9px;
            padding: 0;
            margin: 0;
            line-height: 1;
            box-sizing: border-box;
        }

        /* modification de vivre le charme */
        .title-attirant {
            font-size: 51px;
            font-weight: 500;
            padding: 0;
            margin: 0;
            line-height: 1;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        /* modification de logo de l'hotel [authentic ....... neptune ] */
        .title-localisation {
            font-size: 15px;
            text-transform: uppercase;
            padding: 0;
            margin: 0;
        }

        /*modification de paragraphe de motivation */
        .p-motivation {
            text-transform: capitalize;
            margin-left: 20%;
        }

        /* modification des image */
        /*modification de flex du paragraphe et l'animation des images */
        .motivation-paragraph-image {
            display: flex;
        }

        /* modification de la position des l'image et overflow(mettre tout les images ensemble)*/
        #img-motivation {
            overflow: hidden;
            width: 250px;
            height: 200px;
            margin-left: 100px;
            margin-bottom: 20px;
        }

        /* modification de la tailles des images */
        .imgst-mtv {
            width: 250px;
            height: 200px;
        }

        /* modification de l'animation des images */
        .picture-motivation {
            display: flex;
            animation-name: pictures-motivation;
            animation-duration: 10s;
            animation-iteration-count: infinite;
        }

        @keyframes pictures-motivation {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-250px);
            }

            50% {
                transform: translateX(-500px);
            }

            75% {
                transform: translateX(-750px);
            }

            100% {
                transform: translateX(0);
            }

        }

        /*footer*/
        /*style des icones des reseau sociaux*/
        .foot-liendecondition ul img {
            width: 20px;
            height: 20px;
        }

        footer {
            font-family: serif Arial, Helvetica, serif;
            background-color: rgba(196, 62, 62, 0.536);
            width: 1707px;
            height: 300px;
            display: flex;
        }

        /* première partie à gauche  */
        .foot-adress {
            margin-left: 350px;
            margin-top: 30px;
        }

        /* dexième partie*/
        .foot-reservation {
            margin-left: 40px;
            margin-top: 30px;
        }

        /* troisieme partie*/
        .foot-reseauxsociaux {
            margin-left: 40px;
            margin-top: 30px;
        }

        .foot-reseauxsociaux a {
            text-decoration: none;
            color: #383d52;
        }

        .foot-reseauxsociaux ul img {
            width: 20px;
            height: 20px;
        }

        /* quatrieme partie */
        .foot-liendecondition {
            margin-left: 40px;
            margin-top: 30px;

        }

        .foot-liendecondition a {
            text-decoration: none;
            color: #383d52;
        }

        /* cinqième partie */
        .foot-liendeinformation {
            margin-left: 40px;
            margin-top: 30px;
        }

        .foot-liendeinformation a {
            text-decoration: none;
            color: #383d52;
        }
    </style>
    <title>hotel</title>
</head>

<body>

    <div class="slider">

        <!--la navbar-->
        <nav>
            <img class="logo" src="../image/logo.png" alt="logo Neptune">
            <h2>Neptune</h2>


            <ul>
                <li><a href="./aceuil.php">Acceuil</a></li>
                <li><a href="../reservation/reservation.php">Réservation</a></li>
                <li><a href="">Privilèges</a></li>
                <li><a href="">Photos</a></li>
                <li><a href="../contact/contact.php">Contact</a></li>
            </ul>
            <a href="../../LOGIN-SIGNUP/login.php"><img class="logo-login " src="../image/login.jpg" alt="logo logine"></a>
        </nav>

        <!--la felche de bas (scroll son fonctionnement en js)-->
        <div class="btn" href="">
            <img class="iconflechedebas" src="../image/flechedebas.png" alt="fleche de bas">
        </div>

    </div>
    <!-- le fonctionnement de scroll en js-->
    <script>
        const btn = document.querySelector('.btn');
        btn.addEventListener('click', () => {
            window.scrollBy({
                top: 841,
                left: 0,
                behavior: "smooth"
            })
        })
    </script>



    <!--la page qui suit la page d'acceuil-->
    <!--la reservation-->
    <div class="acceuil-suite">
        <h1>Réservez maintenant votre chambre et venez vivre l'exprience</h1>
        <form action="page_reservation.php" method="post">
            <label for="arrivée">Date d'arrivée :</label>
            <input type="date" id="arrivée" name="arrivée" required>

            <label for="départ">Date de départ :</label>
            <input type="date" id="départ" name="départ" required>

            <label for="adultes">Nombre d'adultes :</label>
            <input type="number" id="adultes" name="adultes" min="1" required>

            <label for="enfants">Nombre d'enfants :</label>
            <input type="number" id="enfants" name="enfants" min="0" required>

            <input type="submit" value="Réserver">
        </form>
    </div>

    <!-- partie qui suit la reservation et avant le footer -->
    <!--debut la partie description-->
    <div class="descriptionsurneptune">
        <!--titre de bienvenue a l'hotel-->
        <div class="title-description">
            <h1 class="title-welcom">Bienvenue</h1>
            <h31 class="title-hotel">à l'Hôtel Neptune</h1>
                <h1 class="title-logo">The originals boutique, Hôtel Neptune, <br> Motnpellier Sud</h1>
        </div>

        <!--cette div pour faire le display flex de paragraphe et les images-->
        <div class="description-paragraph-image">
            <!--le paragraphe -->
            <div class="p-description">
                <p class="description-neptune">"Bienvenue à l'hôtel Neptune, situé dans le cœur vibrant de
                    Montpellier.<br>
                    L'hôtel offre une expérience de séjour agréable avec ses chambres spacieuses <br> et confortables
                    équipées
                    de toutes les commodités modernes pour garantir <br>un séjour confortable. Les clients peuvent se
                    détendre et se rafraîchir <br>dans la piscine extérieure, profiter d'une variété d'activités
                    organisées
                    <br>pour
                    les distraire et se divertir. Le restaurant de l'hôtel propose une <br> cuisine délicieuse avec des
                    options pour
                    satisfaire tous les goûts culinaires.<br>Enfin, l'hôtel bénéficie d'une situation idéale juste à
                    côté de
                    la plage,<br>
                    offrant ainsi une vue imprenable sur la mer et permettant aux clients <br> de profiter de la plage à
                    leur
                    guise."
                </p>
            </div>
            <!--les images-->
            <div id="img-description">
                <div class="picture-description">
                    <img src="../image/creche.jpg" alt="creche des enfants" class="imgst-dscp">
                    <img src="../image/la-fête.jpg" alt="la fete" class="imgst-dscp">
                    <img src="../image/salon-acceuil.jpg" alt="salon d'acceuil" class="imgst-dscp">
                    <img src="../image/plats.jpg" alt="plats" class="imgst-dscp">

                </div>
            </div>
        </div>
        <!--la suite partie motivation-->
        <div class="title-motivation">
            <h1 class="titlr-appele">Venez</h1>
            <h1 class="title-attirant">Vivre le charme</h1>
            <h1 class="title-localisation">Authentique de Montpellier Sud<br> à l'Hôtel Neptune</h1>
        </div>
        <!--cette div pour faire le display flex pour les images et paragraphe-->
        <div class="motivation-paragraph-image">
            <!--les images-->
            <div id="img-motivation">
                <div class="picture-motivation">
                    <img src="../image/hotel.jpg" alt="picture of hotel" class="imgst-mtv">
                    <img src="../image/restaupisscine.jpg" alt="restaurant" class="imgst-mtv">
                    <img src="../image/vuedemere.jpg" alt="vue de mere" class="imgst-mtv">
                    <img src="../image/coupleauborddelamere.jpg" alt="couple in beach" class="imgst-mtv">

                </div>
            </div>
            <!--le paragraphe -->
            <div class="p-motivation">
                <p class="motivation-neptune"> Si vous cherchez un hôtel confortable et bien situé à Montpellier Sud, ne
                    cherchez pas <br> plus loin que l'Hôtel Neptune. Avec des chambres élégantes et spacieuses, un
                    personnel<br>
                    attentionné et un emplacement idéal à proximité de nombreuses attractions,<br>
                    nous sommes le choix
                    parfait pour vos prochaines vacances ou voyage d'affaires.<br>
                    Détendez-vous sur nos plages, découvrez
                    les meilleurs restaurants de la ville, ou explorez<br> les rues animées de Montpellier. Tout cela à
                    portée de main à partir de l'Hôtel Neptune. <br>Nous sommes impatients de vous accueillir pour un
                    séjour
                    inoubliable à Montpellier Sud.
                </p>
            </div>
        </div>
    </div>


    <!--le footer-->
    <footer>
        <!--première partie a gauche-->
        <div class="foot-adress">
            <h4>ADRESSE</h4>
            <p>239, rue de l'Etange de l'Or <br>Carnon Plage<br>34130 Mauguio<br>FRANCE </p>
        </div>
        <!-- dexième partie-->
        <div class="foot-reservation">
            <h4>RÉSERVATION</h4>
            <tel>Tel : +33 (0)4 67 50 88 00</tel>
        </div>
        <!--troisième partie-->
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
        <!--quatrième partie-->
        <div class="foot-liendecondition">
            <h4>À PROPOS</h4>
            <a href="https://www.hotelsone.com/faq.fr.html">FAQ</a><br>
            <a href="https://www.hotelsone.com/terms.fr.html">Conditions générales d'utilisation</a><br>
            <a href="https://www.hotelsone.com/privacy.fr.html">Charte de confidentialité</a>
        </div>
        <!--cinqième partie-->
        <div class="foot-liendeinformation">
            <h4>INFORMATION</h4>
            <a href="https://www.hotelsone.com/hotel-owner.fr.html">Propriétaires d'hôtel</a><br>
            <a href="https://www.hotelsone.com/index.fr.html">Destination</a><br>
            <a href="https://www.hotelsone.com/about-us.fr.html">À propos de nous</a>
        </div>
    </footer>




</body>


</html>