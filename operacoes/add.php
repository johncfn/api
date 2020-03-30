<?php 

	date_default_timezone_set('America/Sao_Paulo');
	require_once('connection.php'); //arquivo de con banco

	if(isset($_POST['description'])&&isset($_POST['completed'])) //parametros esperados &&isset($_POST['criado']) &&isset($_POST['atualizado'])
	//if(isset($_POST['acao']))
	{
		//armazena parametros nas variaveis
		$descricao = $_POST['description']; 
		$completo = $_POST['completed'];
		$criado = date('Y-m-d'); //armazena data atual que foi criada
		$atualizado = date('Y-m-d'); //armazena ultima atualização(momento que foi criado nesse instante)

		$sql = $pdo->prepare("INSERT INTO todos (description, completed, createdAt, updatedAt) VALUES (?,?,?,?)"); //prepara query INSERT
		$sql->execute(array($descricao,$completo,$criado,$atualizado)); //executa query com os valores recebidos

		//$retorno =  $sql->fetchAll(PDO::FETCH_ASSOC);

		if($sql)
		{
			echo json_encode(array('RESPOSTA' => 'SUCESSO')); //retorna json sucesso
		} else{
			echo json_encode(array('RESPOSTA' => 'FALHA'));
		}
	}//else{
		//echo json_encode(array('RESPOSTA' => 'FALHA')); //retorna json falha
		//echo "Erro";
	//}


?>

