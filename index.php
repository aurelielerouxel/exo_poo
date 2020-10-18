<!-- Découvrez les classes------------------------------------------------------------------------------------- -->
<h2>Découvrez les classes</h2>
<?php 
    require "classes/dog.class.php";

    $dog1 = new Dog();
    var_dump($dog1);
    $dog2 = new Dog($dog1);
    var_dump($dog2);
    $dog3 = $dog2;
    var_dump($dog3);
    echo "<br>";
?>

<?php 
    require "classes/customer.class.php";

    $customer = new Customer();
    var_dump($customer);
    echo "<br>";
    $customer->name = "Doe";
    var_dump($customer);
    echo "<br>";
    $customer->firstname = "John";
    $customer->age=42;
    $customer->payments=["visa", "mastercard","paypal"];
    var_dump($customer);
    echo "<br>";
    $customer2 = new Customer();
    var_dump($customer2);
    echo "<br>";
    $customer->dog = $dog1;
    var_dump($customer);
    echo "<br>";
    echo"---------------------------------------------------------------------------------------------------------";
    ?>

<!-- -------------------------------------------------------------------------------------------------------- -->
<h2>Ajouter des attributs</h2>
    <!-- Ajouter des attributs -->
<?php 
    $customer3 = new Customer();
    var_dump($customer3);
    echo "<br>";
    $customer4 = new Customer();
    var_dump($customer4);
    echo "<br>";
    $customer4->name = strtoupper($customer->name);
    var_dump($customer4);
    echo "<br>";
    $customer4->firstname = strtoupper($customer->firstname);
    var_dump($customer4);
    echo "<br>";
    $payments = ["visa", "mastercard","paypal"];
    array_push($payments, "cash");
    $customer->payments[] = "cash";
    var_dump($payments);
    echo "<br>";
    echo $customer4->firstname . " " . $customer4->name . " is " . $customer4->age . " years old.";
    echo "<br>";
    echo "He has the following means of payement :";
    echo "<br>";
    echo "------------------------------------------------------------------------------------------------------";
    echo "<br>";
?>
<!-- --------------------------------------------------------------------------------------------------------- -->
<h2>Ajouter des méthodes</h2>
<!-- Ajouter des méthodes -->
<?php 
    require "classes/birds.class.php";
    $bird = new Bird();
    var_dump($bird);
    $bird->sing();
    $bird->fly("paris");
    echo "<br>";
?>

<?php 
    require "classes/other_bird.class.php";
    // $other_bird = new OtherBird("sparrow");
    echo "<br>";

    $data = [
        "type" => "sparrow",
        "color" => "white",
        "age" => 2,
        "areas" => ["europe", "north america", "asia"],
    ];
    $other_bird = new OtherBird($data);
    var_dump($other_bird);

    echo "<br>";
    echo "------------------------------------------------------------------------------------------------------";
    echo "<br>";
?>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<h2>Utiliser l'encapsulation</h2>

<?php 
    require "classes/student.class.php";
    $student = new Student();
    // $student->name="Timmy";
    // $student->age=35;
    // var_dump($student);
    // echo "<br>";
    // $student->setName("Timmy"); 
    // $student->setAge(32);
    // var_dump($student); 
    // echo "<br>";
    $student1 = new student();
    // $student1->setName("a");
    // $student1->setAge(1250);
    // var_dump($student1); 
    // echo "<br>";
    try {
        $student->setName("a");
        $student->setAge(1250);
    }
    catch(\Exception $e) {
        echo $e->getMessage();
    }
    echo "<br>";
?>

<?php 
    echo "<br>";
    require "classes/book.class.php";
    // $book = new Book();
    // $book->setTitle("The rain");
    // $book->setPages(246);
    // var_dump($book);
    $data = [
        "title"=>"The rain",
        "pages"=>246,
    ];
    $book = new Book($data);
    var_dump($book);
    echo "<br>" . $book->getTitle() . " has " . $book->getPages() . " pages."; 

    echo "<br>";
    echo "------------------------------------------------------------------------------------------------------";
    echo "<br>";
?>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<h2>Travailler les propriétés et les méthodes.</h2>
<h2>Utiliser le constructeur d'objet</h2>
<?php 
    require "classes/city.class.php";

    $city = new City("Coutances", 50);
    // $ville->setVille("Coutances");
    // $ville->setDepartement(50);

    // $data = [
    //     "ville"=>"Coutances",
    //     "departement"=>50,
    // ];
    // $ville = new City($data);

    // var_dump($ville);

    echo $city->showLocation();
    echo "<br>";
    echo "------------------------------------------------------------------------------------------------------";
    echo "<br>";
?>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<!-- <h2>Pratiquer les objets</h2> -->
<?php 
    // require "classes/personnes.class.php";

    // $personne = new Personne('Lerouxel', 'Aurelie', 'St Sebastien de Morsent');
    // echo $personne->getCoord();
    // echo "<br>";
    // echo "------------------------------------------------------------------------------------------------------";
    // echo "<br>";
?>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<h2>Pratiquer les objets</h2>
<?php 
    require "classes/person.class.php";
    // $person = new Person();
    $person = new person ([
        "firstname" => "Aurelie",
        "lastname" => "Lerouxel",
        "adress" => "Mordor"
    ]);
    // $person = new Person($data);
    echo $person->getCoord();
    // var_dump($person);
    echo "<br>";
    echo "------------------------------------------------------------------------------------------------------";
    echo "<br>";
?>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<h2>La poo appliquée à un formulaire</h2>
<h2>Héritage</h2>
<?php 
    require "classes/form.class.php";
    require "classes/uppgradedForm.class.php";
    
    // $form = new Form (array(
    //     "username" => "Aurélie"
    // ));
    $form = new Form($_POST);
    // $form1 = new uppgradedForm("");
    // var_dump($form);
    // die();
    // echo $form->input('username');
    // echo $form->input('password');
    // echo $form->submit();
?>
<form action="#" method="post">
    <?php 
        echo $form->setText('username');
        echo $form->setText('password');
        // echo $form->setRadio("radio", ["Femme" => "1", "Homme" => "0"]);
        echo $form->setSubmit();
        echo "<br>";
        echo "<p>#tu n'es pas de notre galaxie</p>";
        echo "------------------------------------------------------------------------------------------------------";
        echo "<br>";
    ?>
</form>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<h2>L'opérateur de résolution de portée</h2>
<?php 
// require "classes/renault.class.php";
    // $clio = new Clio ([
    //     "door" => 2,
    //     "color" => 'rouge',
    //     "price" => 6500
    // ]);
    // $clio = new Clio(["door" => Clio::TWO_DOORS, "color" => Clio::COLOR["rouge"]]);
    // var_dump($clio);
    // echo "<p>" . $clio->getColor() . "</p>";
    // echo "<p>" . $clio->getPrice() . "</p>";
    // echo $clio->getCar();
    echo "<br>";
    echo "------------------------------------------------------------------------------------------------------";
    echo "<br>";
?>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<h2>Gérer ses objets en base de données</h2>
<?php
    // require "classes/chat.class.php";
    // $chat = new Chat([
    //     "name" => "Mimi beauté",
    //     "age" => "12",
    //     "sex" => Chat::FEMALE, 
    //     "color" => Chat::COLOR["tigré"]
    // ]);
    echo "<br>";
    echo "------------------------------------------------------------------------------------------------------";
    echo "<br>";
?>
<!-- ---------------------------------------------------------------------------------------------------------- -->
<h2>Héritage 2</h2>
<?php 
    require "classes/personne.class.php";
    require "classes/adminClient.class.php";
    require "classes/adminElecteur.class.php";

    $client = new adminClient([
        "nom" => "Penneflamme",
        "prenom" => "Katty",
        "adresse" => "Tu n'es pas de notre galaxie"
    ]);

    $client->getCoord();
    // var_dump($client);

    $electeur = new adminElecteur ([
        "nom" => "Penneflamme",
        "prenom" => "Katty",
        "bureau_de_vote" => "Mégara"
    ]);
    $electeur->aVoter();
    echo "<br>";
    echo "------------------------------------------------------------------------------------------------------";
    echo "<br>";
?>
<!-- ---------------------------------------------------------------------------------------------------------- -->
