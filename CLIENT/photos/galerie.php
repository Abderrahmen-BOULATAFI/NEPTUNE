<!DOCTYPE html>
<html>

<head>
    <title>Galerie d'images de l'hôtel</title>
    <style type="text/css">
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

        h1 {
            color: #c24848;
            margin-left: 550px;
            font-size: 30px;
            -webkit-text-stroke: 1px #383d52;
            text-transform: uppercase;
            animation: sliden 2s;

        }

        @keyframes sliden {
            from {
                opacity: 0;
                margin-left: 549px;
                margin-top: -1px;
            }

            to {
                opacity: 1;
                margin-left: 550px;

            }
        }

        /* Style de la galerie */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin: 20px auto;
            max-width: 1000px;
        }

        /* Style d'une image */
        .gallery img {
            height: 200px;
            margin: 10px;
            object-fit: cover;
            width: 200px;
        }

        #animation-container {
            position: relative;
            width: 500px;
            height: 300px;
            overflow: hidden;
        }

        #animation-container img {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        #animation-container img.active {
            opacity: 1;
        }
    </style>
</head>

<body>
    <nav>
        <img class="logo" src="../image/logo.png" alt="logo Neptune">
        <h2>Neptune</h2>


        <ul>
            <li><a href="../aceuil/aceuil.php">Acceuil</a></li>
            <li><a href="../reservation/reservation.php">Réservation</a></li>
            <li><a href="">Privilèges</a></li>
            <li><a href="./galerie.php">Photos</a></li>
            <li><a href="../contact/contact.php">Contact</a></li>
        </ul>
        <a href="../../LOGIN-SIGNUP/login.php"><img class="logo-login " src="../image/login.jpg" alt="logo logine"></a>
    </nav>
    <h1>Galerie d'images de l'hôtel</h1>
    <div class="gallery" id="mon_image">
        <img src="../image/chambre.jpg" alt="">
        <img src="../image/aceuil-hotel.jpg" alt="">
        <img src="../image/coupleauborddelamere.jpg" alt="">
        <img src="../image/chambre.jpg" alt="">
        <img src="../image/fruit.jpg" alt="">
        <img src="../image/hotel.jpg" alt="">
        <img src="../image/la-fête.jpg" alt="">
        <img src="../image/pisine.jpg" alt="">
        <img src="../image/pisine.webp" alt="">
        <img src="../image/vue-pisine_mere.jpg" alt="">
        <img src="../image/vuedemere.jpg" alt="">
        <img src="../image/plage.jpg" alt="">
        <img src="../image/plats.jpg" alt="">
        <img src="../image/restaupisscine.jpg" alt="">
    </div>
    <script>
        var mon_image = document.getElementById('mon_image');
        mon_image.addEventListener('mousemove', function(e) {
            // Calculer la distance de la souris par rapport au centre de l'image
            var dx = e.clientX - mon_image.offsetLeft - mon_image.offsetWidth / 2;
            var dy = e.clientY - mon_image.offsetTop - mon_image.offsetHeight / 2;
            // Déplacer légèrement l'image en fonction de la distance de la souris
            mon_image.style.transform = 'translate(' + dx / 20 + 'px, ' + dy / 20 + 'px)';
        });
        mon_image.addEventListener('mouseout', function(e) {
            // Réinitialiser la position de l'image quand la souris quitte l'image
            mon_image.style.transform = 'translate(0px, 0px)';
        });
    </script>

</body>


</html>