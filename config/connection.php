<?php

$host = "localhost";
$db_name = "clientes";
$username = "root";
$password = "";

try {

}catch (PDOException $e) {
    $error = $e->getMessage();
    echo "Erro: " . $error;
}