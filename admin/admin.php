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
    <section class="">
        <ul>
            <li>Gestion des <a href="table1_gestion.php">séries</a></li>
            <li>Gestion des <a href="table2_gestion.php">réalisateurs</a></li>
        </ul>
        <a href="index.php">Retour</a>
    </section>
</main>

<?php require('footer.php'); ?>
<script src="index.js"></script>
</body>
</html>