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
            <div class="row justify-content-center align-items-center g-2">

                <form method="post">
                    <div class="card form_card_contact">
                        <div class="card-body">
                            <?php
                            if (isset($_REQUEST['erreur']) && $_REQUEST['erreur'] == 1) {
                                echo '<h3 style="color: red;"> Identifiant ou mot de passe incorrect </h3>';
                            }
                            ?>
                            <div class="mb-3">
                                <label for="" class="form-label">identifiant*</label>
                                <input type="name" class="form-control input_contact" name="identifiant" id=""
                                    placeholder="Votre identifiant" />
                                <small class="form-text text-muted ">entrez votre nom</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Mot de passe*</label>
                                <input type="password" class="form-control input_contact" name="mdp" id=""
                                    placeholder="votre mot de passe" />
                                <small class="form-text text-muted">entrez votre mot de passe</small>
                            </div>

                            <div class="row justify-content-center align-items-center">
                                <button type="submit" class="btn submit_contact largeur2grid1">
                                    Submit
                                </button>
                            </div>

                            <p class="card-text">*Champ obligatoire</p>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_POST['identifiant'], $_POST['mdp'])) {
                    $identifiant = $_POST['identifiant'];
                    $mdp = $_POST['mdp'];
                    if ($identifiant == 'admin' && $mdp == 'admin') {
                        $_SESSION['connected'] = 'True';
                        echo '<meta http-equiv="refresh" content="0;url=admin_home.php">';
                    } else {
                        echo '<meta http-equiv="refresh" content="0;url=Admin.php?erreur=1">';
                    }
                }
                ?>
            </div>
    </main>
    <footer>
        <?php
        include "Footer.php"
            ?>
    </footer>
</body>

</html>