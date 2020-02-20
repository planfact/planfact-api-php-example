<?php
include '../variables.php';
//вызываем метод get и передаём ему ссылку
$out = $client -> get('accounts');
echo $out -> getBody();
?>