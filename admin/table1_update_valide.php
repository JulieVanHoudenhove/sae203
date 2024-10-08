<?php require('../header.php'); ?>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../parsley.css">
    <title>Modifier Série | N Série</title>
</head>
<body>
<?php require('../nav.admin.php'); ?>
<main>
    <section class="header">
	    <h1>Modifier une série</h1>
    </section>
	    <?php
	        require '../lib_crud.inc.php';
	
	        $id=$_POST['num'];
	        $nom=$_POST['nom'];
	        $date=$_POST['annee'];
	        $saison=$_POST['saison'];
	        $duree=$_POST['duree'];
	        $resume=trim($_POST['resume']);
            $pegi=$_POST['pegi'];
            $distrib=$_POST['distrib'];
	        $auteur=$_POST['auteur'];
	        //var_dump($_POST);
	        //var_dump($_FILES);

	
	        $imageType=$_FILES["photo"]["type"];
	        if ( ($imageType != "image/png") &&
	            ($imageType != "image/jpg") &&
	            ($imageType != "image/jpeg") ) {
	                echo '<p>Désolé, le type d\'image n\'est pas reconnu ! Seuls les formats PNG et JPEG sont autorisés.</p>'."\n";
	                die();
	        }
	
	        $nouvelleImage = date("Y_m_d_H_i_s")."---".$_FILES["photo"]["name"];
	
	        if(is_uploaded_file($_FILES["photo"]["tmp_name"])) {
	            if(!move_uploaded_file($_FILES["photo"]["tmp_name"], "../images/uploads/".$nouvelleImage)) {
	                echo '<p>Problème avec la sauvegarde de l\'image, désolé...</p>'."\n";
	                die();
	            }
	        } else {
	            echo '<p>Problème : image non chargée...</p>'."\n";
	            die();
	        }
	
	        $co=connexionSerie();
	        modifierSerie($co, $id, $nom, $date, $saison, $duree, $resume, $pegi,
            $nouvelleImage, $distrib, $auteur);
	        deconnexionSerie($co);
	    ?>
		
<?php require('../footer.php'); ?>
	</body>
</html>