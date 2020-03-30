<?php 

	date_default_timezone_set('America/Sao_Paulo');
	require_once('connection.php'); //conexao com o banco

	if(isset($_POST['id_todos'])&&isset($_POST['description'])&&isset($_POST['completed'])) //parametros esperados &&isset($_POST['criado']) &&isset($_POST['atualizado'])
		{
			//armazena os parametros nas variaveis
			$id_todos = $_POST['id_todos'];
			$descricao = $_POST['description'];
			$completo = $_POST['completed'];
			//$criado = $_POST['criado'];
			$atualizado = date('Y-m-d');

			$sql = $pdo->prepare("UPDATE todos SET description =?, completed=?, updatedAt=? WHERE id_todos=?"); //prepara a query UPDATE criado=?, atualizado=?
			$sql->execute(array($descricao,$completo,$atualizado, $id_todos)); //executa a query $criado,$atualizado,
			//$retorno = $sql->fetchAll();

			if($sql)
			{
				echo json_encode(array('RESPOSTA' => 'SUCESSO')); //retorna um json de sucesso
			} else{
				echo json_encode(array('RESPOSTA' => 'FALHA'));
			}
		}//else{
			//echo "Erro";
			//echo json_encode(array('RESPOSTA' => 'FALHA')); //retorna um json de falha
		//}




?>