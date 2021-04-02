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

        <h1>Gamebusters</h1>

        <p>Do an E-Shop Website.</p>
        <p>Project in Collab with May</p>
        <p>We decided to make a video-games shop.</p>
        <p>We really wanted to have a Customer experience.</p>
        <p>We also created an admin part where he/she could manage the Shop.</p>
        <p>There's also a Paypal option available to purchase. </p>
        <ul>
        <li>HTML and CSS for the Design et the front-end part</li>
        <li>PHP and SQL for the back-end.</li>
        </ul>
        <a href="https://alicia-cordial.students-laplateforme.io/work/boutique/">Don't forget to test our E-Shop !</a>
        <a href="https://github.com/huongmay-nguyenphuoc"><p>Link to May's Github</p></a>
    </section>

    </main>

<?php require_once('../includes/footer.php'); ?>