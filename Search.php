<!DOCTYPE html>
<html lang="en">

<head>
    <title>Genshin VA VF - Recherche</title>
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
            <form action="search.php" method="get" class="d-flex my-2 my-lg-0 formulaire-mid">
                <input class="form-control me-sm-2" type="text" name="search" placeholder="Search" <?php
                if (isset($_REQUEST['search']) && $_REQUEST['search'] != "") {
                    echo 'value="' . $_REQUEST['search'] . '"';
                }
                ?> " />
                <button class=" btn my-2 my-sm-0" type="submit">
                Search
                </button>
            </form>
            <h1>
                <?php
                if (isset($_REQUEST['search']) && $_REQUEST['search'] != "") {
                    echo 'Aucun résultat ne correspond à ' . $_REQUEST['search'] . '.';
                } else {
                    echo 'Aucun résultat ne correspond à votre recherche.';
                }
                ?>
            </h1>
            <h1><img src="media/underline_no_line.png" alt="" style="width: 450px; rotate: 180deg; margin-top: 100px" /></h1>
            <h1><img src="media/hilicurls-genshin-impact.gif" alt="" style="width: 450px" /></h1>
            <h1><img src="media/underline_no_line.png" alt="" style="width: 450px; margin-bottom: 200px" /></h1>
            <footer>
        <?php
        include "Footer.php"
            ?>
            </footer>
        </div>

    </main>

</body>

</html>