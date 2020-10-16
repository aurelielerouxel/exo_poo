<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours openclassroom</title>
</head>
<body>
    <h1>MMORPG</h1>
    <?php 
        require "classes/personnage.class.php";

        $perso1 = new Personnage;
        $perso2 = new Personnage;
        $perso1->parler();
        echo "<br>";

        $perso1->frapper($perso2);
        // $perso->afficher_experience();
        $perso1->gagner_experience();
        echo "<br>";

        $perso2->frapper($perso1);
        // $perso->afficher_experience();
        $perso2->gagner_experience();
        echo "<br>";

        $perso1->gagner_experience();
        echo "<br>";
    ?>
</body>
</html>