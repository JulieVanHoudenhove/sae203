<?php
    require('header.php');
?>

<title>Rechercher | N Série</title>
</head>
<body>
<?php require('nav.php'); ?>

<main>
    <section class="header">
    <h1>Que recherchez-vous ?</h1>
    <p>Trouvez votre bonheur</p> 
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
                <?php
                // On va afficher ici la datalist
                require 'lib_crud.inc.php';
                $co=connexionSerie();
                genererDatalistReal($co);
                deconnexionSerie($co);
                ?>
            </datalist>

            <p>Vous pouvez aussi rechercher en fonction du réalisateur</p>
            <form action="reponse_recherche1.php" method="POST">
                <p>
                    <div  class="label_input">
                            <label class="label" for="real">Entrez un nom de réalisateur :</label>
                            <input class="text_input" type="search" id="real" name="real" list="realisateurs" autocomplete="off" />
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