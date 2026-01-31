<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "senai";

//criando a conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

//Testando para ver se deu certo 
if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}
?>
