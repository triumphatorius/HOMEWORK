<?php

abstract class  A_Cars
{
    public $model;
    public $power;
    public $transmission;
    public $temperature;

    public function Move($distance, $speed, $direction){}
    public function getTransmission() {}
    public function Start() {}
    public function turnOff() {}
    public function maxSpeed($speed) {}
    public function getCool($distance, $speed) {}
    public function setSpeed($direction, $speed){}


}