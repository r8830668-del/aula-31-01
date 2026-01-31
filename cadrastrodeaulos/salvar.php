<?php 
include_once("conexao.php");

//pegar os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

//Comando para inserir alunos no banco
$sql = "INSERT INTO alunos (nome,email) VALUES('$nome','$email')";

if (mysqli_query($conn,$sql)) {
    header("Location:lista.php");
    // echo "<h1>aluno Cadastrado com sucesso!</h1>";
    // echo "<a href='index.html'>Voltar</a>";
}else{
    echo "Erro ao cadastrar";
}
?>