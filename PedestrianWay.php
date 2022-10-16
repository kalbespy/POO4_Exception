<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{   
    // Constantes
    public const NB_LANE = 1;
    public const MAX_SPEED = 10;

    // Propriétés
    protected int $nbLane = self::NB_LANE;   
    protected int $maxSpeed = self::MAX_SPEED;

    // Méthode
    function addVehicle(object $vehicle): array
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) 
        {
            $this->currentVehicles[] = array($vehicle);
            return $this->currentVehicles;
        } else {
            return $this->currentVehicles;        
        }
    }
}