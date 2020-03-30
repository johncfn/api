<?php 

	
	$userDB = "root" ; //user db
	$pwdDB = ""; //senha db
	$hostDB = "localhost"; //host db
	$dbName = "tarefa"; //nome Db



	try {		
		$pdo = new PDO("mysql:host=$hostDB;dbname=$dbName;charset=utf8", $userDB, $pwdDB); //cria conexao
	} catch (PDOException $e) {		
		echo "Erro ao conectar ao banco: ".$e; //retorna o erro ao se não conectar ao banco.
	}

 ?>