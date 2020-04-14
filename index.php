<?php

require_once 'car.php';

// CAR ------------------------------------------------------------------------------------------------------------------

require_once 'car.php';
$car = new Car("Vert", 4, "Electric");
$car->setNbWheels(4);
$car->setCurrentSpeed(130);
$car->setEnergyLevel("Bas");
$car->setParkBrake(true);
var_dump($car);

// Moving Car
echo $car->start();
echo '<br> Je suis actuellement dans un véhicule ' . $car->getColor() .' de type voiture avec ' . $car->getNbWheels() . " roues" . '<br>';
echo $car->forward();
echo '<br> Je sens que les ' . $car->getNbSeats() . " sièges vont s'envoler, le moteur " . $car->getEnergy() . " va exploser !" . '<br>';
echo 'Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo "<br> Mon réservoir à énergie est presque vide, la jauge m'indique : " . $car->getEnergyLevel() . ", c'est parti on va trouver une station essence !";
