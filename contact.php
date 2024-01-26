<?php
require_once "PDO.php"
    ?>
<html lang="fr">

<head>
    <title>Genshin VA VF - Contact</title>
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
            <h1>Nous contacter</h1>
            <img src="media/ligne.png" alt="" class="ligne_sous_titre" style="width: 50%;" />
            <div class="row justify-content-center align-items-center g-2">

                <form method="post">
                    <div class="card form_card_contact">
                        <div class="card-header">
                            <h3>Formulaire de contact</h3>
                        </div>
                        <div class="card-body">
                            <?php
                            if (isset($_REQUEST['erreur']) && $_REQUEST['erreur'] == 1) {
                                echo '<h3 style="color: red;"> veuillez remplir tous les champs </h3>';
                            }
                            if (isset($_REQUEST['erreur']) && $_REQUEST['erreur'] == 2) {
                                echo '<h3 style="color: red;"> veuillez renseigner votre genre </h3>';
                            }
                            ?>
                            <div class="mb-3">
                                <label for="" class="form-label">Nom*</label>
                                <input type="name" class="form-control input_contact" name="nom" id="" placeholder="Votre nom" />
                                <small class="form-text text-muted ">entrez votre nom</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Prénom*</label>
                                <input type="name" class="form-control input_contact" name="prenom" id=""
                                    placeholder="Votre prénom" />
                                <small class="form-text text-muted">entrez votre prénom</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email*</label>
                                <input type="email" class="form-control input_contact" name="mail" id=""
                                    placeholder="genshinvavf@gmail.com" />
                                <small class="form-text text-muted">entrez un Email</small>
                            </div>
                            <div class="btn-group btn-group-toggle radios_contact" data-toggle="buttons">
                                <h6 class="largeur3grid1">Choisissez votre genre*</h6>
                                <label class="btn">
                                    <input type="radio" class="input_contact" name="genre" id="option1" autocomplete="off" value="1" />
                                    Homme
                                </label>
                                <label class="btn">
                                    <input type="radio" class="input_contact" name="genre" id="option2" autocomplete="off" value="2" />
                                    Femme
                                </label>
                                <label class="btn">
                                    <input type="radio" class="input_contact" name="genre" id="option3" autocomplete="off" value="3" />
                                    Autre
                                </label>
                            </div>
                            <div class="mb-3 largeur2grid1">
                                <label for="" class="form-label">Titre du message*</label>
                                <input type="text" class="form-control input_contact" name="titre" id=""
                                    placeholder="Titre de votre message" />
                            </div>
                            <div class="mb-3 largeur2grid1">
                                <label for="" class="form-label">Votre message*</label>
                                <textarea class="form-control input_contact" name="message" id="" rows="3"
                                    placeholder="Bonjour,&#10;..."></textarea>
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
                if (isset($_REQUEST['nom']) && isset($_REQUEST['prenom']) && isset($_REQUEST['mail']) && isset($_REQUEST['genre']) && isset($_REQUEST['titre']) && isset($_REQUEST['message']) && $_REQUEST['nom'] != '' && $_REQUEST['prenom'] != '' && $_REQUEST['mail'] != '' && $_REQUEST['genre'] != '' && $_REQUEST['titre'] != '' && $_REQUEST['message'] != '') {
                    $prenom = $_REQUEST['prenom'];
                    $nom = $_REQUEST['nom'];
                    $mail = $_REQUEST['mail'];
                    $genre = $_REQUEST['genre'];
                    $titre = $_REQUEST['titre'];
                    $message = $_REQUEST['message'];

                    if ($genre != 0) {
                        $send_contact = "INSERT INTO contact(nom,prenom,mail,genre,titre,message) 
                    VAlUES ('$nom','$prenom','$mail','$genre','$titre','$message')";
                        $pdo->exec($send_contact);
                        echo '<meta http-equiv="refresh" content="0;url=contact.php?sended=1">';
                    } else {
                        echo '<meta http-equiv="refresh" content="0;url=contact.php?erreur=2">';
                    }
                } else if (isset($_REQUEST['nom']) || isset($_REQUEST['prenom']) || isset($_REQUEST['mail']) || isset($_REQUEST['genre']) || isset($_REQUEST['titre']) || isset($_REQUEST['message'])) {
                    echo '<meta http-equiv="refresh" content="0;url=contact.php?erreur=1">';
                }
                ?>
            </div>
            <footer>
                <?php
                include "Footer.php"
                    ?>
            </footer>
        </div>

    </main>

</body>

</html>