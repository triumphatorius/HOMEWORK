<?php

class Engine
{
    private $power;
    private $temperature;
    private $maxSpeed;

    public function __construct($power, $temperature)
    {
        $this->power = $power;
        $this->temperature = $temperature;
        $this->maxSpeed = $power * 2;
        echo "1. Мощность двигателя :  $this->power . ' лошадинных сил, <br />
              2. Допустимая максимальная температура двигателя : $this->temperature ° <br /> 
              3. Максимальная скорость :  $this->maxSpeed,  км/ч <br /><br />";
    }

    public function getPower()
    {
        return $this->power;
    }


    public function ignition()
    {
        echo 'Зажигание двигателя', '<br>';
    }

    public function shutoff()
    {
        echo 'Выключение двигателя', '<br>';
    }

    public function increaseTemperature($rise)
    {
        $this->temperature += $rise;
        echo 't=', $this->temperature, '°', '<br>';
        while ($this->temperature >= 110) {
            $this->temperature -= 10;
            echo 't=' . $this->temperature, '°' . ' Вентилятор включён' . '<br>';
        }
    }
}
