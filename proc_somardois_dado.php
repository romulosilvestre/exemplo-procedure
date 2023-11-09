<?php
include 'conectar_bd.php';

// Definir os parâmetros da procedure
$num1 = $_POST['pri_numero'];
$num2 = $_POST['seg_numero'];

// Definir a chamada para a procedure
$sql = "{EXEC somar_numeros(?, ?)}";

// Iniciar o statement
$stmt = sqlsrv_prepare($conn, $sql, array(&$num1, &$num2));

// Executar a query
if (sqlsrv_execute($stmt) === false) {
    echo "Erro na execução da procedure.";
} else {
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo "Resultado da soma: " . $row['soma'] . "<br />";
    }
}

// Limpar recursos
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);
?>
