<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Accueil SAE203</title>
</head>
<body>
<?php require('../nav.admin.php'); ?>
<main>
    <section class="header">
	    <h1>Ajouter une série originale Netflix</h1>
    </section>
	    <form action="table1_new_valide.php" method="POST" enctype="multipart/form-data">
	        Nom : <input type="text" name="nom" required /><br />
	        Année : <input type="number" name="annee" min="1900" max="3000" required /><br />
	        Nombre de saison : <input type="number" name="saison" required /><br />
	        Durée des épisodes (en min) : <input type="number" name="duree" required /><br />
	        Résumé : <textarea name="resume" required></textarea><br />
            Classification : <input type="number" name="pegi" required /><br />
	        Photo : <input type="file" name="photo" required /><br />
            Distribution : <input type="text" name="distrib" required /><br />
	        Auteur : <select name="auteur" required>
	        <?php
	            require '../lib_crud.inc.php';
	            $co=connexionBD();
	            afficherAuteursOptions($co);
	            deconnexionBD($co);
	        ?>
	        </select><br />
	        <input type="submit" value="Ajouter" />
	    </form>
	</body>
</html>