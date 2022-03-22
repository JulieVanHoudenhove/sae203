<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Ajouter Réalisateur | N Série</title>
</head>
<body>
<?php require('../nav.admin.php'); ?>
<main>
    <section class="header">
	    <h1>Ajouter un réalisateur</h1>
        <p>Il manque un réalisateur<br>Rajoutez-le !</p>
    </section>
	    <form class="add_serie" action="table2_new_valide.php" method="POST" enctype="multipart/form-data">
            <div class="form_serie">Nom : <input class="input" type="text" name="nom" required /><br /></div>
            <div class="form_serie">Prénom : <input class="input" type="text" name="prenom" required /><br /></div>
            <div class="form_serie">Nationalité : <input class="input" type="text" name="natio" required /><br /></div>
            <div class="form_serie">Âge : <input class="input" type="number" name="age" min="0" max="200" required /><br /></div>
	        <div class="submit"><input class="ajouter" type="submit" value="Ajouter" /></div>
	    </form>
        
<?php require('../footer.php'); ?>
	</body>
</html>