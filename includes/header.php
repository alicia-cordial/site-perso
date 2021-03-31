<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inconsolata&display=swap" rel="stylesheet">
    <link rel= "stylesheet" type="text/css" href= "../style/header.css">
    <link rel= "stylesheet" type="text/css" href= "../style/projets.css">
    <link rel= "stylesheet" type="text/css" href= "../style/footer.css">

    <title> <?= $title ?> - Alicia Cordial</title>
</head>


<body class="<?= $bodyname ?>">

<header>

    <nav>
        <input type="checkbox" id="menu-toggle"/>
        <label id="trigger" for="menu-toggle"></label>
        <label id="burger" for="menu-toggle"></label>
        <ul id="menu">
            <li id="home"><a href="../index.php"><h2>HOME</h2><p>-Fresh start-</p></a></li>
            <li id="project1"><a href="../pages/projet1.php"><h2>WORK 1</h2><p>-Memory-</p></a></li>
            <li id="project2"><a href="../pages/projet2.php"><h2>WORK 2</h2><p>-Hall booking-</p></a></li>
            <li id="project3"><a href="../pages/projet3.php"><h2>WORK 3</h2><p>-Gamebusters-</p></a></li>
            <li id="aboutme"><a href="../pages/about.php"><h2>ABOUT ME</h2><p>-Learn more about me-</p></a></li>

        </ul>
    </nav>

</header>