<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{   
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    //Propriétés propres à Car
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = true;

    //Constructor
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    //Get & Set 
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * Get the value of hasParkBrake
     */ 
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the initial value of hasParkBrake
     *
     * @return  self
     */ 
    public function setHasParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }

    /**
     * Change the value of hasParkBrake
     *
     * @return  self
     */ 
    public function setParkBrake(): bool
    {
        if ($this->hasParkBrake == true) {
            $this->hasParkBrake = false;
        } else {
            $this->hasParkBrake = true;
        }
        return $this->hasParkBrake;
    }

    // Start
    public function start(): string 
    {
        $sentence = "";
            if ($this->hasParkBrake == true) {
                throw new Exception('You fool ! You cannot start with the parking brake!');
            } elseif ($this->currentSpeed == 0)
            {
                $this->forward();
                return "Time to start";
            } else {
                return "You already started, can't you see?";
            }
    }

    // Avancer
    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }
        
    // Freiner
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Oh god, brake !!!";
        }
            $sentence .= "Thank god, I'm stopped !";
            return $sentence;
    }
}