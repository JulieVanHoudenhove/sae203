<?php
    require('header.php');
?>
    <title>Accueil SAE203</title>
</head>
<body>

<?php require('nav.php'); ?>
<main>
    <section class="header">
    <h1 class="load-hidden">Toutes les séries originales Netflix</h1>
    <p>Qu'ont-ils créé ?</p> 
    </section>
    <section class="conteneur">
        <div class="list">
            <?php
            $mabd = new PDO('mysql:host=localhost;dbname=sae203;charset=UTF8;', 'sae203', 'Sae203');
            $mabd->query('SET NAMES utf8;');
            $req = "SELECT * FROM serie INNER JOIN realisateur ON serie._real_id = realisateur.real_id";
            $resultat = $mabd->query($req);
            foreach ($resultat as $value) {
                echo '<div class="serie">' ;
                echo '<img src="images/'.$value['serie_photo']. '" alt="Affiche'.$value['serie_nom'].'">';
                echo '<p>';
                echo '<span>Nom :</span> '.$value['serie_nom'].'<br>';
                echo '<span>Date :</span> '.$value['serie_date'].'<br>';
                echo '<span>Nombre de saison :</span> '.$value['serie_saison'].'<br>';
                echo '<span>Durée par épisode :</span> environ '.$value['serie_duree'].'<br>';
                echo '<span>Acteurs principaux :</span> '.$value['serie_distrib'].'<br>';
                echo '<span  id="'.$value['serie_id'].'">Résumé :</span> '.$value['serie_resume'].'<br>';
                echo '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </section>
    <div class="retour"><a href="index.php">Retour</a></div>
    
</main>
<?php require('footer.php'); ?>
</body>
</html>