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

