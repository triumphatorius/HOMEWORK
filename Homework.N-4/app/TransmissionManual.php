<?php

class TransmissionManual
{
    use Transmission;

    public function first()
    {
        $this->gearbox = 1;
        echo $this, '<br>';
    }

    public function second()
    {
        $this->gearbox = 2;
        echo $this, '<br>';
    }
    public function three()
    {
        $this->gearbox = 3;
        echo $this, '<br>';
    }
}
