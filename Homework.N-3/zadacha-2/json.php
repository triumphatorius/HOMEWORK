<?php
/* Задача #2
1. Создайте массив, в котором имеется как минимум 1 уровень вложенности.
Преобразуйте его в JSON. Сохраните как output.json
2. Откройте файл output.json. Случайным образом решите изменять данные или
нет. Сохраните как output2.json
3. Откройте оба файла. Найдите разницу и выведите информацию об
отличающихся элементах */
//массив содержит ИНДЕКС РАЗВИТИЯ ИНФОРМАЦИОННО-КОММУНИКАЦИОННЫХ ТЕХНОЛОГИЙ В СТРАНАХ МИРА 2017

$arr_main = [
    ['Исландия', 'Южная Корея', 'Швейцария'],
    ['Дания', 'Великобритания', 'Гонконг'],
    ['Нидерланды', 'Норвегия', 'Люксембург'],
    $arr_1[] = [['Япония', 'Швеция', 'Германия'], $arr_3[] = ['Исланд', 'Южная Кор', 'Швейцар']],
    $arr_2[] = ['Новая Зеландия', 'Австралия', 'Франция']
];

//print_r( $arr_main[3][1] );

$encoded = json_encode($arr_main, JSON_UNESCAPED_UNICODE);
file_put_contents('output.json', $encoded);


$f = file_get_contents('output.json');
$decoded = json_decode($f, 'output.json');
echo '<pre>';
//print_r($decoded);
echo '</pre>';

$f2 = file_get_contents('output2.json');
$decoded2 = json_decode($f2, 'output2.json');
echo '<pre>';
//print_r($decoded2);
echo '</pre>';

$difference = array_diff_assoc($decoded, $decoded2);

echo '<pre>';
print_r($difference);
echo '</pre>';





