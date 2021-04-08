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
    <meta name="author" content="Alicia Cordial">
    <meta name="description" content="Alicia Cordial actuellement en formation fullStack de developpemnt web à laPlateforme à Marseille. Recherche une alternance pour septembre 2021">
    <meta name="Alicia Cordial" content="index,follow">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inconsolata&display=swap" rel="stylesheet">
    <link rel= "stylesheet" type="text/css" href= "../style/header.css">
    <link rel= "stylesheet" type="text/css" href= "../style/about.css">
    <link rel= "stylesheet" type="text/css" href= "../style/footer.css">
    <link rel="short icon" href="../image/icons8-aquarius-30.png"/>

    <title> <?= $title ?> - Alicia Cordial- développeuse Web Full Stack</title>
</head>


<body class="<?= $bodyname ?>">

<header>

    <nav>
        <input type="checkbox" id="menu-toggle"/>
        <label id="trigger" for="menu-toggle"></label>
        <label id="burger" for="menu-toggle"></label>
        <ul id="menu">
            <li id="home"><a href="../index.php"><h2>HOME</h2><p>-Fresh start-</p></a></li>
            <li id="project1"><a href="../pages/projet1.php"><h2>WORK 1</h2><p>-Memory-</p></a></li>
            <li id="project2"><a href="../pages/projet2.php"><h2>WORK 2</h2><p>-Hall Booking-</p></a></li>
            <li id="project3"><a href="../pages/projet3.php"><h2>WORK 3</h2><p>-Gamebusters-</p></a></li>
            <li id="aboutme"><a href="../pages/about.php"><h2>ABOUT ME</h2><p>-Learn more about me-</p></a></li>

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
                    <h2>MY ACADEMIC BACKGROUND</h2>
                    <p><strong>2020-2021</strong> : Coding School in LaPlateforme_ Marseille</p>
                    <p><strong>2017-2020</strong> : Studies in physical therapy in Emmendingen in Germany</p>
                    <p><strong>2014</strong> : Scientific Baccalaureate.</p>

                    <h2>MY JOB BACKGROUND</h2>
                    <p><strong>2020-2021</strong> : Different Projects in my Coding School in LaPlateforme_ Marseille</p>
                    <p><strong>2016-2020</strong> : Training in physical therapy in different Hospitals in Germany</p>
                    <p><strong>2015-2016</strong> : FSJ(social service) in Tübingen in Germany</p>
                </div>

                <div class="card item-1 med">
                    <h2>THE LANGUAGES I USE</h2>

                    <h3>FRONT-END</h3>
                    <ul>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>Javascript</li>
                    </ul>

                    <h3>BACK-END</h3>
                    <ul>
                        <li>PHP</li>
                        <li>SQL</li>
                    </ul>

                </div>

                <div class="card item-2 sm">
                    <h2>ME</h2>
                    <p>Hi, my name is Alicia Cordial, I'm a fullstack web developer Student, based in Marseille. If I have to choose, I prefer to do the front-end part. I really enjoy doing Projects with a unique Design, aesthetic and an essence.</p>
                </div>

                <div class="card item-3 sm">
                    <h2>WHAT I LOVE</h2>
                    <p>Painting</p>
                    <p>Sewing</p>
                    <p>Yoga</p>
                    <p>Art, Culture, Architecture</p>
                    <p>Travel</p>
                    <p>History</p>
                </div>

                <div class="card item-4 sm">
                    <h2>CONTACT</h2>
                    <p>ALICIA CORDIAL</p>
                    <a href="https://laplateforme.io/">More informations about my school</a>
                    <a href="mailto:alicia.cordial@laplateforme.io">alicia.cordial@laplateforme.io<img src="../image/icons8-important-mail-100.png" width="30px" alt="mail"/></a>
                    <a href="https://www.linkedin.com/in/alicia-cordial-0538b8205/">Linkedin<img src="../image/icons8-linkedin-26.png" alt="github" width="30px"></a>
                    <a href="https://github.com/alicia-cordial/">Github<img src="../image/icons8-github-30.png" alt="github"/></a>

                </div>
            </div>
        </div>
    </div>

</main>









<!-------------------------FOOTER-------------------------------------->

<?php require_once('../includes/footer.php'); ?>
