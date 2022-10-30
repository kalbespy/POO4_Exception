<?php

// POO Basics 3

//Car
require_once 'Car.php';
$car = new Car('green', 4, 'electric');

// Frein à main enclenché
echo "Frein à main enclenché ? (0 = non; 1 = oui) : " . $car->getHasParkBrake() . "<br>";

try {
    echo $car->start() . "<br";
} catch(Exception $e) {
    echo "Exception received: " . $e->getMessage() . "<br>";
} finally {
    echo "Anyway, my car drives like a donut <br><br>";
}

// Frein à main désenclenché
$car->setParkBrake();
echo "Frein à main enclenché ? (none = non; 1 = oui) : " . $car->getHasParkBrake() . "<br>";

try {
    echo $car->start() . "<br>";
} catch(Exception $e) {
    echo "Exception received: " . $e->getMessage() . "<br>";
} finally {
    echo "Anyway, my car drives like a donut <br><br>";
}

// Frein à main résenclenché

$car->setParkBrake();
echo "Frein à main enclenché ? (none = non; 1 = oui) : " . $car->getHasParkBrake() . "<br>";
try {
    echo $car->start() . "<br";
} catch(Exception $e) {
    echo "Exception received: " . $e->getMessage() . "<br>";
} finally {
    echo "Anyway, my car drives like a donut <br><br>";
}
