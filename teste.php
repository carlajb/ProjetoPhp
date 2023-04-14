<?php

include_once 'Datarequest.php';
$data = new DataRequest();

echo '<pre>';
print_r($data->dadosClientes());
print_r($data->dadosFornecedores());
print_r($data->dadosUsuarios());
echo '</pre>';
?>