<?php
include '../variables.php';
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
//вызываем метод post и передаём ему ссылку и даные для создания счёта
$out = $client -> post('accounts', ['json' => $data]);
echo $out -> getBody();
?>