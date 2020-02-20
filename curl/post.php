<?php
include '../variables.php';
include 'functions.php';
//ссылка на которую отправляем запрос 
$link = $url.'accounts';
//данные счёта, который хотим создать см. https://apidoc.planfact.io/
$data = [
    "title"=>"Сбербанк 1234", //ОБЯЗАТЕЛЬНО ПОЛЕ!
    "longTitle" => "string",
    "description" => null,
    "companyId" => null, //id юрлица ОБЯЗАТЕЛЬНО ПОЛЕ!
    "accountType" => "Cash",
    "accountAcct" => null,
    "accountBik" => null,
    "accountBank" => null,
    "currencyCode" => "USD",
    "active" => true,
    "remainder" => 0,
    "remainderDate" => "2020-02-18" //ОБЯЗАТЕЛЬНО ПОЛЕ!
];
//функция curl запроса
request('POST', $data, $link);
?>