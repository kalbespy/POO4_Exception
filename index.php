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

//ResidentialWay
require_once 'ResidentialWay.php';

$residentialWay = new ResidentialWay();

echo "On the Residential Way to hell <br> <br>";
echo "Car: " . $residentialWay->addVehicle($car);
echo "Bicycle: " . $residentialWay->addVehicle($bicycle);
var_dump($residentialWay->getCurrentVehicle());

//MotorWay
require_once 'MotorWay.php';

$motorWay = new MotorWay();

echo "On the Motor Way <br><br>";
echo "Car: " . $motorWay->addVehicle($car);
echo "Truck: " . $motorWay->addVehicle($truck1);
echo "Bicycle: " . $motorWay->addVehicle($bicycle);
var_dump($motorWay->getCurrentVehicle());

//PedestrianWay
require_once 'PedestrianWay.php';

$pedestrianWay = new PedestrianWay();

echo "On the Pedestrian Way <br><br>";
echo "Car: " . $pedestrianWay->addVehicle($car);
echo "Truck: " . $pedestrianWay->addVehicle($truck1);
echo "Bicycle: " . $pedestrianWay->addVehicle($bicycle);
var_dump($pedestrianWay->getCurrentVehicle());


