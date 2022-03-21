<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Accueil SAE203</title>
</head>
<body>
<?php require('../nav.admin.php'); ?>
<main>
    <section class="header">
    <h1>Modifier un réalisateur</h1>
    </section>
    <?php
        require '../lib_crud.inc.php';

        $id=$_GET['num'];
        $co=connexionBD();
        $album=getRL($co, $id);
        //var_dump($album);
        deconnexionBD($co);
    ?>
    <form action="table2_update_valide.php" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="num" value="<?= $id; ?>" />
        Nom : <input type="text" name="nom" value="<?php echo $album['real_nom']; ?>" required/><br />
        Prénom : <input type="text" name="prenom" value="<?php echo $album['real_prenom']; ?>" required/><br />
        Nationalité : <input type="text" name="natio" value="<?= $album['real_natio']; ?>" required/><br />
        Âge : <input type="number" name="age" min="0" max="200" value="<?= $album['real_age']; ?>" required/><br />

        <input type="submit" value="Modifier" />
    </form>
</body>
</html>