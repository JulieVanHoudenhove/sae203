<?php require('header.php'); ?>
    <title>Accueil SAE203</title>
</head>
<body>
<?php require('nav.php'); ?>
<main>
<section class="header">
    <h1 class="load-hidden">Bienvenue sur <img class="n" src="images/n.png" alt="Logo N de Netflix"> série</h1>
    <p>Le site qui répertorie toutes les séries originales Netflix</p> 
    </section>
    <section class="sortie">
        <p>Les dernières sortie</p>
        <div>
            <a href="listing.php"><img src="images/arcane.jpg" alt="Affiche d'Arcane"></a>
            <a href="listing.php"><img src="images/squid_game.jpg" alt="Affiche de Squid Game"></a>
            <a href="listing.php"><img src="images/shadow_and_bone.jpg" alt="Affiche de Shadow and Bone : La saga Grisha"></a>
            <a href="listing.php"><img src="images/la_voie_du_tablier.jpg" alt="Affiche de La Voie du tablier"></a>
            <a href="listing.php"><img src="images/lupin.jpg" alt="Affiche de Lupin"></a>
        </div>
    </section>
</main>

<?php require('footer.php'); ?>
<script src="index.js"></script>
</body>
</html>