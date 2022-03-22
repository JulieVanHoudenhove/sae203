<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Accueil SAE203</title>
</head>
<body>
<?php require('../nav.admin.php'); ?>
<main>
    <section class="header">
    <h1>Modifier une série</h1>
    </section>
    <?php
        require '../lib_crud.inc.php';

        $id=$_GET['num'];
        $co=connexionBD();
        $album=getBD($co, $id);
        //var_dump($album);
        deconnexionBD($co);
    ?>
    <form class="add_serie" action="table1_update_valide.php" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="num" value="<?= $id; ?>" />
        <div class="form_serie">Nom : <input class="input" type="text" name="nom" value="<?php echo $album['serie_nom']; ?>" required/><br /></div>
        <div class="form_serie">Année : <input class="input" type="number" name="annee" min="1900" max="3000" value="<?= $album['serie_date']; ?>" required /><br /></div>
        <div class="form_serie">Nombre de saison : <input class="input" type="number" name="saison" value="<?= $album['serie_saison']; ?>" required /><br /></div>
        <div class="form_serie">Durée des épisodes (en min) : <input class="input" type="number" name="duree" value="<?= $album ['serie_duree']; ?>" required /><br /></div>
        <div class="form_serie">Résumé : <textarea class="input" name="resume" required><?= $album['serie_resume']; ?></textarea><br /></div>
        <div class="form_serie">Classification : <input class="input" type="number" name="pegi" value="<?= $album ['serie_pegi']; ?>" required /><br /></div>
        <div class="form_serie">Photo : <input type="file" name="photo" required /><br /></div>
        <div class="form_serie">Distribution : <input class="input" type="text" name="distrib" value="<?= $album ['serie_distrib']; ?>" required /><br /></div>
        <div class="form_serie">Auteur : <select class="input" name="auteur" required>

        <?php
            $co=connexionBD();
            afficherAuteursOptionsSelectionne($co, $album['_real_id']);
            deconnexionBD($co);
        ?>
        </select><br /></div>
        <div class="submit"><input class="ajouter" type="submit" value="Modifier" /></div>
    </form>
    
<?php require('../footer.php'); ?>
</body>
</html>