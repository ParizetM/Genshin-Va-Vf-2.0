<nav class="navbar navbar-expand-sm navbar-dark bg-info fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img src="media/genshinvavf_logo.ico" alt=""
                style="width: 40px; margin-inline: auto" /></a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" aria-current="page">Accueil <span
                            class="visually-hidden">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item dropdown ml-3">
                    <a class="nav-link dropdown-toggle active" href="#" id="dropdownId" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Plus</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="A propos.php">Qui sommes-nous ?</a>
                        <a class="dropdown-item" href="Bandes rythmo.php">Bandes rythmo</a>
                        <a class="dropdown-item" href="Demande bande rythmo.php">Demande bande rythmo</a>
                        <a class="dropdown-item" href="Depot audition.php">Dépot audition</a>
                        <a class="dropdown-item" href="actualites.php">Actualités</a>
                    </div>
                </li>
            </ul>
            <form action="search.php" method="get" class="d-flex my-2 my-lg-0 formulaire-nav">
    <input class="form-control me-sm-2" type="text" name="search" placeholder="Search" />
    <button class="btn my-2 my-sm-0 bouton_search" type="submit">
        Search
    </button>
</form>
        </div>
    </div>
</nav>
<!--<script>
    $(document).ready(function () {
        $(".formulaire-nav").submit(function () {
            window.removeEventListener("beforeunload", confirmationAvantDeQuitter);
        });
    });

    function confirmationAvantDeQuitter(e) {
        e.preventDefault();
    }

    window.addEventListener("beforeunload", confirmationAvantDeQuitter);
</script>-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>