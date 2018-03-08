<?php
//Задание #6.

//1. Создайте массив $bmw с ячейками: model, speed, doors, year
//2. Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”
$bmw = ['model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015];

//3. Создайте массивы $toyota и $opel аналогичные массиву $bmw(заполните данными).
$toyota = ['model' => 'LAND CRUISER',
    'speed' => 190,
    'doors' => 5,
    'year' => 2007];

$opel = ['model' => 'KARL',
    'speed' => 170,
    'doors' => 5,
    'year' => 2017];

//4. Объедините три массива в один многомерный массив
/*$cars = array(
    'bmw' => array(
        model => "X5",
        speed => 120,
        doors => 5,
        year => 2015),
    'toyota' => array(
        model => "LAND CRUISER",
        speed => 190,
        doors => 5,
        year => 2007),
    'opel' => array(
        model => "KARL",
        speed => 170,
        doors => 5,
        year => 2017)
);*/

$cars['bmw']=array(
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015);

$cars['toyota']=array(
    'model' => 'LAND CRUISER',
    'speed' => 190,
    'doors' => 5,
    'year' => 2007);

$cars['opel']=array(
    'model' => 'KARL',
    'speed' => 170,
    'doors' => 5,
    'year' => 2017);
/* 5. Выведите значения всех трех массивов в виде:
Например:
CAR bmw
X5 120 5 2015 */
echo 'CAR bmw <br />';
echo $cars['bmw']['model'] . ' ';
echo $cars['bmw']['speed'] . ' ';
echo $cars['bmw']['doors'] . ' ';
echo $cars['bmw']['year'] . ' ';

echo "<br /><br />";
echo 'CAR toyota <br />';
echo $cars['toyota']['model'] . ' ';
echo $cars['toyota']['speed'] . ' ';
echo $cars['toyota']['doors'] . ' ';
echo $cars['toyota']['year'] . ' ';

echo "<br /><br />";
echo 'CAR opel <br />';
echo $cars['opel']['model'] . ' ';
echo $cars['opel']['speed'] . ' ';
echo $cars['opel']['doors'] . ' ';
echo $cars['opel']['year'] . ' ';

