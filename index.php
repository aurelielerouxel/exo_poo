<!-- Découvrez les classes------------------------------------------------------------------------------------- -->
<h2>Découvrez les classes</h2>
<?php 
    require "dog.php";

    $dog1 = new Dog();
    var_dump($dog1);
    $dog2 = new Dog($dog1);
    var_dump($dog2);
    $dog3 = $dog2;
    var_dump($dog3);
    echo "<br>";
?>

<?php 
    require "customer.php";

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
    require "birds.php";
    $bird = new Bird();
    var_dump($bird);
    $bird->sing();
    $bird->fly("paris");
    echo "<br>";
?>

<?php 
    require "other_bird.php";
    $other_bird = new OtherBird("sparrow");
    var_dump($other_bird);
    echo "<br>";
    $data = [
        "type" => "sparrow",
        "color" => "white",
        "age" => 2,
        "areas" => ["europe", "north america", "asia"],
    ];
    // var_dump($data);
?>