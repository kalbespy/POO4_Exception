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
    public function addVehicle(Vehicle $vehicle): string 
    {
        $this->setCurrentVehicle($vehicle);
        $sentence = 'Ca passe. Circulez, y a rien à voir <br>';
        return $sentence;
    } 
}