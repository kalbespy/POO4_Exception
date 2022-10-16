<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{   
    // Constantes
    public const NB_LANE = 2;
    public const MAX_SPEED = 50;

    // Propriétés
    protected int $nbLane = self::NB_LANE;   
    protected int $maxSpeed = self::MAX_SPEED;

    // Méthode
    function addVehicle(object $vehicle): array 
    {
        $this->currentVehicles[] = array($vehicle);
        return $this->currentVehicles;
    } 
}