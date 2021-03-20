<?php


$title = "Portfolio";
$bodyname = "porfolio";

session_start();

?>

<?php require_once('../includes/header.php'); ?>
    <progress id="progress"></progress>

<main class="main_portfolio">

    <section class="image">
        <img src="../image/montage.jpg" alt="floral"/>
    </section>


    <section class="text">
        <p>ABOUT ME</p>
        <p>///</p>
    </section>

    <section class="me">
        <article class="presentation">
            <img src="../image/IMG_0501.jpg" alt="moi" width="300px" height="350px"/>
            <h3>Je m'appelle Alicia. Je suis en formation de développement web à LaPlateforme_ basée à Marseille.</h3>
        </article>

        <article class="textme">
            <p><strong>Je suis actuellement en préparation de mon projet professionnel de fin d'année.</strong> Je suis à la recherche, à partir de septembre 2021, d'une alternance dans une entreprise dans les régions PACA et Rhône-Alpes. Je suis plus intéressée par le front-end mais je suis ouverte à un peu de back-end. Je suis très interessée par les différentes cultures, les langues et différents projets qui me permettent de créer(couture, peinture, développement web). Si jamais mon profil vous intéresse, n'hésiter pas à coutinuer votre séjour sur mon site. </p>
        </article>
    </section>

    <section class="myplus">
        <section class="text">
            <p>WHAT I DO?</p>
            <p>//////</p>
        </section>
        <section class="competences">
            <h3>All of the languages I use</h3>
<section class="columns">
            <article class="comp">
                <h4>HTML</h4>
                <p>L'HyperText Markup Language, HTML, désigne un type de langage informatique descriptif. Il s'agit plus précisément d'un format de données utilisé dans l'univers d'Internet pour la mise en forme des pages Web.</p>
            </article>

            <article class="comp">
                <h4>CSS</h4>
                <p>CSS est l'acronyme de « Cascading Style Sheets » ce qui signifie « feuille de style en cascade ». Le CSS correspond à un langage informatique permettant de mettre en forme des pages web (HTML ou XML). </p>
            </article>

            <article class="comp">
                <h4>JAVASCRIPT</h4>
                <p>JavaScript (qui est souvent abrégé en « JS ») est un langage de script léger, orienté objet, principalement connu comme le langage de script des pages web. </p>
            </article>

            <article class="comp">
                <h4>PHP</h4>
                <p>PHP (officiellement, ce sigle est un acronyme récursif pour PHP Hypertext Preprocessor ) est un langage de scripts généraliste et Open Source, spécialement conçu pour le développement d'applications web.</p>
            </article>
</section>

        </section>
    </section>


    <section class="mywork">
        <section class="text">
            <p>MY WORK</p>
            <p>//////</p>
        </section>

        <section class="work">
            <p>PROJET1</p>
            <p>PROJET2</p>
            <p>PROJET3</p>

        </section>
    </section>



</main>
<?php require_once('../includes/footer.php'); ?>