<?php
	


function ProcurarAccount($login){
    global $pdo;

    $stmt = $pdo->prepare("SELECT account_name FROM characters WHERE char_name = :login");
    $stmt->execute(['login' => $login]);

    return $stmt->fetchColumn(); // retorna apenas o valor, ou false se não encontrar
}

function Destravar(){
    global $pdo;

    $update = $pdo->prepare("UPDATE `accounts` SET `access_level` = 0");
    $update->execute();
	
	return $update;
	
}

function Banir($login){
    global $pdo;

    $update = $pdo->prepare("UPDATE `accounts` SET `access_level` = -100 WHERE `login` = '$login'");
    $update->execute();
	
	return $update;
	
}


function ChangePassword($login, $senha){
    global $pdo;

    // Atenção: isso insere diretamente as variáveis na query!
    $stmt = $pdo->prepare("UPDATE `accounts` SET `password` = '$senha' WHERE `login` = '$login'");
    $stmt->execute();

    return $stmt;
}
