<?php

trait Transmission
{
    private $gearBox = 0;

    public function __toString()
    {
        switch ($this->gearbox) {
            case -1:
                return 'Задняя передача';
                break;
            case 0:
                return 'Нейтральная передача';
                break;
            case 1:
                return 'Первая передача';
                break;
            case 2:
                return 'Вторая передача';
                break;
            case 3:
                return 'Третья передача';
                break;
            default:
                return 'Ошибка коробки передач';
        }
    }

    public function getGearbox()
    {
        return $this->gearbox;
    }

    public function neutral()
    {
        $this->gearbox = 0;
        echo $this, '<br>';
    }

    public function reverse()
    {
        $this->gearbox = -1;
        echo $this, '<br>';
    }
}
