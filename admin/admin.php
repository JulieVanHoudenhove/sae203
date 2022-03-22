<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Accueil SAE203</title>
</head>
<body>
<?php require('../nav.admin.php'); ?>
<main>
    <section class="header">
        <h1>Bienvenue sur l'administration</h1>
    </section>
    <section>
        <ul class="admin_gestion">
            <li><p>Gestion des séries</p><p>Modifier ou supprimer des séries</p>
            <a class="rechercher_admin" href="table1_gestion.php">Série</a></li>
            <li><p>Gestion des réalisateurs</p><p>Modifier ou supprimer des réalisateurs</p>
            <a class="rechercher_admin" href="table2_gestion.php">Réalisateurs</a></li>
        </ul>
        <div class="retour"><a href="../index.php">Retour</a></div>
    </section>
</main>

<?php require('../footer.php'); ?>
</body>
</html>