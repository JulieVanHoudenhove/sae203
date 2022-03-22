<?php
  // LIBRAIRIE "lib_crud.inc.php"
  // 2022 - BUT MMI - IUT Troyes - URCA
  // JL

  // insertion des dépendances
  require 'secretxyz123.inc.php';

  // connexion à la base de données
  function connexionBD()
  {
    // on initialise la variable de connexion à null
    $mabd = null;
    try {
      // on essaie de se connecter
      // le port et le dbname ci-dessous sont À ADAPTER à vos données
      $mabd = new PDO('mysql:host=127.0.0.1;port=3306;
                dbname=sae203;charset=UTF8;', 
                LUTILISATEUR, LEMOTDEPASSE);
      // on passe le codage en utf-8
      $mabd->query('SET NAMES utf8;');
    } catch (PDOException $e) {
      // s'il y a une erreur, on l'affiche
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
      die();
    }
    // on retourne la variable de connexion
    return $mabd;
  }

      // affichage du catalogue des albums
    function afficherCatalogue($mabd) {
        $req = "SELECT * FROM serie 
                INNER JOIN realisateur 
                ON serie._real_id = realisateur.real_id";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        foreach ($resultat as $value) {
            echo '<div class="serie">' ;
            echo '<img src="images/uploads/'.$value['serie_photo']. '" alt="Affiche'.$value['serie_nom'].'">';
            echo '<p>';
            echo '<span>Nom :</span> '.$value['serie_nom'].'<br>';
            echo '<span>Date :</span> '.$value['serie_date'].'<br>';
            echo '<span>Nombre de saison :</span> '.$value['serie_saison'].'<br>';
            echo '<span>Durée par épisode :</span> environ '.$value['serie_duree'].'<br>';
            echo '<span>Acteurs principaux :</span> '.$value['serie_distrib'].'<br>';
            echo '<span>Réalisateur :</span> '.$value['real_prenom'].' '.$value['real_nom'].', '.$value['real_age'].' ans, '.$value['real_natio'].'<br>';
            echo '<span>Résumé :</span> '.$value['serie_resume'].'<br>';
            echo '</p>';
            echo '</div>';
        }
    }

    // affichage de la liste des albums pour la gestion
    function afficherListe($mabd) {
        $req = "SELECT * FROM serie 
                INNER JOIN realisateur 
                ON serie._real_id = realisateur.real_id";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        echo '<table>'."\n";
        echo '<thead><tr><th>Nom</th><th>Date</th><th>Saison</th><th>Durée</th><th>Photo</th><th>Résumé</th><th>Classi-<br>fication</th><th>Distribution</th><th>Réalisateur</th><th>Modifier</th><th>Supprimer</th></tr></thead>'."\n";
        echo '<tbody>'."\n";
        foreach ($resultat as $value) {
            echo '<tr>'."\n";
            
            echo '<td>'.$value['serie_nom'].'</td>'."\n";
            echo '<td>'.$value['serie_date'].'</td>'."\n";
            echo '<td>'.$value['serie_saison'].'</td>'."\n";
            echo '<td>'.$value['serie_duree'].'</td>'."\n";
            echo '<td><img class="photo" src="../images/uploads/'.$value['serie_photo'].'" alt="'.$value['serie_nom'].'" /></td>'."\n";
            echo '<td>'.$value['serie_resume'].'</td>'."\n";
            echo '<td>'.$value['serie_pegi'].'</td>'."\n";
            echo '<td>'.$value['serie_distrib'].'</td>'."\n";
            echo '<td>'.$value['real_prenom'].' '.$value['real_nom'].'</td>'."\n";
            echo '<td><a href="table1_update_form.php?num='.$value['serie_id'].'">Modifier</a></td>'."\n";
            echo '<td><a href="table1_delete.php?num='.$value['serie_id'].'">Supprimer</a></td>'."\n";
            echo '</tr>'."\n";
        }
        echo '</tbody>'."\n";
        echo '</table>'."\n";
    }


        // affichage de la liste des albums pour la gestion
        function afficherListe2($mabd) {
            $req = "SELECT * FROM realisateur";
            try {
                $resultat = $mabd->query($req);
            } catch (PDOException $e) {
                // s'il y a une erreur, on l'affiche
                echo '<p>Erreur : ' . $e->getMessage() . '</p>';
                die();
            }
            echo '<table>'."\n";
            echo '<thead><tr><th>Nom</th><th>Prénom</th><th>Nationalité</th><th>Âge</th><th>Modifier</th><th>Supprimer</th></tr></thead>'."\n";
            echo '<tbody>'."\n";
            foreach ($resultat as $value) {
                echo '<tr>'."\n";
                
                echo '<td>'.$value['real_nom'].'</td>'."\n";
                echo '<td>'.$value['real_prenom'].'</td>'."\n";
                echo '<td>'.$value['real_natio'].'</td>'."\n";
                echo '<td>'.$value['real_age'].'</td>'."\n";
                echo '<td><a href="table2_update_form.php?num='.$value['real_id'].'">Modifier</a></td>'."\n";
                echo '<td><a href="table2_delete.php?num='.$value['real_id'].'">Supprimer</a></td>'."\n";
                echo '</tr>'."\n";
            }
            echo '</tbody>'."\n";
            echo '</table>'."\n";
        }
    

    // afficher les auteurs (prénom et nom) dans des champs "option"
    function afficherAuteursOptions($mabd) {
    	// on sélectionne tous les auteurs de la table auteurs
        $req = "SELECT * FROM realisateur";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        // pour chaque auteur, on met son id, son prénom et son nom 
        // dans une balise <option>
        foreach ($resultat as $value) {
            echo '<option value="'.$value['real_id'].'">'; // id de l'auteur
            echo $value['real_prenom'].' '.$value['real_nom']; // prénom espace nom
            echo '</option>'."\n";
        }
    }

    // fonction d'ajout d'une BD dans la table bande_dessinees
    function ajouterBD($co, $nom, $date, $saison, $duree, $resume, $pegi,
    $nouvelleImage, $distrib, $auteur)
    {
        $req = 'INSERT INTO serie (serie_nom, serie_date, serie_saison, serie_duree, serie_resume, serie_pegi, serie_photo, serie_distrib, _real_id) VALUES ("'.$nom.'", '.$date.','.$saison.', '.$duree.', "'.$resume.'", '.$pegi.' , "'.$nouvelleImage.'","'.$distrib.'", "'.$auteur.'" )';
        //echo '<p>' . $req . '</p>' . "\n";
        try {
            $resultat = $co->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo '<p  class="header" style="margin-top: 100px;margin-bottom: 50px;">La serie ' . $nom . ' a été ajoutée au catalogue.</p>' . "\n";
        } else {
            echo '<p>Erreur lors de l\'ajout.</p>' . "\n";
            die();
        }
    }

        // fonction d'ajout d'une BD dans la table bande_dessinees
        function ajouterRL($co, $nom, $prenom, $natio, $age)
        {
            $req = 'INSERT INTO realisateur (real_nom, real_prenom, real_natio, real_age) VALUES ("'.$nom.'", "'.$prenom.'","'.$natio.'", '.$age.')';
            //echo '<p>' . $req . '</p>' . "\n";
            try {
                $resultat = $co->query($req);
            } catch (PDOException $e) {
                // s'il y a une erreur, on l'affiche
                echo '<p>Erreur : ' . $e->getMessage() . '</p>';
                die();
            }
            if ($resultat->rowCount() == 1) {
                echo '<p  class="header" style="margin-top: 100px;margin-bottom: 50px;">Le réalisateur ' . $nom . ' a été ajoutée au catalogue.</p>' . "\n";
            } else {
                echo '<p>Erreur lors de l\'ajout.</p>' . "\n";
                die();
            }
        }


    // fonction d'effacement d'une BD
    function effaceBD($mabd, $id) {
        $req = 'DELETE FROM serie WHERE serie_id='.$id;
        //echo '<p>'.$req.'</p>'."\n";
        try{
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount()==1) {
            echo '<p  class="header" style="margin-top: 100px;margin-bottom: 50px;">La série '.$id.' a été supprimée du catalogue.</p>'."\n";
        } else {
            echo '<p>Erreur lors de la suppression.</p>'."\n";
            die();
        }
    }

        // fonction d'effacement d'une BD
        function effaceBD2($mabd, $id) {
            $req = 'DELETE FROM realisateur WHERE real_id='.$id;
            //echo '<p>'.$req.'</p>'."\n";
            try{
                $resultat = $mabd->query($req);
            } catch (PDOException $e) {
                // s'il y a une erreur, on l'affiche
                echo '<p>Erreur : ' . $e->getMessage() . '</p>';
                die();
            }
            if ($resultat->rowCount()==1) {
                echo '<p  class="header" style="margin-top: 100px;margin-bottom: 50px;">Le réalisateur '.$id.' a été supprimé du catalogue.</p>'."\n";
            } else {
                echo '<p>Erreur lors de la suppression.</p>'."\n";
                die();
            }
        }

    // fonction de récupération des informations d'une BD
    function getBD($mabd, $idAlbum) {
        $req = 'SELECT * FROM serie WHERE serie_id='.$idAlbum;
        //echo '<p>GetBD() : '.$req.'</p>'."\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        // la fonction retourne le tableau associatif 
        // contenant les champs et leurs valeurs
        return $resultat->fetch();
    }
    
    // fonction de récupération des informations d'une BD
    function getRL($mabd, $idAlbum) {
        $req = 'SELECT * FROM realisateur WHERE real_id='.$idAlbum;
        //echo '<p>GetRL() : '.$req.'</p>'."\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        // la fonction retourne le tableau associatif 
        // contenant les champs et leurs valeurs
        return $resultat->fetch();
    }

	// afficher le "bon" auteur parmi les auteurs (prénom et nom)
   // dans les balises "<option>"
	function afficherAuteursOptionsSelectionne($mabd, $idAuteur) {
        $req = "SELECT * FROM realisateur";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        foreach ($resultat as $value) {
            echo '<option value="'.$value['real_id'].'"';
            if ($value['real_id']==$idAuteur) {
                echo ' selected="selected"';
            }
            echo '>';
            echo $value['real_prenom'].' '.$value['real_nom'];
            echo '</option>'."\n";
        }
    }

	// fonction de modification d'une BD dans la table bande_dessinees
    function modifierBD($mabd, $id, $nom, $date, $saison, $duree, $resume, $pegi, $nouvelleImage, $distrib, $auteur)
    {
        $req = 'UPDATE serie 
                SET 
                    serie_nom="'.$nom.'", serie_date='.$date.', serie_saison='.$saison.', serie_duree='.$duree.', serie_resume="'.$resume.'", serie_pegi='.$pegi.', serie_photo="'.$nouvelleImage.'", serie_distrib="'.$distrib.'", _real_id='.$auteur.'
                WHERE serie_id='.$id;

        //echo '<p>' . $req . '</p>' . "\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo '<p class="header" style="margin-top: 100px;margin-bottom: 50px;">La série ' . $nom . ' a été modifiée.</p>' . "\n";
        } else {
            echo '<p>Erreur lors de la modification.</p>' . "\n";
            die();
        }
    }

    // fonction de modification d'une BD dans la table bande_dessinees
    function modifierRL($mabd, $id, $nom, $prenom, $natio, $age)
    {
        $req = 'UPDATE realisateur 
                SET 
                    real_nom="'.$nom.'", real_prenom="'.$prenom.'", real_natio="'.$natio.'", real_age='.$age.'
                WHERE real_id='.$id;

        //echo '<p>' . $req . '</p>' . "\n";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        if ($resultat->rowCount() == 1) {
            echo '<p  class="header" style="margin-top: 100px;margin-bottom: 50px;">Le réalisateur ' .$prenom. ' ' .$nom. ' a été modifié.</p>' . "\n";
        } else {
            echo '<p>Erreur lors de la modification.</p>' . "\n";
            die();
        }
    }

    // Génération de la liste des auteurs dans le formulaire de recherche
    function genererDatalistAuteurs($mabd) {
        // on sélectionne le nom et prénom de tous les auteurs de la table auteurs
        $req = "SELECT real_nom, real_prenom FROM realisateur";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        // pour chaque auteur, on met son nom et prénom dans une balise <option>
        foreach ($resultat as $value) {
            echo '<option value="'.$value['real_prenom']. ' '.$value['real_nom'].'">'; 
        } 
    }

    // affichage des resultats de recherche
    function afficherResultatRecherche1($mabd) {
        $real=$_POST['real'];
        $t=explode(' ', $real);
        $req = "SELECT * FROM serie 
                INNER JOIN realisateur 
                ON serie._real_id = realisateur.real_id
                WHERE real_nom LIKE '%".$t[0]."%' OR 
                real_nom LIKE '%".$t[1]."%' OR
                real_prenom LIKE '%".$t[0]."%' OR 
                real_prenom LIKE '%".$t[1]."%'" ;
                //echo '<p>'.$req.'</p>';
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        foreach ($resultat as $value) {
            echo '<div class="serie">' ;
            echo '<img src="images/uploads/'.$value['serie_photo']. '" alt="Affiche'.$value['serie_nom'].'">';
            echo '<p>';
            echo '<span>Nom :</span> '.$value['serie_nom'].'<br>';
            echo '<span>Date :</span> '.$value['serie_date'].'<br>';
            echo '<span>Nombre de saison :</span> '.$value['serie_saison'].'<br>';
            echo '<span>Durée par épisode :</span> environ '.$value['serie_duree'].'<br>';
            echo '<span>Acteurs principaux :</span> '.$value['serie_distrib'].'<br>';
            echo '<span>Réalisateur :</span> '.$value['real_prenom'].' '.$value['real_nom'].', '.$value['real_age'].' ans, '.$value['real_natio'].'<br>';
            echo '<span>Résumé :</span> '.$value['serie_resume'].'<br>';
            echo '</p>';
            echo '</div>';
        }
    }

        // affichage des resultats de recherche
        function afficherResultatRecherche($mabd) {
            $req = "SELECT * FROM serie
                    INNER JOIN realisateur
                    ON serie._real_id = realisateur.real_id
                    WHERE serie_duree BETWEEN ".$_POST['duree_mini']." AND ".$_POST['duree_maxi']."";
                    //echo '<p>'.$req.'</p>';
            try {
                $resultat = $mabd->query($req);
            } catch (PDOException $e) {
                // s'il y a une erreur, on l'affiche
                echo '<p>Erreur : ' . $e->getMessage() . '</p>';
                die();
            }
            foreach ($resultat as $value) {
                echo '<div class="serie">' ;
                echo '<img src="images/uploads/'.$value['serie_photo']. '" alt="Affiche'.$value['serie_nom'].'">';
                echo '<p>';
                echo '<span>Nom :</span> '.$value['serie_nom'].'<br>';
                echo '<span>Date :</span> '.$value['serie_date'].'<br>';
                echo '<span>Nombre de saison :</span> '.$value['serie_saison'].'<br>';
                echo '<span>Durée par épisode :</span> environ '.$value['serie_duree'].'<br>';
                echo '<span>Acteurs principaux :</span> '.$value['serie_distrib'].'<br>';
                echo '<span>Réalisateur :</span> '.$value['real_prenom'].' '.$value['real_nom'].', '.$value['real_age'].' ans, '.$value['real_natio'].'<br>';
                echo '<span>Résumé :</span> '.$value['serie_resume'].'<br>';
                echo '</p>';
                echo '</div>';
            }
        }


  // déconnexion de la base de données
  function deconnexionBD(&$mabd) {
    // on se déconnexte en mettant la variable de connexion à null 
    $mabd=null;
  }