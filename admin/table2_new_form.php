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
	    <form action="table2_new_valide.php" method="POST" enctype="multipart/form-data">
	        Nom : <input type="text" name="nom" required /><br />
            Prénom : <input type="text" name="prenom" required /><br />
            Nationalité : <input type="text" name="natio" required /><br />
	        Âge : <input type="number" name="age" min="0" max="200" required /><br />
	        <input type="submit" value="Ajouter" />
	    </form>
	</body>
</html>