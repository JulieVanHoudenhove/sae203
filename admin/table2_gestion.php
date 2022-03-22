<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Gestion Réalisateur | N Série</title>
</head>
<body>
<?php require('../nav.admin.php'); ?>
<main>
    <section class="header">
        <h1>Gestion des Réalisateurs</h1>
        <p style="margin-top: 100px;margin-bottom: 50px;"><a class="add" href="table2_new_form.php">Ajouter un réalisateur originale Netflix</a></p>
    </section>
        <?php
            require '../lib_crud.inc.php';
            $co=connexionBD();
            afficherListe2($co);
            deconnexionBD($co);
        ?>
        </section>
    
<?php require('../footer.php'); ?>
    </body>
</html>