<?php
#DADOS PARA A CONEXÃO COM O BANCO DE DADOS
$servidor = 'localhost'; #NOME DNS OU IP DE SEU SERVIDOR HTTP
$usuario = 'root'; #NOME DO USUÁRIO PARA ACESSO AO MYSQL
$senha = ''; #SENHA DE ACESSO
$banco = 'palestra'; #NOME DO BANCO DE DADOS

#EXECUTA A CONEXÃO COM O MYSQL
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die ('Não foi possível conectar: '.mysqli_error());
?>
