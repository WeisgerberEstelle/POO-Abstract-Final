<?php

final class MotorWay extends HighWay
{
    private int $nbLane = 1;

    private int $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if (($vehicle instanceof Bike) || ($vehicle instanceof Skateboard)){
            $currentVehicles[] = $vehicle;
        }
    }
}