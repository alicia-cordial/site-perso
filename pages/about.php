<?php


$title = "about";
$bodyname = "about";

session_start();

?>


    <!--------------------------------HEADER---------------------------->
<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inconsolata&display=swap" rel="stylesheet">
    <link rel= "stylesheet" type="text/css" href= "../style/header.css">
    <link rel= "stylesheet" type="text/css" href= "../style/about.css">
    <link rel= "stylesheet" type="text/css" href= "../style/footer.css">

    <title> <?= $title ?> - Alicia Cordial</title>
</head>


<body class="<?= $bodyname ?>">

<header>

    <nav>
        <input type="checkbox" id="menu-toggle"/>
        <label id="trigger" for="menu-toggle"></label>
        <label id="burger" for="menu-toggle"></label>
        <ul id="menu">
            <li><a href="../index.php"><h2>HOME</h2><p>-Fresh start-</p></a></li>
            <li><a href="../pages/projet1.php"><h2>WORK 1</h2><p>-Memory-</p></a></li>
            <li><a href="../pages/projet2.php"><h2>WORK 2</h2><p>-Réservations salle-</p></a></li>
            <li><a href="../pages/projet3.php"><h2>WORK 3</h2><p>-Gamebusters-</p></a></li>
            <li><a href="../pages/about.php"><h2>ABOUT ME</h2><p>-Learn more about me-</p></a></li>

        </ul>
    </nav>

</header>




<main class="about_me">

    <div>
    <h1>ABOUT ME</h1>

    </div>

        <div class="flexbox">
            <div class="">
                <div id="grid" class="grid-wrapper">

                    <div class="card lrg subhead-1 col-num">
                        <h2>MON PARCOURS</h2>
                        <p><strong>2014</strong> : Baccalauréat scientifique</p>
                        <p><strong>2016-2017</strong> : FSJ(service social) à Tübingen en Allemagne</p>
                        <p><strong>2017-2020</strong> : Formation kinésithérapie à Emmendingen en Allemagne</p>
                        <p><strong>2020-2021</strong> : École de développement web à LaPlateforme_ Marseille</p>
                    </div>

                    <div class="card item-1 med">
                        <h2>ME</h2>
                        <p>Bonjour, je m'appelle Alicia Cordial, je suis une élève de développement web à LaPlateforme_ basée à Marseille. Je préfère faire du front-end. J'aime faire des projets qui ont une esthétique unique au site.</p>
                    </div>

                    <div class="card item-2 sm">
                        <h2>MES PASSIONS</h2>
                        <p>peinture</p>
                        <p>couture</p>
                        <p>yoga</p>
                        <p>l'art, la culture, l'architecture</p>
                        <p>voyager</p>
                        <p>l'Histoire</p>
                    </div>

                    <div class="card item-3 sm">
                        <h2>FOLLOW</h2>
                        <a href="https://github.com/alicia-cordial/"><p>Suivez mes projets sur Github</p><img src="../image/icons8-github-30.png" alt="github" width="30px"></a>
                    </div>

                    <div class="card item-4 sm">
                        <h2>CONTACT</h2>
                        <p>ALICIA CORDIAL</p>
                        <a href="mailto:alicia.cordial@laplateforme.io">alicia.cordial@laplateforme.io<img src="../image/icons8-important-mail-100.png" width="30px" alt="mail"/></a>
                        <a href="https://www.linkedin.com/in/alicia-cordial-0538b8205/"><p>Linkedin</p><img src="../image/icons8-linkedin-26.png" alt="github" width="30px"></a>
                    </div>
            </div>
        </div>


</main>









<!-------------------------FOOTER-------------------------------------->

<?php require_once('../includes/footer.php'); ?>
