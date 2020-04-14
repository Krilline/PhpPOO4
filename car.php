<?php

// Car.php


require_once 'vehicle.php';

final class Car extends Vehicle
{
    /**
     * @var string
     */
    private $energy;
    /**
     * @var string
     */
    private $energyLevel;
    /**
     * @var bool
     */
    private $hasParkBrake;

    const ALLOWED_ENERGIES = [
        'Diesel',
        'Electric', ];

    public function __construct($color, $nbSeats, $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function setEnergy(string $energy):Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergy():string
    {
        return $this->energy;
    }

    public function getEnergyLevel():string
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(string $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start()
    {
        try{
            if($this->hasParkBrake === false){
                echo "Je démarre ma caisse, vroom vroom ";
            }else{
                throw new Exception("Attention, frein à main serré ! ");
            }
        }catch (Exception $error){
            echo $error->getMessage();
            $this->setParkBrake(false);
            echo "Votre frein à main a été desseré ! ";
            if($this->hasParkBrake === false){
                echo "Je démarre ma caisse, vroom vroom ";
            }
        }finally{
            echo "Ma voiture roule comme un donut";
        }
    }
}