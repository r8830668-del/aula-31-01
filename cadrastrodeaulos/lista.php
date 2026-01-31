<?php include_once("conexao.php");?>
<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="styleliste.css">
</head>
<body>
    <div class = "container">
     <h2>Alunos Cadastrado </h2>
      <table>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Acões</th>
        </tr>
        <?php 
        $sql = "SELECT * FROM alunos";
        $resultado = mysqli_query($conn, $sql);
        while($linha = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>". $linha['nome']."</td>";
            echo "<td>". $linha['email']."</td>";
            echo "<td><a href='excluir.php?id=" .$linha['id'] ."'class='btn-excluir'>Excluir</a></td";
            echo "</tr>";
        }
        ?>
      </table>
      <a href="index.html"class="btn-voltar"><-- cadastrar
      Novo Aluno</a>
    </div>
    
</body>
</html>