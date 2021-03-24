<?php


$title = "reservations_salle";
$bodyname = "reservations";

session_start();

?>



<?php require_once('../includes/header_project.php'); ?>

    <main class="main_projet1">

        <div class="container">
            <input type="radio" name="slider" id="item-1" checked>
            <input type="radio" name="slider" id="item-2">
            <input type="radio" name="slider" id="item-3">
            <div class="cards">
                <label class="card" for="item-1" id="song-1">
                    <img src="../image/2.1.png" alt="song">
                </label>
                <label class="card" for="item-2" id="song-2">
                    <img src="../image/2.2.png" alt="song">
                </label>
                <label class="card" for="item-3" id="song-3">
                    <img src="../image/2.3.png"  alt="song">
                </label>

            </div>

            <div class="upper-part">


            </div>

        </div>

    <section class="texte">
        <h1>LES RÉSERVATIONS DE SALLE</h1>

        <p>Faire un système de réservations de salle</p>
        <p>Projet réalisé en solo.</p>
        <p>Nous avons décidé de partir sur un mélange de jeu de divinité et le jeu du mémory.</p>
        <p>Nous avons utilisé pour créer ce site</p>
        <li>HTML et CSS (+Materialize pour le header) pour le design et la partie front-end</li>
        <li>PHP et SQL pour le back-end </li>
        <p>N'hésitez pas à essayer ce merveilleux jeu avec ce lien !</p>
    </section>

    </main>

<?php require_once('../includes/footer.php'); ?>