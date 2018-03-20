<?php
require 'A_Cars.php';

class Car extends A_Cars
{
    public function __construct($model, $transmission, $power)
    {
        $this->transmission = $transmission;
        $this->power = $power;
        $this->model = $model;
    }

    public function Move($distance, $speed, $direction)
    {
        $this->Start();
        $this->setSpeed($direction, $speed);
        $this->maxSpeed($speed);
        $this->getCool($distance, $speed);
        $this->turnOff();
    }

    public function __construct2($transmission, $power)
    {
        $this->transmission = $transmission;
        $this->power = $power;
    }
    public function getTransmission() {
        return $this->transmission;
    }
    public function Start() {
        echo "Двигатель запущен!<br />";
    }
    public function turnOff() {
        echo "Двигатель выключен!<br />";
    }
    public function maxSpeed($speed) {
        $max = $this->power * 2;
        if ($speed > $max) {
            return $max;
        } else {
            return $speed;
        }
    }
    public function getCool($distance, $speed) {
        for ($done = 0; $done <= $distance; $done += $this->maxSpeed($speed)) {
            if ($done == 0) {
                echo "Начинаем движение!<br />";
                continue;
            }
            $this->temperature += $speed / 10 + 5;
            if ($this->temperature >= 90) {
                $this->temperature -= 10;
                echo "Включите кулер!<br />";
            }
            echo "Пройдено $done. метров : Температура двигателя $this->temperature градусов.<br />";
        }
    }
    public function setSpeed($direction, $speed)
    {
        switch ($direction) {
            case 'fwd':
                echo "Движение вперед<br />";
                break;
            case 'bck':
                echo "Переключение назад<br />";
                break;
        }
        if ($this->getTransmission() == 'MT') {
            if($speed <= 20){
                echo "Скорость N1<br />";
            }else {
                echo "Скорость N2<br />";
            }
        }
    }

}

$bmw = new Car("BMW", "MT", 50);
$bmw->Move(1000, 60, "fwd");