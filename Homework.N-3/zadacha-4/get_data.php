<?php

function getData()
{
    $url = 'https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json';
    $curl = curl_init(); // Инициализируем сеанс cURL

// Устанавливаем параметр для сеанса CURL
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl); //  Выполняем запрос cURL
    curl_close($curl); // Завершаем сеанс cURL

    $result1 = json_decode($result, true);

    echo '<pre>';
    print_r($result1);
    echo '</pre>';
    echo '<hr>';

    echo 'page_id : ' . $result1['query']['pages']['15580374']['pageid'] . '<br>';
    echo 'title : ' . $result1['query']['pages']['15580374']['title'] . '<br>';

}

getData();