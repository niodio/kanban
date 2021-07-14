<?php

require __DIR__ . '/config.php';

try {
    $conn = new PDO(DSN_MYSQL . ':host=' . HOST . ';dbname=' . DATABASE, USER, PASS);
    echo 'CONECTADO COM SUCESSO';
} catch (PDOException $ex) {
    var_dump($ex->getMessage());
}
