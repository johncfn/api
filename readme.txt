Olá!
 
Esse projeto se refere a uma API REST realizando ações CRUD numa lista de tarefas.

Existe 4 arquivos que realizam as ações:
*add.php: Adiciona uma tarefa no banco de dados
*delete.php: deleta uma tarefa no banco de dados
*list.php: lista as tarefas que tem no banco de dados
*update.php: atualiza uma tarefa no banco de dados

Para realizar as operações, você precisa:

1. Realize o download do xampp na sua máquina: https://www.apachefriends.org/pt_br/index.html
	Faça o download de acordo com o seu sitema operacional e instale

2. Pegue a pasta "api" que esta no github, e coloque dentro da pasta da instalação do XAMPP chamada "htdocs"

3. Faça o download da pasta "tarefa" dentro do github e coloque a pasta dentro do local de instalação do XAMPP em "xampp/mysql/data"
	Com isso, você vai ter a base de dados criada no localhost/phpmyadmin

4. Faça o download e instalação do "POSTMAN": https://www.postman.com/
	Faça o download de acordo com o seu sitema operacional e instale

5. Após tudo instalado e as pastas nos locais, inicie o XAMPP e de um "START" no "APACHE" e "MySQL"
	As 2 operações devem ficar com os "Module" verde e funcionando.

6. Abra no navegador localhost/phpmyadmin

7. Abra o Postman:
	Vá na opção de "Create a request" -> Marque a opção Body -> form-data

8. No campo de "Enter request URL" coloque a url: http://localhost/api/operacoes/ + o arquivo que você quer realziar a requisição como explicado a baixo

9. Para realizar as ações você vai utilizar os arquivos que foram citados no começo
	9.1. Para realizar uma listagem das tarefas que estão no banco você vai utilizar a url: http://localhost/api/operacoes/list.php e clicar em "Send"
		9.1.1 Essa ação tem como esperado o retorno de um Json com os dados que estão no banco sendo o id_todos, description, completed(0-para não completo e 1-para completo), createdAt e updatedAt;
	9.2. Para adicionar uma tarefa no banco, você vai utilizar a url: http://localhost/api/operacoes/add.php, colocar a baixo os parametros para "description" e "completed" e clicar em "Send"
		9.2.1. Essa ação tem como esperado o retorno de um Json com a mensagem de {"RESPOSTA":"SUCESSO"} informando que realizou a adição da nova tarefa dentro do banco
	9.3. Para deletar uma tarefa no banco, você vai utilizar a url: http://localhost/api/operacoes/delete.php, colocando os parametros para "id_todos" e clicar em send
		9.3.1. Essa acão tem como esperado o retorno de um Json com a mesnagem de {"RESPOSTA":"SUCESSO"} informando que removeu uma tarefa pelo id no banco de dados
	9.4. Para atualizar uma tarefa no banco, você vai utilziar a url: http://localhost/api/operacoes/update.php, colocando os parametros para "id_todos", "description" e "completed" e clicar em "Send"
		9.4.1. Essa ação tem como esperado o retorno de um Json com a mesnagem de {"RESPOSTA":"SUCESSO"} informando que atualizou uma tarefa no banco de dados.
	9.5. O arquivo "connection.php" tem como finalidade realizar a conexão com o banco de dados. Caso precise alterar o host, nome da base ou senha, é preciso somente alterar a variável no começo do código