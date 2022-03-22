<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Modifier Réalisateur | N Série</title>
</head>
<body>
<?php require('../nav.admin.php'); ?>
<main>
    <section class="header">
	    <h1>Modifier un réalisateur</h1>
    </section>
	    <?php
	        require '../lib_crud.inc.php';
	
	        $id=$_POST['num'];
	        $nom=$_POST['nom'];
	        $prenom=$_POST['prenom'];
	        $natio=$_POST['natio'];
	        $age=$_POST['age'];
	        //var_dump($_POST);
	        //var_dump($_FILES);

	        $co=connexionBD();
	        modifierRL($co, $id, $nom, $prenom, $natio, $age);
	        deconnexionBD($co);
	    ?>
		
<?php require('../footer.php'); ?>
	</body>
</html>