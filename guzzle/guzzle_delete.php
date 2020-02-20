<?php
include '../variables.php';
//id операции, которую хотим удалить
$operation_id = '';
//вызываем метод delete и передаём ему ссылку
$out = $client -> delete('operations/'.$operation_id);
echo $out -> getBody();
?>