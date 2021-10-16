<?php

require_once 'HighWay.php';
require_once 'Car.php';

final class MotorWay extends HighWay
{
    private int $nbLane = 4;

    private int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $currentVehicles[] = $vehicle;
        }
    }
}