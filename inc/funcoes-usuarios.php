<?php

/*Acessando os dados da conexão ao servidor */
require "conecta.php";
function inserirUsuario($conexao, $nome, $email, $tipo, $senha)
{
    $sql =  "INSERT INTO usuarios(nome, email, tipo, senha) VALUES('$nome', '$email', '$tipo', '$senha')";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}
function lerUsuarios($conexao){
    $sql = "SELECT id, nome tipo, email FROM usuarios";
     $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao)) or die(mysqli_error($conexao));

     return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}