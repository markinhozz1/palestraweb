<?php
require "conexao.php";
 // var_dump($_POST);
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$curso = $_POST['curso'];

$sql = "INSERT INTO inscricao (nome,email,telefone,curso) VALUES ('$nome', '$email','$telefone','$curso')";

$resultado = mysqli_query($conexao,$sql) or die ("Falha na Inscrição".mysqli_error($conexao));

if($resultado == TRUE){
    echo "<script>
    alert('Inscrição Realizada!');
    window.location='index.php';
    </script>";
}
 ?>
