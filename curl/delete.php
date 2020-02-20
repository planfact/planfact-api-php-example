<?php
include '../variables.php';
include 'functions.php';
//id операции, которую хотим удалить
$operation_id = '';
//ссылка на которую отправляем запрос 
$link = $url.'operations/'.$operation_id;
//функция curl запроса
request('DELETE', null, $link);
?>