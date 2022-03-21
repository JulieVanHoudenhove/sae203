<?php
    require('header.php');
?>
    <title>Accueil SAE203</title>
</head>
<body>
<?php require('nav.php'); ?>

<main>
    <?php
    if (empty($_POST['duree_mini']) || empty($_POST['duree_maxi'])){ // Si un des champs est vide
        header('location: form_recherche.php'); // On renvoie vers le formulaire
        // exit();
    } else { // Sinon, On commence notre traitement
        $mini = $_POST['duree_mini'];
        if (filter_var($mini, FILTER_VALIDATE_INT))  {
            echo '<p>Mini : '.htmlentities($mini).'</p>';
        } else {
            echo '<p>Erreur, Entrez un nombre entier</p>';
        }
        $maxi = $_POST['duree_maxi'];
        if (filter_var($maxi, FILTER_VALIDATE_INT)) {
            echo '<p>Maxi : '.htmlentities($maxi).'</p>';
        } else {
            echo '<p>Erreur, Entrez un nombre entier</p>';
        }
    }
    ?>
    <section class="header">
    <h1>Voici le résultat de votre recherche</h1>
    <p>Trouvez votre bonheur</p> 
    </section>
    <section class="conteneur">
        <div class="list">
            <div class="serie">
                <img src="images/uploads/stranger_things.jpg" alt=" Affiche de Stranger Things">
                <p>
                    <span>Nom :</span> Stranger Things<br>
                    <span>Date :</span> 2016<br>
                    <span>Nombre de saison :</span> 3<br>
                    <span>Durée par épisode :</span> environ 50 minutes<br>
                    <span>Acteurs principaux :</span> Winona Ryder, David Harbour, Finn Wolfhard<br>
                    <span>Réalisateur :</span> Les frères Duffer, américains, 38 ans<br>
                    <span>Résumé :</span> Quand un jeune garçon disparaît, une petite ville découvre une affaire mystérieuse, des expériences secrètes, des forces surnaturelles terrifiantes... et une fillette.<br>
                </p>
            </div>
            <div class="serie" >
            <img src="images/uploads/mortel.jpg" alt="Affiche de Mortel">
                <p>
                    <span>Nom :</span> Mortel<br>
                    <span>Date :</span> 2019<br>
                    <span>Nombre de saison :</span> 2<br>
                    <span>Durée par épisode :</span> environ 50 minutes<br>
                    <span>Acteurs principaux :</span> Carl Malapa, Némo Schiffman, Manon Bresch<br>
                    <span>Réalisateur :</span> Frédéric Garcia, français, 36 ans<br>
                    <span>Résumé :</span> Après avoir conclu un marché avec un être surnaturel, deux lycéens doivent unir les super-pouvoirs qu'ils viennent d'acquérir pour retrouver un assassin.<br>
                </p>
            </div>
            <div class="serie">
            <img src="images/uploads/lupin.jpg" alt="Affiche de Lupin">
                <p>
                    <span>Nom :</span> Lupin<br>
                    <span>Date :</span> 2021<br>
                    <span>Nombre de saison :</span> 2<br>
                    <span>Durée par épisode :</span> environ 45 minutes<br>
                    <span>Acteurs principaux :</span> Omar Sy, Ludivine Sagnier, Clotilde Hesme<br>
                    <span>Réalisateur :</span> George Kay, britannique, 62 ans<br>
                    <span>Résumé :</span> Inspiré par les aventures d'Arsène Lupin, le gentleman cambrioleur Assane Diop décide de venger son père d'une terrible injustice.<br>
                </p>
            </div>
            <div class="serie">
            <img src="images/uploads/13_reasons_why.jpg" alt="Affiche de 13 Reasons Why">
                <p>
                    <span>Nom :</span> 13 Reasons Why<br>
                    <span>Date :</span> 2017<br>
                    <span>Nombre de saison :</span> 4<br>
                    <span>Durée par épisode :</span> environ 55 minutes<br>
                    <span>Acteurs principaux :</span> Dylan Minnette, Katherine Langford, Alisha Boe<br>
                    <span>Réalisateur :</span> Brian Yorkey, américain, 52 ans<br>
                    <span>Résumé :</span> Le jeune Clay Jensen se retrouve au centre d'une série de secrets déchirants qui prennent un tour tragique après le suicide d'une camarade de classe.<br>
                </p>
            </div>
            <div class="serie">
            <img src="images/uploads/how_to_sell_drugs_online_fast.jpg" alt="Affiche de How to Sell Drugs Online (Fast)">
                <p>
                    <span>Nom :</span> How to Sell Drugs Online (Fast)<br>
                    <span>Date :</span> 2019<br>
                    <span>Nombre de saison :</span> 3<br>
                    <span>Durée par épisode :</span> environ 30 minutes<br>
                    <span>Acteurs principaux :</span> Maximilian Mundt, Danilo Kamperidis, Lena Klenke<br>
                    <span>Réalisateur :</span> Philipp Käßbohrer, allemand, 38 ans<br>
                    <span>Résumé :</span> Pour reconquérir son ex, un ado fou d'informatique se met à vendre de l'ecstasy en ligne, et devient l'un des plus gros dealers d'Europe... sans quitter sa chambre.<br>
                </p>
            </div>
            <div class="serie">
            <img src="images/uploads/warrior_nun.jpg" alt="Affiche de Warrior Nun">
                <p>
                    <span>Nom :</span> Warrior Nun<br>
                    <span>Date :</span> 2020<br>
                    <span>Nombre de saison :</span> 1<br>
                    <span>Durée par épisode :</span> environ 45 minutes<br>
                    <span>Acteurs principaux :</span> Alba Baptista, Toya Turner, Lorena Andrea<br>
                    <span>Réalisateur :</span> Simon Barry, Canadien, 55 ans<br>
                    <span>Résumé :</span> Une ado orpheline se réveille à la morgue et découvre ses nouveaux super-pouvoirs : elle est porteuse du Halo d'une société secrète de religieuses chasseuses de démons..<br>
                </p>
            </div>
        </div>

    </section>
    <div class="retour"><a href="index.php">Retour</a></div>
    
</main>
<?php require('footer.php'); ?>
</body>
</html>