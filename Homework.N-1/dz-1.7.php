<!doctype html>
<html lang="en">
<style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th {
        border: 1px solid #000;
        padding: 5px;
    }

    td {
        border: 1px solid #000;
        padding: 5px;
    }
</style>
</html>
<?php
//Задание #7

/*1. Используя цикл for, выведите таблицу умножения размером 10x10. Таблица
должна быть выведена с помощью HTML тега <table>
2. Если значение индекса строки и столбца чётный, то результат вывести в
круглых скобках.
3. Если значение индекса строки и столбца Нечётный, то результат вывести в
квадратных скобках.
4. Во всех остальных случаях результат выводить просто числом. */

$rows = 10;// количество строк, tr
$cols = 10;// количество столбцов, td
echo '<table>';
for ($tr = 1; $tr <= 10; $tr++) { //счётчик $tr

    for ($th = 1; $th <= 10; $th++) { //счётчик $th
        echo '<th>';
        $res = $tr * $th;

        if ($res % 2 === 0) { //условие чётные или нечётные
            echo "($res)";
        } elseif ($res % 2 != 0) {
            echo "[$res]";
        } else {
            echo $res;
        }

        echo '</th>';
    }

    echo '</tr>';
}
echo '</table>';

