<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Supprimer Réalisateur | N Série</title>
</head>
<body>
<?php require('../nav.admin.php'); ?>
<main>
    <section class="header">
	    <h1>Supprimer un réalisateur</h1>
    </section>
	    <?php
	        require '../lib_crud.inc.php';
	
	        $id=$_GET['num'];
	
	        $co=connexionSerie();
	        effaceReal($co, $id);
	        deconnexionSerie($co);
	    ?>
	
<?php require('../footer.php'); ?>
	</body>
</html>