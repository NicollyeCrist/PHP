## ProjetoA3
##Abrir HeidiSQL

CREATE DATABASE projetoa3;
USE projetoa3;
CREATE TABLE login (
   nome VARCHAR(300),
   login VARCHAR(100),
   senha VARCHAR(100),
   PRIMARY KEY (login)
   );projetoa3
   INSERT into
   login (nome, login, senha)
   values
   ('administrador', 'admin', 'aluno123');

##Abrir Visual Studio Core
#login.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <center>
        <h1>LOGIN</h1>
        <form id="login" action="logado.php" method="POST">
         Login: <input type="text" id="login" required><br>
         Senha: <input type="password" id="senha" required><br><br>
         <input type= "submit" id="entrar" value="Entrar">
         
 </form>
</center>
</body>
</html>

#conexao.php

<?php
$conexao= mysqli_connect ('localhost','root', '', 'projetoa3', '3306');
if (!$conexao){
    die ("erro de conexão");
} else {
    echo "conectado";
}
?>

#logado.php

<?php
include ('conexao.php');

$login = isset($_POST['login'])? $_POST['login']:'';
$senha = isset($_POST['senha'])? $_POST['senha']:'';

$select = "select nome, login, senha from login where login='$login' and senha='$senha'";

$execute = mysqli_query ($conexao, $select);

$dados = mysqli_fetch_row ($execute);
if ($login== $dados[1] && $senha== $dados[2]){
    session_start();
    $_SESSION['nome']= $dados[0];
   header('location: index.php');
} else {
    header('location: login.php');
}
?>
