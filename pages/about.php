<?php


$title = "about";
$bodyname = "about";

session_start();

?>


    <!--------------------------------HEADER---------------------------->
<?php require_once('../includes/header.php'); ?>




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
                        <p>Suivez mes projets sur Github</p>
                    </div>

                    <div class="card item-4 sm">
                        <h2>CONTACT</h2>
                        <p>ALICIA CORDIAL</p>
                        <p>alicia.cordial@laplateforme.io</p>
                        <p>Linkedin</p>
                    </div>
            </div>
        </div>


</main>









<!-------------------------FOOTER-------------------------------------->

<?php require_once('../includes/footer.php'); ?>
