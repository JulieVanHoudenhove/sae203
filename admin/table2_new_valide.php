<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Accueil SAE203</title>
</head>
<body>
<?php require('../nav.admin.php'); ?>
<main>
    <section class="header">
	    <h1>Ajouter un Réalisateur</h1>
    </section>
	    <?php
	        require '../lib_crud.inc.php';
	
	        $nom=$_POST['nom'];
	        $prenom=$_POST['prenom'];
	        $natio=$_POST['natio'];
	        $age=$_POST['age'];
	        //var_dump($_POST);
	        //var_dump($_FILES);

	        $co=connexionBD();
	        ajouterRL($co, $nom, $prenom, $natio, $age);
	        deconnexionBD($co);
	    ?>
		
<?php require('../footer.php'); ?>
	</body>
</html>