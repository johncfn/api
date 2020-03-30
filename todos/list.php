<?php 
	
	//include 'connection.php';
	
	require_once('connection.php'); //arquivo de conexao ao banco

	$sql = $pdo->prepare('SELECT * FROM todos'); //prepara a query SELECT
	$sql->execute(); //executa a query 
	$retorno = $sql->fetchAll(PDO::FETCH_ASSOC); //salva query no retorno

	
	echo json_encode(array($retorno)); //retorna um json com os dados do banco



	



 ?>