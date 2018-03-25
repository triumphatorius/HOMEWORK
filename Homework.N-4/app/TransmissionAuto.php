<?php

class TransmissionAuto
{
    use Transmission;

    public function automaticallySetGear($speed)
    {
        if ($speed < 0) {
            return false;
        }
        $this->gearbox = $speed <= 20 ? 1 : 2;
        echo $this, '<br>';
        return true;
    }
}
