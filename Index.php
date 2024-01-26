<!DOCTYPE html>
<html lang="en">

<head>
    <title>Genshin VA VF - Bienvenue</title>
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
        <img class="image_top" src="media/twins1.png" alt="" />
        <div class="body_container">
                <h1>Et si Genshin avait une VF ?</h1>
            <div class="row justify-content-center align-items-center g-2">
                <div id="carouselindex" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselindex" data-bs-slide-to="0" class="active invis_text"
                            aria-current="true" aria-label="First slide"></li>
                        <li data-bs-target="#carouselindex" data-bs-slide-to="1" class="invis_text"
                            aria-label="Second slide"></li>
                        <li data-bs-target="#carouselindex" data-bs-slide-to="2" class="invis_text"
                            aria-label="Third slide"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="media/discord_carousel.png" class="w-100 d-block" alt="First slide" />
                            <div class="carousel-caption d-sm d-md-block m-auto padding-0">
                                <h3>Auditionnez</h3>
                                <p>Rejoignez-nous sur Discord pour Auditionnez</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="media/Gif_ayaka.gif" class="w-100 d-block" alt="First slide" />
                            <div class="carousel-caption d-none d-md-block m-auto">
                                <h3>Doublez !</h3>
                                <p>venez prêter votre voix pour votre jeu favoris</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="media/Concours_photo_2023.png" class="w-100 d-block" alt="Third slide" />
                            <div class="carousel-caption d-none d-md-block m-auto">
                                <h3>Évents</h3>
                                <p>
                                    Rejoignez-nous pour participer à nos évenements sur Discord
                                </p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselindex"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselindex"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="row justify-content-center g-2 tiktok_preview_main">
                <div class="col col1">
                    <h1>Rejoignez notre Tiktok !</h1>
                    <h3>
                        Venez suivre nous aventures sur tiktok pour être au courant de nos
                        derniers post
                    </h3>
                    <a href="https://www.tiktok.com/@genshinvavf" class="a_tiktok_logo_square" target="_blank">
                        <img class="tiktok_logo_square" src="media/tiktok_logo_square.webp" alt="tiktok logo" />
                    </a>
                </div>
                <div class="col col2">
                    <img class="img-fluid w-50 tiktok_iphone_preview" src="media/tiktok_carousel.png" alt="" />
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>