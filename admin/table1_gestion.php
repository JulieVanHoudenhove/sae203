<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Gestion Série | N Série</title>
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
            $co=connexionSerie();
            afficherListeSerie($co);
            deconnexionSerie($co);
        ?>
        </section>
    
<?php require('../footer.php'); ?>
    </body>
</html>