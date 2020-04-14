<?php

// Vehicle.php

abstract class Vehicle
{
    /**
     * @var string
     */
    protected $color;
    /**
     * @var int
     */
    protected $currentSpeed;
    /**
     * @var int
     */
    protected $nbSeats;
    /**
     * @var int
     */
    protected $nbWheels;

    public function __construct(string $color, int $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function forward()
    {
        return "Première, deuxième, ok beau gosse je vais me cracher sale";
    }

    public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed-=10;
            $sentence .= "Ralenti espèce de fou !";
        }
        $sentence .= "Ouf on l'a échappé belle !";
        return $sentence;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }
}