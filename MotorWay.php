<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{   
    // Constantes
    public const NB_LANE = 4;
    public const MAX_SPEED = 130;

    // Propriétés
    protected int $nbLane = self::NB_LANE;   
    protected int $maxSpeed = self::MAX_SPEED;

    // Méthode
    function addVehicle(object $vehicle): array
    {
        if (!($vehicle instanceof Bike) || !($Vehicle instanceof Skateboard)) 
        {
            $this->currentVehicles[] = array($vehicle);
            return $this->currentVehicles;
        } else {
            return $this->currentVehicles;       
        }
    }
}
