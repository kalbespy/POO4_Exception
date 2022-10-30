<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

final class MotorWay extends HighWay
{   
    // Constantes
    public const NB_LANE = 4;
    public const MAX_SPEED = 130;

    // Propriétés
    protected int $nbLane = self::NB_LANE;   
    protected int $maxSpeed = self::MAX_SPEED;

    // Méthode
    public function addVehicle(Vehicle $vehicle): string
    {
        if (($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard)) 
        {
            $sentence = "Vehicle unauthorized! Freeze! <br>"; 
        } else {
            $this->setCurrentVehicle($vehicle);
            $sentence = "Vehicle authorized <br>";
        }
        return $sentence;
    }
}
