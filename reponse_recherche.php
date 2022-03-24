<?php
    require('header.php');
?>
    <title>Résultat recherche durée | N Série</title>
</head>
<body>
<?php require('nav.php'); ?>

<main>
    <?php
    if (empty($_POST['duree_mini']) || empty($_POST['duree_maxi'])){ // Si un des champs est vide
        header('location: form_recherche.php'); // On renvoie vers le formulaire
        // exit();
    } else { // Sinon, On commence notre traitement
        $mini = $_POST['duree_mini'];
        if (filter_var($mini, FILTER_VALIDATE_INT))  {
            //echo '<p>Mini : '.htmlentities($mini).'</p>';
        } else {
            echo '<p>Erreur, Entrez un nombre entier</p>';
        }
        $maxi = $_POST['duree_maxi'];
        if (filter_var($maxi, FILTER_VALIDATE_INT)) {
            //echo '<p>Maxi : '.htmlentities($maxi).'</p>';
        } else {
            echo '<p>Erreur, Entrez un nombre entier</p>';
        }
    }
    ?>
    <section class="header">
    <h1>Voici le résultat de votre recherche</h1>
    <p>Vous avez trouvé votre bonheur ?</p> 
    </section>
    <section class="conteneur">
        <div class="list">
            <?php
                require 'lib_crud.inc.php';
                $co=connexionSerie();
                afficherResultatRecherche($co);
                deconnexionSerie($co);
            ?>
        </div>
    </section>
    <div class="retour"><a href="index.php">Retour</a></div>
    
</main>
<?php require('footer.php'); ?>
</body>
</html>