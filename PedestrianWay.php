<?php

require_once 'HighWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';


final class PedestrianWay extends HighWay
{   
    // Constantes
    public const NB_LANE = 1;
    public const MAX_SPEED = 10;

    // Propriétés
    protected int $nbLane = self::NB_LANE;   
    protected int $maxSpeed = self::MAX_SPEED;

    // Méthode
    public function addVehicle(Vehicle $vehicle): string
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) 
        {
            $this->setCurrentVehicles($vehicle);
            $sentence = "Vehicle authorized";

        } else {
            $sentence = "Vehicle unauthorized! Freeze!"; 
        }
        return $sentence;      
    }
}