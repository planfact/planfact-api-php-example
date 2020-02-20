<?php
include '../variables.php';
include 'functions.php';
//ссылка на которую отправляем запрос 
$link = $url.'accounts';
//функция curl запроса
request('GET', null, $link);
?>