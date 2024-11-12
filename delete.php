<?php
// Inclui o arquivo de conexão com o banco de dados
require_once("dbConnection.php");

// Obtém o valor do parâmetro 'id' da URL
$id = $_GET['id'];

// Executa a consulta SQL para excluir o registro da tabela 'users' com o id especificado
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id = $id");

// Redireciona o usuário de volta para a página principal (index.php) após a exclusão
header("Location:index.php");
?>
