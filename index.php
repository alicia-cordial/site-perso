<?php


$title = "Portfolio";
$bodyname = "portfolio";

session_start();

?>


<!--------------------------------HEADER---------------------------->
<?php require_once('includes/header.php'); ?>


<script>
    function changeColor(color) {
        document.body.style.background = color;
    }
</script>


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
        <article class="texte_pres">
            <h3>Bonjour, moi c'est Alicia. </h3>
                <h3>Je suis actuellement en formation de développement web sur LaPlateforme_ basée à Marseille.</h3>
        </article>

    </section>

<section class="arrow">
    <img src="./image/icons8-expand-arrow-100.png" alt="arrow" width="80px"/>
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

                    <img src="./image/html5.png" alt="html"/>
                    <img src="./image/css3.png" alt="css"/>
                    <img src="./image/js.png" alt="js"/>
                    <img src="./image/php.png" alt="php"/>

                </section>

            <section class="column">
                <img src="./image/icons8-sql-96.png" alt="sql"/>
                <img src="./image/github.png" alt="github"/>
                <img src="./image/icons8-wordpress-128.png" alt="wordpress"/>
            </section>

            </article>

        </section>

    </section>

    <section class="arrow">
        <img src="./image/icons8-expand-arrow-100.png" alt="arrow" width="80px"/>
    </section>

    <!---------------------------PROJETS-------------------------------->

    <section class="mywork">
        <section class="text">
            <p>MY WORK</p>
            <p>//////</p>
        </section>

        <section id="portfolio" class="work">
                <div class="slider">
                    <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
                    <input type="radio" name="slider" title="slide2" class="slider__nav"/>
                    <input type="radio" name="slider" title="slide3" class="slider__nav"/>
                    <input type="radio" name="slider" title="slide4" class="slider__nav"/>

                    <div class="slider__inner">
                        <div class="slider__contents"><i class="slider__image fa fa-codepen"></i>

                            <h2 class="slider__caption">-Memory-</h2>
                            <p class="slider__txt">Projet réalisé avec May. Utilisation de HTML + CSS (+ Materialize) + PHP (+classes) </p>

                            <a href="pages/projet1.php">
                                <img src="image/projet3.png" alt="projet2">
                            </a>
                            <a  href="https://github.com/alicia-cordial/memory">Pour voir mon code, c'est ici !</a>


                        </div>

                        <div class="slider__contents"><i class="slider__image fa fa-newspaper-o"></i>
                            <a href="pages/projet2.php">
                                <img src="image/projet2.png" alt="projet1">
                            </a>
                            <h2 class="slider__caption">-Réservations salle-</h2>
                            <p class="slider__txt">Projet perso. Utilisation de HTML + CSS (+ Materialize) + PHP (+classes)</p>
                            <a class="slider__txt" href="https://github.com/alicia-cordial/reservation-salles">Pour voir mon code, c'est ici !</a>
                        </div>

                        <div class="slider__contents"><i class="slider__image fa fa-television"></i>
                            <a href="pages/projet3.php">
                            <img src="image/projet4.png" alt="projet3">
                            </a>
                            <h2 class="slider__caption">-Gamebusters-</h2>
                            <p class="slider__txt">Projet réalisé avec May (e-commerce). Utilisation de HTML + CSS + PHP (+classes) </p>
                            <a class="slider__txt" href="https://github.com/alicia-cordial/boutique">Pour voir mon code, c'est ici !</a>
                        </div>

                        <div class="slider__contents" id="plus"><i class="slider__image fa fa-diamond"></i>
                            <a href="https://github.com/alicia-cordial/">
                                <img src="image/icons8-plus-96.png" alt="plus"/>
                            </a>
                            <h2 class="slider__caption">Pour plus de projets</h2>
                            <p class="slider__txt">Redirection vers Github</p>
                        </div>

                    </div>
                </div>

        </section>
    </section>




        <section class="arrow">
            <img src="./image/icons8-expand-arrow-100.png" alt="arrow" width="80px"/>
        </section>

        <section class="mail">


            <article>
            <a href="mailto:alicia.cordial@laplateforme.io"><img src="./image/icons8-important-mail-100.png" alt="mail"/></a>
            </article>


        </section>



    <!-------------------SCROLL------------------------------------------->

    <section class="scroll_to_top">
        <a href="#accueil"><img src=./image/icons8-up-arrow-100.png alt="arrowup" width="80px"/> </a>
    </section>
</main>


<!-------------------------FOOTER-------------------------------------->

<footer>
    <article class="footerinfos">

        <section class="imgsocial">
            <a href="https://www.linkedin.com/in/alicia-cordial-0538b8205/"><img src="image/icons8-linkedin-26.png" alt="linkedin"/></a>
            <a href="https://github.com/alicia-cordial/"><img src="image/icons8-github-30.png" alt="github"/></a>
        </section>


        <section class="production">
            <p>Alicia Cordial</p>
            <p>School : LaPlateforme_ Marseille</p>
            <p>alicia.cordial@laplateforme.io</p>
        </section>

    </article>
</footer>


</body>

</html>