<?php
include '../variables.php';
include 'functions.php';
//id операции, которую хотим изменить
$operation_id = '';
//ссылка на которую отправляем запрос 
$link = $url.'operations/income/'.$operation_id;
//данные операции, которую хотим изменить см. https://apidoc.planfact.io/
$data = [
    "operationDate"=> "2020-02-18", //ОБЯЗАТЕЛЬНО ПОЛЕ!
    "accountId"=> null, //id счёта ОБЯЗАТЕЛЬНО ПОЛЕ!
    "comment"=> "",
    "isCommitted"=> false,
    "items" => array([
        "calculationDate"=> "2020-02-18", //ОБЯЗАТЕЛЬНО ПОЛЕ!
        "isCalculationCommitted"=> false,
        "contrAgentId"=> null,
        "operationCategoryId"=> null,
        "projectId"=> null,
        "firstAdditionalOperationAttributeId"=> null, //id дополнительно операции  ОБЯЗАТЕЛЬНО ПОЛЕ!
        "value"=> null //сумма этой операции ОБЯЗАТЕЛЬНО ПОЛЕ!
    ])
];
//функция curl запроса
request('PUT', $data, $link);
?>