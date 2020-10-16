<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours Pierre Giraud</title>
</head>
<body>

    <h1>POO</h1>

    <?php 
        require "classes/utilisateur.class.php";
        require "classes/admin.class.php";

        $pierre = new Admin('Pierre', 'abcdef');
        $mathilde = new Utilisateur('Mimi', '123456');

        // $pierre->setNom('Pierre');
        // $pierre->setPasse('lol');

        // $mathilde->setNom('Mimi');
        // $mathilde->setPasse('mimi27');

        // echo $pierre->getNom2() . '<br>';
        echo $pierre->getNom() . '<br>';
        echo $mathilde->getNom() . '<br>';

        $pierre->setBan('Paul');
        $pierre->setBan('Jean');
        echo $pierre->getBan();
    ?>

    <p>Un super paragraphe</p>

</body>
</html>