<?php
    require('header.php');
?>
    <title>Catalogue | N Série</title>
</head>
<body>

<?php require('nav.php'); ?>
<main>
    <section class="header">
    <h1>Toutes les séries originales Netflix</h1>
    <p>Qu'ont-ils créé ?</p> 
    </section>
    <section class="conteneur">
        <div class="list">
            <?php
            require('lib_crud.inc.php');
            $mabd = connexionSerie();
            afficherCatalogue($mabd);
            deconnexionSerie($mabd);
            ?>
        </div>
    </section>
    <div class="retour"><a href="index.php">Retour</a></div>
    
</main>
<?php require('footer.php'); ?>
</body>
</html>