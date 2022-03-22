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
		<p style="margin-top: 100px;margin-bottom: 50px;">Votre série favorite manque au catalogue ?<br>Rajoutez-la !</p>
    </section>
	    <form class="add_serie" action="table1_new_valide.php" method="POST" enctype="multipart/form-data">
	        <div class="form_serie">Nom : <input class="input" type="text" name="nom" required /><br /></div>
	        <div class="form_serie">Année : <input class="input" type="number" name="annee" min="1900" max="3000" required /><br /></div>
	        <div class="form_serie">Nombre de saison : <input class="input" type="number" name="saison" required /><br /></div>
	        <div class="form_serie">Durée des épisodes (en min) : <input class="input" type="number" name="duree" required /><br /></div>
	        <div class="form_serie">Résumé : <textarea class="input" name="resume" required></textarea><br /></div>
            <div class="form_serie">Classification : <input class="input" type="number" name="pegi" required /><br /></div>
	        <div class="form_serie">Photo : <input type="file" name="photo" required /><br /></div>
            <div class="form_serie">Distribution : <input class="input" type="text" name="distrib" required /><br /></div>
	        <div class="form_serie">Auteur : <select class="input" name="auteur" required>
	        <?php
	            require '../lib_crud.inc.php';
	            $co=connexionBD();
	            afficherAuteursOptions($co);
	            deconnexionBD($co);
	        ?>
	        </select><br /></div>
	        <div class="submit"><input class="ajouter" type="submit" value="Ajouter" /></div>
	    </form>
		
<?php require('../footer.php'); ?>
	</body>
</html>