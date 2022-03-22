<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Accueil SAE203</title>
</head>
<body>
<?php require('../nav.admin.php'); ?>
<main>
    <section class="header">
        <h1>Gestion des Séries</h1>
        <p style="margin-top: 100px;margin-bottom: 50px;"><a class="add" href="table1_new_form.php">Ajouter une série originale Netflix</a></p>
    </section>
        <?php
            require '../lib_crud.inc.php';
            $co=connexionBD();
            afficherListe($co);
            deconnexionBD($co);
        ?>
        </section>
    
<?php require('../footer.php'); ?>
    </body>
</html>