<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Accueil SAE203</title>
</head>
<body>
<?php require('../nav.admin.php'); ?>
<main>
    <section class="header">
	    <h1>Supprimer une série</h1>
    </section>
	    <?php
	        require '../lib_crud.inc.php';
	
	        $id=$_GET['num'];
	
	        $co=connexionBD();
	        effaceBD($co, $id);
	        deconnexionBD($co);
	    ?>
	</body>
</html>