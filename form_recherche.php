<?php
    require('header.php');
?>

<title>Accueil SAE203</title>
</head>
<body>
<?php require('nav.php'); ?>

<main>
    <section class="header">
    <h1>Rechercher parmis les séries originales Netflix</h1>
    <p>Que cherchez-vous ?</p>
    </section>
    <section id="form">
        <div class="form">
            <p>Vous pouvez rechercher en fonction de la durée des épisodes</p>
            <form action="reponse_recherche.php" method="POST" data-parsley-validate>
            <p>
                <div  class="label_input">
                        <label class="label" for="duree_mini">Durée minimum (en minutes)</label>
                        <input class="text_input" type="text" id="duree_mini" name="duree_mini" value="10" data-parsley-type="number">
                </div>
                <div  class="label_input">
                        <label class="label" for="duree_maxi">Durée maximum (en minutes)</label>
                        <input class="text_input" type="text" id="duree_maxi" name="duree_maxi" value="100" data-parsley-type="number">
                </div>
                <div class="submit label_input">
                    <input type="submit" value="Rechercher" class="rechercher"><br><br>
                </div>
            </p>
            </form>
        </div>
        <div class="form">
            <datalist id="realisateurs">
                <option value="Les frères Duffer">
                <option value="Frédéric Garcia">
                <option value="George Kay">
                <option value="Brian Yorkey">
                <option value="Philipp Käßbohrer">
                <option value="Simon Barry">
            </datalist>
            <p>Vous pouvez aussi rechercher en fonction du réalisateur</p>
            <form action="reponse_recherche.php">
                <p>
                    <div  class="label_input">
                            <label class="label" for="real">Entrez un nom de réalisateur :</label>
                            <input class="text_input" type="search" list="realisateurs" id="real" name="real" />
                    </div>
                    <div class="submit label_input">
                        <input class="rechercher" type="submit" value="Rechercher">
                    </div>
                </p>

            </form>
        </div>
    </section>
        <div class="retour"><a href="index.php">Retour</a></div>

<?php require('footer.php'); ?>
</body>
</html>