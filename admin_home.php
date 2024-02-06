<?php
require_once "PDO.php";
session_start();
?>

<html lang="fr">

<head>
    <title>Genshin VA VF - admin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="media/genshinvavf_logo.ico" type="image/x-icon" />
</head>

<body>
    <header>
        <?php
        include "header.php"
            ?>
    </header>
    <main>
        <img class="image_top" src="media/haut_de_page.png" alt="" />
        <div class="body_container">
            <h1>Portail admin</h1>
            <img src="media/ligne.png" alt="" class="ligne_sous_titre" style="width: 50%;" />
            <div class="row justify-content-center align-items-center g-2 grid_admin_home">
                <a href="admin_contact.php"><div class="card text-start">
                    <div class="card-body">
                        <h4 class="card-title">Contact</h4>
                        <p class="card-text">résultat des demande de contact</p>
                    </div>
                </div>
                </a>
                <a href="admin_contact.php"><div class="card text-start">
                    <div class="card-body">
                        <h4 class="card-title">Contact</h4>
                        <p class="card-text">résultat des demande de contact</p>
                    </div>
                </div>
                </a>
                <a href="admin_contact.php"><div class="card text-start">
                    <div class="card-body">
                        <h4 class="card-title">Contact</h4>
                        <p class="card-text">résultat des demande de contact</p>
                    </div>
                </div>
                </a>

            </div>
    </main>
    <footer>
        <?php
        include "Footer.php"
            ?>
    </footer>
</body>

</html>