<?php


//https://www.php.net/manual/pt_BR/book.pdo.php

//código retirado da propria documentação do php

$host = 'localhost:3306'; //hostname padrao é localhost:3306 
$dbname = 'l2jdb'; //nome do banco de dados
$user = 'root'; //usuario do banco de dados
$pass = 'root'; //senha do banco de dados

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    // Define modo de erro para lançar exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Conexão com PDO bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
