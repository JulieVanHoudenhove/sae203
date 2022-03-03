<?php
    require('header.php');
?>

<title>Accueil SAE203</title>
</head>
<body>
<?php require('nav.php'); ?>

<main>
    <section class="header">
    <h1>Recherrcher parmis les séries originales Netflix</h1>
    <p>Que cherchez-vous ?</p>
    </section>

    <form action="reponse_recherche.php" method="POST" data-parsley-validate>
    <p>
    <label for="duree_mini">Durée minimum (en minutes)</label>
    <input type="text" id="duree_mini" name="duree_mini" value="10" data-parsley-type="number">
    <label for="duree_maxi">Durée maximum (en minutes)</label>
    <input type="text" id="duree_maxi" name="duree_maxi" value="100" data-parsley-type="number">
    </p>
    
    <input type="submit" value="Rechercher" class="rechercher"><br><br>
    <datalist id="realisateurs">
    <option value="Allen">
    <option value="Donner">
    <option value="Kubrick">
    <option value="Nolan">
    <option value="Tarantino">
    <option value="Tessari">
    </datalist>
    <form action="form_recherche.php">
    <label for="real">Entrez un nom de réalisateur :</label>
    <input type="search" list="realisateurs" id="real" name="real" />
    <datalist id="realisateurs">
        <option value="Allen">
        <option value="Donner">
        <option value="Kubrick">
        <option value="Nolan">
        <option value="Tarantino">
        <option value="Tessari">
    </datalist>
    <input class="btn btn-primary" type="submit" value="Rechercher" id="submit">
  </form>
</form>
<?php require('footer.php'); ?>
</body>
</html>