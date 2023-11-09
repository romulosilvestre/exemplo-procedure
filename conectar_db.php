<?php
$serverName = "LAB-F09-15\SQLEXPRESS";
$connectionOptions = array(
    "Database" => "Romullus",
    "Uid" => "sa",
    "PWD" => "senai"
);
// Estabelecer a conexão com o banco de dados
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}else{
    echo "Conectado com Sucesso!"
}
?>
