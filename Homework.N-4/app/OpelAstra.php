<?php

class OpelAstra extends Car
{
    public $handBrake;
    public $gearBox;
    private $engine;

    public function __construct()
    {
        // Общие характеристики OpelAstra
        echo 'Opel Astra - <br />';
        $this->engine = new Engine(95,110);
        $this->gearBox = new TransmissionManual();
        $this->handBrake = new HandBrake();
    }

    public function move($distance, $speed, $backward = false)
    {
        //Если параметры некорректные возвращаем false
        if ($distance <= 0 || $speed <= 0) {
            return false;
        }

        $this->engine->ignition();
        $this->handBrake->removeFromHandbrake();
        if ($backward) {
            //Двигаемся назад
            $this->gearBox->reverse();
            echo "Начинаем движение назад со скоростью ",
            "{$speed} км/ч", '<br>';
        } else {
            //Двигемся вперед
            if ($speed <= 20) {
                $this->gearBox->first();
            } elseif($speed <= 70) {
                $this->gearBox->second();
            }else{
                $this->gearBox->three();
            }
            echo "Начинаем движение вперед со скоростью ",
            "$speed км/ч", '<br>';
        }
        //Каждые 10 метров двигатель нагревается на 5 градусов
        $distanceCovered = 0;
        while ($distance - $distanceCovered >= 10) {
            $distanceCovered += 10;
            echo "Проехали $distanceCovered метров. ";
            $this->engine->increaseTemperature(5);
        }
        //Если дистанция не делится на 10
        if ($distanceCovered < $distance) {
            echo "Проехали $distance метров. ";
            $this->engine->increaseTemperature(
                5 * ($distance - $distanceCovered) / 10
            );
        }
        $this->engine->shutoff();
        $this->handBrake->setTheParkingBrake();
        $this->gearBox->neutral();
        return true;
    }
}
