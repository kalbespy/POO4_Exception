<?php

// HighWay.php

abstract class HighWay
{
    // Propriétés
    protected array $currentVehicle = [];
    protected int $nbLane;
    protected int $maxSpeed;

    // Get et Set currentVehicle
    public function getCurrentVehicle(): array
    {
        return $this->currentVehicle;
    }

    public function setCurrentVehicle(array $currentVehicle): void
    {
        $this->currentVehicle = $currentVehicle;
    }


    // Get et Set nbLane
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }


    // Get et Set maxSpeed
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }


    // Méthode Abstraite addVehicle
    abstract function addVehicle(object $vehicle);

}