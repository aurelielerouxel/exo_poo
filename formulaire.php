<?php 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>POO</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>La POO aplliquée à un formulaire</h1>
        <form action='form.php' method='post'>
            <label for='nom'>Nom d'utilisateur : </label>
            <input type='text' name='nom' id='nom'><br>
            <label for='pass'>Choisissez un mot de passe.</label>
            <input type='password' name='pass' id='pass'><br>
            <input type='submit' value='Envoyer'>
        </form>
        <?php
            // require 'classes/utilisateur.class.php';
            //+ Vérification des données reçues (regex + filtres)
            //+ Stockage des données (base de données)
            // $pierre = new Utilisateur($_POST['nom'], $_POST['pass']);
            // echo $pierre->getNom(). '<br>';
        ?>
    </body>
</html>
