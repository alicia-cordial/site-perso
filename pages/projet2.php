<?php


$title = "reservations_salle";
$bodyname = "reservations";

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
        <h1>Hall booking</h1>

        <p>Make a hall booking system.</p>
        <p>Solo Project.</p>
        <p>I decided to do a Hall booking Website for an Art University in Paris.</p>
        <p>For this Website, I used:</p>
        <ul>
        <li>HTML and CSS for the Design et the front-end part.</li>
        <li>PHP and SQL for the back-end. </li>
        </ul>
        <p>Don't forget to check my Website to see the result!</p>
    </section>

    </main>

<?php require_once('../includes/footer.php'); ?>