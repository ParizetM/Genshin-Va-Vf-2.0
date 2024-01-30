<?php
require_once "PDO.php";

if (isset($_REQUEST['id_discord']) && isset($_FILES['fichier_audi']) && isset($_REQUEST['type_rythmo']) && isset($_REQUEST['commentaire']) && isset($_REQUEST['region_perso']) && isset($_REQUEST['element_perso']) && $_REQUEST['id_discord'] != '' && $_REQUEST['type_rythmo'] != '' && $_REQUEST['commentaire'] != '' && $_REQUEST['region_perso'] != '' && $_REQUEST['element_perso'] != '') {
    $fichier_audi = $_REQUEST['id_discord'].$_FILES['fichier_audi']['name'];
    $id_discord = $_REQUEST['id_discord'];
    $type_rythmo = $_REQUEST['type_rythmo'];
    $commentaire = $_REQUEST['commentaire'];
    $region_perso = $_REQUEST['region_perso'];
    $element_perso = $_REQUEST['element_perso'];
    if (strlen($id_discord) > 16 && strlen($id_discord) < 19) {
        if ($type_rythmo != 0) {
            $send_depot_audition = "INSERT INTO depot_audition(id_discord,chemin_audi,type_rythmo,commentaire,region_perso,element_perso) 
                    VAlUES ('$id_discord','uploads/$fichier_audi','$type_rythmo','$commentaire','$region_perso','$element_perso')";
            $pdo->exec($send_depot_audition);
            if (isset($_FILES['fichier_audi'])) {
                $uploadedFile = $_FILES['fichier_audi'];
                
                if ($uploadedFile['error'] !== UPLOAD_ERR_OK) {
                    echo 'Erreur lors de l\'upload du fichier. Code d\'erreur : ' . $uploadedFile['error'];
                }
            
                $destination = 'uploads/' .$id_discord. $uploadedFile['name'];
                move_uploaded_file($uploadedFile['tmp_name'], $destination);
            
                echo 'Fichier enregistré avec succès';
            }
            echo '<meta http-equiv="refresh" content="0;url=Depot%20audition.php?sended=1">';
        } else {
            echo '<meta http-equiv="refresh" content="0;url=Depot%20audition.php?erreur=2">';
        }
    } else {
        echo '<meta http-equiv="refresh" content="0;url=Depot%20audition.php?erreur=3">';
    }
} else if (isset($_REQUEST['id_discord']) || isset($_REQUEST['fichier_audi']) || isset($_REQUEST['type_rythmo']) || isset($_REQUEST['commentaire']) || isset($_REQUEST['region_perso']) || isset($_REQUEST['element_perso'])) {
    echo '<meta http-equiv="refresh" content="0;url=Depot%20audition.php?erreur=1">';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Genshin VA VF déposer une audition</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
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
        <div class="container">
            <div class="row justify-content-center align-items-center g-2 contact_title">
                <h1>Déposer une audition</h1>
                <img src="media/ligne.png" alt="" class="ligne_sous_titre" style="width: 80%;" />
            </div>
        </div>
        <div class="container_howto_audi">
            <div class="container">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="accordion" id="accordionExamplee">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h4>Comment auditioner</h4>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExamplee">
                                <div class="accordion-body ac_body_ul">
                                    <ul>
                                        <li>
                                            <h4>
                                                <h5>plusieurs points sont important :</h5>
                                            </h4>
                                        </li>
                                        <li>Essayez d'être seul.e dans une pièce</li>
                                        <li>Pour éviter l'écho mettez vous sous une couette</li>
                                        <li>
                                            Enregistrez de préférence avec le micro de votre
                                            téléphone si vous n'avez pas de bon micro
                                        </li>
                                        <li>
                                            <h4>
                                                <h5>Pour les modalités :</h5>
                                            </h4>
                                        </li>
                                        <li>
                                            Vous avez le droit de poster plusieurs auditions (<em>
                                                mais évitez de poster les premiers essais </em>)
                                        </li>
                                        <li>
                                            Si vous voulez poster une audition pour vous amusez
                                            faites le sur discord dans <br />#┊audition-fun
                                        </li>
                                        <li>
                                            ⚠️ Les auditions doivent OBLIGATOIREMENT être faites
                                            avec des bandes rythmo (<em>Si le personnage en possède une</em>). Sans
                                            cela, elles ne seront pas comptabilisées⚠️
                                        </li>
                                        <li>
                                            <h4>
                                                <h5>
                                                    Si vous postez votre voix sur le serveur vous vous
                                                    engagez à ce qu'elle puisse être postée publiquement
                                                </h5>
                                            </h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container_story">
            <div class="container">
                <div class="row justify-content-center align-items-center g-2">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseZero" aria-controls="collapseZero">
                                    Via le site
                                </button>
                            </h2>
                            <div id="collapseZero" class="accordion-collapse collapse 
                            <?php
                            if (isset($_REQUEST['erreur']) && $_REQUEST['erreur'] != 0) {
                                echo 'show';
                            } else {
                                echo '';
                            }
                            ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="card form_card_demande">
                                        <div class="card-header">
                                            <h3>formulaire d'audition</h3>
                                        </div>
                                        <form method="post" enctype="multipart/form-data">
                                            <?php
                                            if (isset($_REQUEST['erreur']) && $_REQUEST['erreur'] == 1) {
                                                echo '<h3 style="color: red;"> veuillez remplir tous les champs </h3>';
                                            }
                                            if (isset($_REQUEST['erreur']) && $_REQUEST['erreur'] == 2) {
                                                echo '<h3 style="color: red;"> veuillez bien renseigner le type de rythmo, la region et l' . "'" . 'element </h3>';
                                            }
                                            if (isset($_REQUEST['erreur']) && $_REQUEST['erreur'] == 3) {
                                                echo '<h3 style="color: red;"> Identifiant discord invalide </h3>';
                                            }
                                            ?>
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="" class="form-label discord_tip">identifiant utilisateur
                                                        Discord*<button type="button" class="btn tooltip_demande"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="pour le trouver faites clic droit sur votre profil et cliquer sur copier l'identifiant d'utilisateur">
                                                            ?
                                                        </button>
                                                    </label>
                                                    <input type="number" class="form-control" name="id_discord"
                                                        placeholder="ex : 288721989240094720" />
                                                    <small class="form-text text-muted">entrez votre id utilisateur
                                                        discord*</small>
                                                </div>
                                                <select class="form-select my-auto select_demande"
                                                    aria-label="Default select example" name="type_rythmo">
                                                    <option selected value="0">Type de rythmo*</option>
                                                    <option value="1">Dialogue en jeu</option>
                                                    <option value="2">Démo de personnage</option>
                                                    <option value="3">
                                                        cinématique Youtube officiel
                                                    </option>
                                                    <option value="4">cinématique en jeu</option>
                                                </select>
                                                <div class="mb-3 largeur2grid1">
                                                    <label for="" class="form-label">Document audio/vidéo*</label>
                                                    <input type="file" class="form-control" name="fichier_audi" />
                                                    <small class="form-text text-muted">type de document accepté :
                                                        mp3,wave,mp4,mov
                                                    </small>
                                                </div>
                                                <select class="form-select select_demande"
                                                    aria-label="Default select example" name="region_perso">
                                                    <option selected value="0">Région du personnage*</option>
                                                    <option value="1">Monstadt</option>
                                                    <option value="2">Liyue</option>
                                                    <option value="3">Inazuma</option>
                                                    <option value="4">Sumeru</option>
                                                    <option value="5">Fontaine</option>
                                                    <option value="6">Natlan</option>
                                                    <option value="7">Snezhnaya</option>
                                                    <option value="8">Khaenri'ah</option>
                                                    <option value="9">autre</option>
                                                </select>
                                                <select class="form-select select_demande"
                                                    aria-label="Default select example" name="element_perso">
                                                    <option selected value="0">Élément du personnage*</option>
                                                    <option value="1">Anémo</option>
                                                    <option value="2">Hydro</option>
                                                    <option value="3">Pryro</option>
                                                    <option value="4">Dendro</option>
                                                    <option value="5">Electro</option>
                                                    <option value="6">Cryo</option>
                                                    <option value="7">autre</option>
                                                </select>
                                                <div class="mb-3 largeur2grid1">
                                                    <label for="" class="form-label">commentaire*</label>
                                                    <textarea class="form-control" name="commentaire" id="" rows="3"
                                                        placeholder="Bonjour,&#10;..."></textarea>
                                                </div>
                                                <div class="row justify-content-center  largeur2grid1">
                                                    <button type="submit" class="btn submit_contact">
                                                        Submit
                                                    </button>
                                                </div>
                                                <p class="card-text">*Champ obligatoire</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Via Discord
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse "
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Allez dans <a href="https://discord.gg/AYcpTCEdm9" target="_blank">
                                        <button class="salon_audition" type="button">
                                            <svg class="icon_eff5d4" aria-hidden="true" role="img"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M18.91 12.98a5.45 5.45 0 0 1 2.18 6.2c-.1.33-.09.68.1.96l.83 1.32a1 1 0 0 1-.84 1.54h-5.5A5.6 5.6 0 0 1 10 17.5a5.6 5.6 0 0 1 5.68-5.5c1.2 0 2.32.36 3.23.98Z"
                                                    class=""></path>
                                                <path fill="currentColor"
                                                    d="M19.24 10.86c.32.16.72-.02.74-.38L20 10c0-4.42-4.03-8-9-8s-9 3.58-9 8c0 1.5.47 2.91 1.28 4.11.14.21.12.49-.06.67l-1.51 1.51A1 1 0 0 0 2.4 18h5.1a.5.5 0 0 0 .49-.5c0-4.2 3.5-7.5 7.68-7.5 1.28 0 2.5.3 3.56.86Z"
                                                    class=""></path>
                                            </svg>≻≻≻auditions≺≺≺
                                        </button></a> et choisissez votre personnage à doubler. <br /> Si vous ne
                                    trouvez pas la <a href="Bandes rythmo.php">bande rythmo</a> du personnage pour le
                                    doubler n'hésitez pas à consulter notre <a
                                        href="https://www.youtube.com/@genshinvavf">Chaine youtube</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <?php
        include "Footer.php"
            ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>


    <script>
        const tooltipTriggerList = document.querySelectorAll(
            '[data-bs-toggle="tooltip"]'
        );
        const tooltipList = [...tooltipTriggerList].map(
            (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
        );
    </script>
</body>

</html>