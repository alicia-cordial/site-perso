<?php


$title = "memory";
$bodyname = "memory";

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
                <img src="../image/3.1.png" alt="song">
            </label>
            <label class="card" for="item-2" id="song-2">
                <img src="../image/3.2.png" alt="song">
            </label>
            <label class="card" for="item-3" id="song-3">
                <img src="../image/3.3.png"  alt="song">
            </label>

        </div>

        <div class="upper-part">


        </div>
    </div>

    <section class="texte">

        <h1>MEMORY GAME</h1>

        <p>Create a Memory Game with at least 3 pairs.</p>
        <p>Project in Collab with May.</p>
        <p>To do the Website, we used:</p>
        <ul>
        <li>HTML and CSS (+Materialize for the header), for the Design and front-end part.</li>
        <li>PHP and SQL for the back-end. </li>
        </ul>
        <a href="https://alicia-cordial.students-laplateforme.io/memory/">Don't hesitate to go check our awesome Game here!!</a>
        <a href="https://github.com/huongmay-nguyenphuoc"> May Github link</a>
    </section>
</main>

<?php require_once('../includes/footer.php'); ?>