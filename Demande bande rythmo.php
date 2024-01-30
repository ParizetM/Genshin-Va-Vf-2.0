<?php
require_once "PDO.php"
  ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <title>Genshin VA VF Demande bande rythmo</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
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
        <h1>Demande bande rythmo</h1>
        <img src="media/ligne.png" alt="" class="ligne_sous_titre" style="width: 80%;" />
      </div>
      <div class="row justify-content-center align-items-center g-2">
        <h3 class="full_paragraph text-center">
          ! Avant de faire une demande veiller à ne pas demander une rythmo
          déja existante !
        </h3>
        <h4 class="text-center">
          vérifiez par vous-même <a href="Bandes rythmo.php">ici</a>
        </h4>
      </div>
    </div>
    <div class="container_story_blanc">
      <div class="container">
        <div class="row justify-content-center align-items-center g-2">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header ac_header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  conditions de demande
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body ac_body_ul">
                  <ul>
                    <li>
                      <h4>pour commander votre bande rythmo il faut :</h4>
                    </li>
                    <li>que la rythmo n'existe pas déja</li>
                    <li>que le/les personnage soit sortie officiellement</li>
                    <li>
                      si c'est un dialogue in game il faut que les personnage
                      parle oralement
                    </li>
                    <li>que les dialogues soit officiel</li>
                    <li>
                      il est préférable que vous fornissiez un lien d'une
                      video du dialogue en francais pour pouvoir faire la
                      rythmo dessus
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <form method="post">
            <div class="card form_card_demande">
              <div class="card-header">
                <h3>formulaire de demande</h3>
              </div>
              <?php
              if (isset($_REQUEST['erreur']) && $_REQUEST['erreur'] == 1) {
                echo '<h3 style="color: red;"> veuillez remplir tous les champs </h3>';
              }
              if (isset($_REQUEST['erreur']) && $_REQUEST['erreur'] == 2) {
                echo '<h3 style="color: red;"> veuillez renseigner le type de rythmo </h3>';
              }
              if (isset($_REQUEST['erreur']) && $_REQUEST['erreur'] == 3) {
                echo '<h3 style="color: red;"> Identifiant discord invalide </h3>';
              }
              ?>
              <div class="card-body">

                <div class="mb-3">
                  <label for="" class="form-label discord_tip">identifiant utilisateur Discord*<button type="button"
                      class="btn tooltip_demande" data-bs-toggle="tooltip" data-bs-placement="top"
                      data-bs-custom-class="custom-tooltip"
                      data-bs-title="pour le trouver faites clic droit sur votre profil et cliquer sur copier l'identifiant d'utilisateur">
                      ?
                    </button>
                  </label>
                  <input type="number" class="form-control" name="id_discord" id=""
                    placeholder="ex : 288721989240094720" />
                  <small class="form-text text-muted">entrez votre id utilisateur discord</small>
                </div>
                <div class="mb-3">
                  <label for="lien_ytb" class="form-label">lien de la vidéo <button type="button"
                      class="btn tooltip_demande" data-bs-toggle="tooltip" data-bs-placement="top"
                      data-bs-custom-class="custom-tooltip"
                      data-bs-title="prenez le lien de la vidéo youtube de ce que vous voulez en bande rythmo">
                      ?
                    </button></label>
                  <input type="link" class="form-control" name="lien_ytb" id="" placeholder="https://youtube.com/..." />
                  <small class="form-text text-muted">entrez un lien youtube </small>
                </div>
                <select class="form-select largeur2grid1 select_demande" aria-label="Default select example"
                  name="type_rythmo">
                  <option selected value="0">Type de rythmo</option>
                  <option value="1">Dialogue en jeu</option>
                  <option value="2">Démo de personnage</option>
                  <option value="3">cinématique Youtube officiel</option>
                  <option value="4">cinématique en jeu</option>
                </select>


                <div class="mb-3 largeur2grid1">
                  <label for="" class="form-label">commentaire</label>
                  <textarea class="form-control" name="commentaire" id="" rows="3"
                    placeholder="Bonjour,&#10;..."></textarea>
                </div>
                <div class="row justify-content-center  largeur2grid1">
                  <button type="submit" class="btn submit_contact">
                    Submit
                  </button>
                </div>
                <div class="row largeur2grid1">

                  <p class="card-text">*Champ obligatoire</p>
                </div>
              </div>
            </div>
          </form>
          <?php
          if (isset($_REQUEST['id_discord']) && isset($_REQUEST['lien_ytb']) && isset($_REQUEST['type_rythmo']) && isset($_REQUEST['commentaire']) && $_REQUEST['id_discord'] != '' && $_REQUEST['lien_ytb'] != '' && $_REQUEST['type_rythmo'] != '' && $_REQUEST['commentaire'] != '') {
            $lien_ytb = $_REQUEST['lien_ytb'];
            $id_discord = $_REQUEST['id_discord'];
            $type_rythmo = $_REQUEST['type_rythmo'];
            $commentaire = $_REQUEST['commentaire'];
            if (strlen($id_discord) > 16 && strlen($id_discord) < 19) {
              if ($type_rythmo != 0) {
                $send_demande_rythmo = "INSERT INTO demande_rythmo(id_discord,lien_ytb,type_rythmo,commentaire) 
                    VAlUES ('$id_discord','$lien_ytb','$type_rythmo','$commentaire')";
                $pdo->exec($send_demande_rythmo);
                echo '<meta http-equiv="refresh" content="0;url=Demande%20bande%20rythmo.php?sended=1">';
              } else {
                echo '<meta http-equiv="refresh" content="0;url=Demande%20bande%20rythmo.php?erreur=2">';
              }
            } else {
              echo '<meta http-equiv="refresh" content="0;url=Demande%20bande%20rythmo.php?erreur=3">';
            }
          } else if (isset($_REQUEST['id_discord']) || isset($_REQUEST['lien_ytb']) || isset($_REQUEST['type_rythmo']) || isset($_REQUEST['commentaire'])) {
            echo '<meta http-equiv="refresh" content="0;url=Demande%20bande%20rythmo.php?erreur=1">';
          }

          ?>
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