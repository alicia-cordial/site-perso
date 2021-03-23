<!doctype html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inconsolata&display=swap" rel="stylesheet">
    <link rel= "stylesheet" type="text/css" href= "../style/header.css">
    <link rel= "stylesheet" type="text/css" href= "../style/about.css">
    <link rel= "stylesheet" type="text/css" href= "../style/footer.css">
    <link rel= "stylesheet" type="text/css" href= "../style.css">

    <title> <?= $title ?> - Alicia Cordial</title>
</head>


<body class="<?= $bodyname ?>">

<header>

    <nav>
    <input type="checkbox" id="menu-toggle"/>
    <label id="trigger" for="menu-toggle"></label>
    <label id="burger" for="menu-toggle"></label>
    <ul id="menu">
        <li><a href="portfolio.php"><h2>HOME</h2><p>Fresh start</p></a></li>
        <li><a href="portfolio.php"><h2>WORK</h2><p>some of my work</p></a></li>
        <li><a href="about.php"><h2>ABOUT</h2><p>Me, Myself and I</p></a></li>
    </ul>
    </nav>

</header>