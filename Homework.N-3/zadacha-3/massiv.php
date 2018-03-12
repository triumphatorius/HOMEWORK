<?php

function writeCsv()
{
    $arr = [];
    for ($i = 0; $i <= 100; $i++) {
        $arr[$i] = rand(0, 100);
    }

    $fp = fopen('massiv.csv', 'w');
    //w - Открывает файл только для записи; помещает указатель в начало файла и обрезает файл до нулевой длины.
    // Если файл не существует - пробует его создать.
    //http://php.net/manual/ru/function.fopen.php

    fputcsv($fp, $arr, ';');

    fclose($fp);
    echo 'Файл успешно записан <br />';
}

function sumCsv()
{
    $fpr = fopen('massiv.csv', 'r');
    $res = fgetcsv($fpr, 100, ';');

    $sum = 0;
    foreach ($res as $key => $value) {
        if ($value % 2 == 0) {
            $sum += $value;
        }
    }
    echo 'Сумма чётных чисел равна : ' . $sum;
    fclose($fpr);
}

writeCsv();
sumCsv();
