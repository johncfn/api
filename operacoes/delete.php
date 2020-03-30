<?php 

	require_once('connection.php'); //arquivo de con ao banco

	if(isset($_POST['id_todos'])) //parametro esperado 
	{
		$id_todos = $_POST['id_todos']; //armazena parametro na variavel
		
		$sql = $pdo->prepare("DELETE FROM todos WHERE id_todos=?"); //prepara a query DELETE
		$sql->execute(array($id_todos)); //executa a query
		//$retorno = $sql->fetchAll();

		if($sql)
		{
			echo json_encode(array('RESPOSTA' => 'SUCESSO')); //retorna json com sucesso
		} else{
			echo json_encode(array('RESPOSTA' => 'FALHA'));
		}
	} //else{
		//echo json_encode(array('RESPOSTA' => 'FALHA')); //retorna json com falha
		//echo "Erro"; 
	//}


?>