<?php
// Definindo as variáveis com as informações de conexão com o banco de dados
$databaseHost = '127.0.0.1'; // Endereço do servidor de banco de dados (neste caso, o servidor local)
$databaseName = 'crudcard';  // Nome do banco de dados que será usado
$databaseUsername = 'root';  // Nome de usuário para autenticação no banco de dados (usuário padrão do MySQL no local)
$databasePassword = '';      // Senha do usuário para o banco de dados (em branco, já que o MySQL local padrão geralmente não tem senha)

// Tenta estabelecer uma conexão com o banco de dados utilizando as variáveis definidas acima
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Verifica se a conexão foi bem-sucedida
if ($mysqli === false) {
    // Se a conexão falhar, exibe uma mensagem de erro e encerra o script
    die("ERRO: Não foi possível conectar. " . mysqli_connect_error());
}
?>
