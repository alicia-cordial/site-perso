<?php


$title = "About";
$bodyname = "about";

session_start();

?>

<?php require_once('../includes/header.php'); ?>




<main>
<h1>ABOUT ME</h1>



    <article>
        <div class="Abdiv" id="Div1">
            <h2>ABOUT</h2>
            <p>Je suis basée sur Marseille et actuellement en première année de formation en développement. Je prépare actuellement mon projet professionnel en partenierat avec une entreprise.</p>
            <p>J'aime profiter de la vie, lire et voyager.</p>
        </div>
        <div class="Abdiv" id="Div2">
            <h2>COMPETENCES</h2>
            <p>HTML</p>
            <p>CSS</p>
            <p>PHP</p>
            <p>Javascript</p>
        </div>
    </article>
    <article>
        <div class="Abdiv" id="Div3">
            <h2>COMPETENCES</h2>
            <p>HTML</p>
            <p>CSS</p>
            <p>PHP</p>
            <p>Javascript</p>
        </div>
        <div  class="Abdiv Div4">
            <a href="projects.php">
            <div class="text-box">

                <p>Hello,</p>
                <p>Interested?</p>
                <p>Come here to see my projects!</p>

            </div>
            </a>
        </div>
    </article>







</main>


<?php require_once('../includes/footer.php'); ?>