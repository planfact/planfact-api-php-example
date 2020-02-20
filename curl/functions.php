<?php
//тело функции curl запроса
//первый аргумент - тип запроса
//второй аргумент - данные, которые передаём, если их нет, то ставим null
//третий аргумент - ссылка запроса
function request($type, $data, $link)
{
    include 'variables.php';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_URL, $link);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST,$type);
    if ($data)
    {
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    }
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json','X-ApiKey: '.$api_key));
    $out=curl_exec($curl);
    curl_close($curl);
    echo $out;
}
?>