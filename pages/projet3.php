<?php


$title = "gamebusters";
$bodyname = "gamebusters";

session_start();

?>



<?php require_once('../includes/header.php'); ?>

    <main class="main_projet1">

        <div class="container">
            <input type="radio" name="slider" id="item-1" checked>
            <input type="radio" name="slider" id="item-2">
            <input type="radio" name="slider" id="item-3">
            <div class="cards">
                <label class="card" for="item-1" id="song-1">
                    <img src="../image/4.1.png" alt="song">
                </label>
                <label class="card" for="item-2" id="song-2">
                    <img src="../image/4.2.png" alt="song">
                </label>
                <label class="card" for="item-3" id="song-3">
                    <img src="../image/4.3.png"  alt="song">
                </label>

            </div>

            <div class="upper-part">


            </div>

        </div>

    <section class="texte">

        <h1>LA BOUTIQUE EN LIGNE</h1>

        <p>Faire une boutique en ligne.</p>
        <p>Projet réalisé avec May.</p>
        <p>Nous avons décidé de partir sur une boutique de jeux vidéos.</p>
        <p>Nous avons vraiment mis en avant le design et l'expérience client.</p>
        <p>Nous avons également fait une partie administrateur pour que ce dernier puisse gérer toute la partie boutique.</p>
                <p>Nous avons également mis en place un système de payement à l'aide de Paypal. </p>
        <li>HTML et CSS pour le design et la partie front-end</li>
        <li>PHP et SQL pour le back-end.</li>
        <p>N'hésitez pas à tester notre boutique en ligne avec ce lien !</p>
        <a href="https://github.com/huongmay-nguyenphuoc"><p>Lien github de May</p></a>
    </section>

    </main>

<?php require_once('../includes/footer.php'); ?>