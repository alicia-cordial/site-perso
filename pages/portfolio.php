<?php


$title = "Portfolio";
$bodyname = "portfolio";

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
        <link rel= "stylesheet" type="text/css" href= "../style.css">

        <title> <?= $title ?> - Alicia Cordial</title>

        <script>
            function changeColor(color) {
                document.body.style.background = color;
            }
        </script>

    </head>


<body class="<?= $bodyname ?>">

<header>

    <nav>
        <input type="checkbox" id="menu-toggle"/>
        <label id="trigger" for="menu-toggle"></label>
        <label id="burger" for="menu-toggle"></label>
        <ul id="menu">
            <li><a href="portfolio.php"><h2>HOME</h2><p>Fresh start</p></a></li>
            <li><a href="portfolio.php"><h2>WORK</h2><p>some of my work</p></a></li>
            <li><a href="about.php"><h2>ABOUT</h2><p>Me, Myself and I</p></a></li>
        </ul>
    </nav>

</header>


    <main class="main_portfolio" id="accueil">

<section class="background_change">
        <p><b>Change the background depending on your mood</b></p>
    <section class="btn">
        <button class="blue" onclick = "changeColor('lightskyblue');">Butterfly Paradise</button>
        <button class="red" onclick = "changeColor('lightcoral');">Mother Nature</button>
        <button class="yellow"  onclick = "changeColor('yellow');">Summer Vibes</button>
        <button class="pink" onclick = "changeColor('pink');">Unicorn Universe</button>
        <button class="green" onclick = "changeColor('chartreuse');">Green Wonderland</button>
        <button class="orange" onclick = "changeColor('orange');">Automn Pumpkins</button>
        <button class="gray" onclick = "changeColor('slategray');">Nightsky Mood</button>
        <button class="mint" onclick = "changeColor('honeydew');">Mint Ice Cream</button>
        <button class="lavender" onclick = "changeColor('lavender');">Lavender field </button>
        <button class="fuchsia" onclick = "changeColor('fuchsia');">Britney Bitch </button>
    </section>
</section>


<!---------------------PRESENTATION--------------------------->
    <section class="text">
        <p>ABOUT ME</p>
        <p>///</p>
    </section>

    <section class="me" id="apropos">
        <article class="presentation">
            <img src="../image/IMG_0501.jpg" alt="moi" width="300px" height="350px"/>
        </article>
        <article class="texte_pres">
            <h3>Bonjour, moi c'est Alicia. Je suis actuellement en formation de développement web sur LaPlateforme_ basée à Marseille.</h3>
        </article>

    </section>

<section class="arrow">
    <img src="../image/icons8-expand-arrow-100.png" alt="arrow" width="80px"/>
</section>


    <!------------------COMPETENCES----------------------------->

    <section class="myplus">

        <section class="text">
            <p>WHAT I DO?</p>
            <p>//////</p>
        </section>

        <section class="competences" id="competences">



            <article class="comp">
                <h3>All of the languages I use</h3>
                <section class="column">

                    <img src="../image/html5.png" alt="html"/>
                    <img src="../image/css3.png" alt="css"/>
                    <img src="../image/js.png" alt="js"/>
                    <img src="../image/php.png" alt="php"/>

                </section>

            <section class="column">
                <img src="../image/icons8-sql-96.png" alt="sql"/>
                <img src="../image/github.png" alt="github"/>
                <img src="../image/icons8-wordpress-128.png" alt="wordpress"/>
            </section>

            </article>

        </section>

    </section>

    <section class="arrow">
        <img src="../image/icons8-expand-arrow-100.png" alt="arrow" width="80px"/>
    </section>

    <!---------------------------PROJETS-------------------------------->

    <section class="mywork">
        <section class="text">
            <p>MY WORK</p>
            <p>//////</p>
        </section>

        <section id="portfolio" class="work">
            <div class="portfolio-div">
            <article class="bloc1">

                <section class="projet">
                    <a  href="projet1.html" class="lien-projet1">
                        <img src="../image/projet2.png" alt="projet2"/>
                    </a>
                </section>

                <section class="projet">
                    <a  href="projet1.html" class="lien-projet1">
                        <img src="../image/projet3.png" alt="projet3"/>
                    </a>
                </section>
            </article>

                <article class="bloc2">
                <section class="projet">
                    <a  href="projet1.html" class="lien-projet1">
                        <img src="../image/projet4.png" alt="projet4"/>
                    </a>
                </section>


            </article>

                <section class="plus">
                    <a href="https://github.com/alicia-cordial/">
                        <img src="../image/icons8-plus-96.png" alt="plus"/>
                    </a>
                    <p>Pour plus de projets</p>
                </section>


            </div>

        </section>
    </section>




        <section class="arrow">
            <img src="../image/icons8-expand-arrow-100.png" alt="arrow" width="80px"/>
        </section>

        <section class="mail">


            <article>
            <a href="mailto:alicia.cordial@laplateforme.io"><img src="../image/icons8-important-mail-100.png" alt="mail"/></a>
            </article>


        </section>



    <!-------------------SCROLL------------------------------------------->

    <section class="scroll_to_top">
        <a href="#accueil"><img src=../image/icons8-up-arrow-100.png alt="arrowup" width="80px"/> </a>
    </section>
</main>


<!-------------------------FOOTER-------------------------------------->

<footer>
    <article class="footerinfos">

        <section class="imgsocial">
            <a href="https://www.linkedin.com/in/alicia-cordial-0538b8205/"><img src="../image/icons8-linkedin-26.png" alt="linkedin"/></a>
            <a href="https://github.com/alicia-cordial/"><img src="../image/icons8-github-30.png" alt="github"/></a>
        </section>


        <section class="production">
            <p>Alicia Cordial</p>
            <p>School : LaPlateforme_ Marseille</p>
            <p>alicia.cordial@laplateforme.io</p>
        </section>

    </article>
</footer>
<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
        $('.modal').modal();
    });

</script>

</body>

</html>