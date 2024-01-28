<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lire le Contenu d'une Page</title>
</head>
<body>

<button onclick="lireContenu()">Lire le Contenu</button>

<script>
    function lireContenu() {
        // Remplacez l'URL ci-dessous par l'URL de la page que vous souhaitez lire
        var url = 'https://discord.name/288721989240094720';

        // Utilisez fetch pour récupérer le contenu de la page
        fetch(url)
            .then(response => response.text())
            .then(data => {
                // Affichez le contenu de la page dans la console (ou faites ce que vous voulez avec les données)
                console.log(data);
            })
            .catch(error => console.error('Erreur :', error));
    }
</script>

</body>
</html>