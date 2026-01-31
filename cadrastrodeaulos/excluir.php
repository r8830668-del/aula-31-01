<?php
include_once("conexao.php");

if ( isset($_GET['id']) && !empty($_GET['id']))

//Pegar o id vindo da URL
$id = $_GET ['id'];

//Comando sql para deletar
$sql = "DELETE FROM alunos WHERE id = $id";

if (mysqli_query($conn,$sql)) {
    header("Location:lista.php");
}
 else {
    echo"Erro ao excluir aluno";
} 
?>





