<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme Simply Me</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href=<?= style; ?>>
</head>
<body> 
<nav class="navbar navbar-default">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="logo" class="navbar-brand" href="accueil.php"><img src= <?= img ."bird.jpg" ?> alt="logo" width="50px;"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href= "index.php?page=accueil&prenom=marielaure">ACCUEIL <?= $_GET["prenom"] ; ?></a>
                </li>
                <li>
                    <a href="index.php?page=contact&color=blue">CONTACT</a>
                </li>
                <li>
                    <a href="index.php?page=about">A PROPOS</a>
                </li>

                <li>
                <a href="index.php?page=produits">NOS PRODUITS</a>
                </li>
                <li>
                <a href="index.php?page=blog">BLOG</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
