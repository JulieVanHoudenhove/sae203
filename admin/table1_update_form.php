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
    <form action="table1_update_valide.php" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="num" value="<?= $id; ?>" />
        Nom : <input type="text" name="nom" value="<?php echo $album['serie_nom']; ?>" required/><br />
        Année : <input type="number" name="annee" min="1900" max="3000" value="<?= $album['serie_date']; ?>" required /><br />
        Nombre de saison : <input type="number" name="saison" value="<?= $album['serie_saison']; ?>" required /><br />
        Durée des épisodes (en min) : <input type="number" name="duree" value="<?= $album ['serie_duree']; ?>" required /><br />
        Résumé : <textarea name="resume" required><?= $album['serie_resume']; ?></textarea><br />
        Classification : <input type="number" name="pegi" value="<?= $album ['serie_pegi']; ?>" required /><br />
        Photo : <input type="file" name="photo" value="<?= $album ['serie_photo']; ?>" required /><br />
        Distribution : <input type="text" name="distrib" value="<?= $album ['serie_distrib']; ?>" required /><br />
        Auteur : <select name="auteur" required>

        <?php
            $co=connexionBD();
            afficherAuteursOptionsSelectionne($co, $album['_real_id']);
            deconnexionBD($co);
        ?>
        </select><br />
        <input type="submit" value="Modifier" />
    </form>
</body>
</html>