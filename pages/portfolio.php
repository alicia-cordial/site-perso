<?php


$title = "Portfolio";
$bodyname = "porfolio";

session_start();

?>


<!--------------------------------HEADER---------------------------->

<?php require_once('../includes/header.php'); ?>
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
        <section class="image">
        <!--<img src="../image/montage.jpg" alt="floral"/>-->
    </section>

<!---------------------PRESENTATION--------------------------->
    <section class="text">
        <p>ABOUT ME</p>
        <p>///</p>
    </section>

    <section class="me" id="apropos">
        <article class="presentation">
            <img src="../image/IMG_0501.jpg" alt="moi" width="300px" height="350px"/>
            <h3>Je m'appelle Alicia. Je suis en formation de développement web à LaPlateforme_ basée à Marseille.</h3>
        </article>

        <article class="textme">
            <p><strong>Je suis actuellement en préparation de mon projet professionnel de fin d'année.</strong> Je suis à la recherche, à partir de septembre 2021, d'une alternance dans une entreprise dans les régions PACA et Rhône-Alpes. Je suis plus intéressée par le front-end mais je suis ouverte à un peu de back-end. Je suis très interessée par les différentes cultures, les langues et différents projets qui me permettent de créer(couture, peinture, développement web). Si jamais mon profil vous intéresse, n'hésiter pas à coutinuer votre séjour sur mon site. </p>
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
            <h3>All of the languages I use</h3>

            <article class="comp">
                <section class="column">
              <img src="../image/html5.png" alt="html"/>
                <img src="../image/css3.png" alt="css"/>
                <img src="../image/js.png" alt="js"/>
                <img src="../image/php.png" alt="php"/>
                <img src="../image/sql.png" alt="sql"/>
                </section>

            <section class="column">
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
                <section>
                    <figcaption> <h5>PROJET2</h5></figcaption>

                    <a  href="projet1.html" class="lien-projet1"></a>
                </section>

                <section>
                    <figure>
                        <figcaption> <h5>PROJET2</h5></figcaption>

                        <a  href="projet1.html" class="lien-projet1"></a>
                    </figure>
                </section>

                <section>
                    <figure>
                        <figcaption> <h5>PROJET3</h5></figcaption>

                        <a  href="projet1.html" class="lien-projet1"></a>
                    </figure>
                </section>

                <section>
                    <figure>
                        <figcaption> <h5>PROJET4</h5></figcaption>

                        <a  href="projet1.html" class="lien-projet1"></a>
                    </figure>
                </section>

                <section>
                    <figure>
                        <figcaption> <h5>PROJET5</h5></figcaption>
                        <img src="" alt/>
                    </figure>
                </section>


            </article>



            </div>

        </section>
    </section>


    <!-------------------SCROLL------------------------------------------->

    <section class="scroll_to_top">
        <a href="#accueil"><img src=../image/icons8-up-arrow-100.png alt="arrowup" width="80px"/> </a>
    </section>

</main>


<!-------------------------FOOTER-------------------------------------->

<?php require_once('../includes/footer.php'); ?>