<?php

spl_autoload_register(function ($class_name) {
    include 'app/'. $class_name . '.php';
});

$auto = new OpelAstra();
$auto->move(400, 20);

echo '<br>' .  'Тест автоматической трансмисий' .  '<br>';
$autotransmission = new TransmissionAuto();
$autotransmission->automaticallySetGear(15);
$autotransmission->automaticallySetGear(25);

echo '<br>';
$motor=new Engine(80,200);




