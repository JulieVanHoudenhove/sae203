<?php
if ( empty($_POST['real']) ){
    header('Location: form_recherche.php');
} else {
    $real = filter_var($_POST['real'],FILTER_SANITIZE_STRING);
    $realclean =  htmlentities($real);
}
?> 

<?php
    require('header.php');
?>
    <title>Résultat recherche réalisateur | N Série</title>
</head>
<body>
<?php require('nav.php'); ?>
<main>
    <section class="header">
    <h1>Voici le résultat de votre recherche</h1>
    <p>Vous avez trouvé votre bonheur ?</p> 
    </section>
    <section class="conteneur">
        <div class="list">
            <?php
                require 'lib_crud.inc.php';
                $co=connexionSerie();
                afficherResultatRecherche1($co);
                deconnexionSerie($co);
            ?>
        </div>
    </section>
    <div class="retour"><a href="index.php">Retour</a></div>
    
</main>
<?php require('footer.php'); ?>
</body>
</html>