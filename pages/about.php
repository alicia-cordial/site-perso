<?php


$title = "about";
$bodyname = "about";

session_start();

?>


<!--------------------------------HEADER---------------------------->



<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Alicia Cordial">
    <meta name="description" content="Alicia Cordial actuellement en formation fullStack de developpemnt web à laPlateforme à Marseille. Recherche une alternance pour septembre 2021">
    <meta name="Alicia Cordial" content="index,follow">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inconsolata&display=swap" rel="stylesheet">

    <link rel= "stylesheet" type="text/css" href= "../style/about.css">
    <link rel= "stylesheet" type="text/css" href= "../style/footer.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<link rel="short icon" href="../image/icons8-aquarius-30.png"/>

    <title> <?= $title ?> - Alicia Cordial- développeuse Web Full Stack</title>
</head>


<body class="<?= $bodyname ?>">

<header>
<nav class="pink lighten-3">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">ABOUT</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
            <li id="home"><a href="../index.html"><p>-Fresh start-</p></a></li>
            <li id="project1"><a href="../pages/projet1.php"><p>-Memory-</p></a></li>
            <li id="project2"><a href="../pages/projet2.php"><p>-Hall Booking-</p></a></li>
            <li id="project3"><a href="../pages/projet3.php"><p>-Gamebusters-</p></a></li>
            <li id="aboutme"><a href="../pages/about.php"><p>-Learn more about me-</p></a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
  <li id="home"><a href="../php"><p>HOME-Fresh start-</p></a></li>
            <li id="project1"><a href="../pages/projet1.php"><p>-Memory-</p></a></li>
            <li id="project2"><a href="../pages/projet2.php"><p>-Hall Booking-</p></a></li>
            <li id="project3"><a href="../pages/projet3.php"><p>-Gamebusters-</p></a></li>
            <li id="aboutme"><a href="../pages/about.php"><p>-Learn more about me-</p></a></li>
  </ul>
          
</header>
<main class="about_me">

    <div>
        <h1>ABOUT ME</h1>

    </div>


      

    <div class="row">

<div class="col s12 subhead-1">
    <h2>MY ACADEMIC BACKGROUND</h2>
        <p><strong>2020-2021</strong> : Coding School in LaPlateforme_ Marseille</p>
        <p><strong>2017-2020</strong> : Studies in physical therapy in Emmendingen in Germany</p>
        <p><strong>2014</strong> : Scientific Baccalaureate.</p>

        <h2>MY JOB BACKGROUND</h2>
        <p><strong>2020-2021</strong> : Different Projects in my Coding School in LaPlateforme_ Marseille</p>
        <p><strong>2016-2020</strong> : Training in physical therapy in different Hospitals in Germany</p>
        <p><strong>2015-2016</strong> : FSJ(social service) in Tübingen in Germany</p>
</div>

    <div class="col s12 m4 l2 item-1"> 
    <h2>THE LANGUAGES I USE</h2>

<h3>FRONT-END</h3>
<ul>
    <li>HTML5</li>
    <li>CSS3</li>
    <li>Javascript</li>
</ul>

<h3>BACK-END</h3>
<ul>
    <li>PHP</li>
    <li>SQL</li>
</ul>
</div>


    <div class="col s12 m6 l8 item-2">                   
     <h2>ME</h2>
        <p>Hi, my name is Alicia Cordial, I'm a fullstack web developer Student, based in Marseille. If I have to choose, I prefer to do the front-end part. I really enjoy doing Projects with a unique Design, aesthetic and an essence.</p>
    </div>
    
 

  

    <div class="col s12 m6 l3 item-3">
    <h2>WHAT I LOVE</h2>
        <p>Painting</p>
        <p>Sewing</p>
        <p>Yoga</p>
        <p>Art, Culture, Architecture</p>
        <p>Travel</p>
        <p>History</p>
    </div>

    <div class="col s12 m6 l3 item-4">
    <h2>CONTACT</h2>
        <p>ALICIA CORDIAL</p>
        <a href="https://laplateforme.io/">More informations about my school</a>
        <a href="mailto:alicia.cordial@laplateforme.io">alicia.cordial@laplateforme.io<img src="../image/icons8-important-mail-100.png" width="30px" alt="mail"/></a>
        <a href="https://www.linkedin.com/in/alicia-cordial-0538b8205/">Linkedin<img src="../image/icons8-linkedin-26.png" alt="github" width="30px"></a>
        <a href="https://github.com/alicia-cordial/">Github<img src="../image/icons8-github-30.png" alt="github"/></a>
        <button><a href="../CV/ALICIA CORDIAL.pdf">Pour voir mon CV</button>

    </div>
  
  </div>
          
</main>







          

<!-------------------------FOOTER-------------------------------------->

<?php require_once('../includes/footer.php'); ?>
