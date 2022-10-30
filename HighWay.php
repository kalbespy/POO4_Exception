<?php


require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

// HighWay.php

abstract class HighWay
{
    // Propriétés
    protected array $currentVehicles;
    protected int $nbLane;
    protected int $maxSpeed;


    // Méthode Abstraite addVehicle
    abstract public function addVehicle(Vehicle $vehicle);


    // Get et Set currentVehicles
    public function getCurrentVehicle(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicle(object $currentVehicles): void
    {
        $this->currentVehicles[] = $currentVehicles;
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
}