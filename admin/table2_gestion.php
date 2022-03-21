<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Accueil SAE203</title>
</head>
<body>
<?php require('../nav.admin.php'); ?>
<main>
    <section class="header">
        <h1>Gestion des Réalisateurs</h1>
    </section>
        <p><a href="table2_new_form.php">Ajouter un réalisateur originale Netflix</a></p>
        <?php
            require '../lib_crud.inc.php';
            $co=connexionBD();
            afficherListe2($co);
            deconnexionBD($co);
        ?>
        </section>
    </body>
</html>