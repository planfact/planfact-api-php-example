<?php
include '../variables.php';
//id операции, которую хотим изменить
$operation_id = '';
//данные операции, которую хотим изменить см. https://apidoc.planfact.io/
$data = [
    "operationDate"=> "2020-02-19", //ОБЯЗАТЕЛЬНО ПОЛЕ!
    "accountId"=> null, //id счёта ОБЯЗАТЕЛЬНО ПОЛЕ!
    "comment"=> "",
    "isCommitted"=> false,
    "value"=> null, //общяая сумма операций ОБЯЗАТЕЛЬНОЕ ПОЛЕ!
    "items" => array([
        "calculationDate"=> "2020-02-19", //ОБЯЗАТЕЛЬНО ПОЛЕ!
        "isCalculationCommitted"=> false,
        "contrAgentId"=> null,
        "operationCategoryId"=> null,
        "projectId"=> null,
        "firstAdditionalOperationAttributeId"=> null, //id дополнительной операции ОБЯЗАТЕЛЬНО ПОЛЕ!
        "value"=> null //сумма этой операции ОБЯЗАТЕЛЬНО ПОЛЕ!
    ])
];
//вызываем метод put и передаём ссылку и данные операции
$out = $client -> put('operations/income/'.$operation_id, ['json' => $data]);
echo $out -> getBody();
?>