<?php

// POO Basics 3

//Bike
require_once 'Bicycle.php';
$bicycle = new Bicycle('blue', 1);

//Car
require_once 'Car.php';
$car = new Car('green', 4, 'electric');

//Truck 1
require_once 'Truck.php';
$truck1 = new Truck(50, 'Yellow', 2, 'fuel');
$truck1->setLoad(35);

//Truck 2
require_once 'Truck.php';
$truck2 = new Truck(67, 'Purple', 3, 'electric');
$truck2->setLoad(68);



//HighWay
require_once 'ResidentialWay.php';
$residentialWay = new ResidentialWay();

echo "On the ResidentialWay to hell <br>";
$residentialWay->addVehicle($car);
var_dump($residentialWay->getCurrentVehicle());

$residentialWay->addVehicle($bicycle);
var_dump($residentialWay->getCurrentVehicle());



