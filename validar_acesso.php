<?php

    session_start();

    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "Select usuario, email From usuarios Where usuario = '$usuario' and senha = '$senha'";

    $objetoDb = new db();
    $link = $objetoDb-> conecta_mysql();

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        //adiciona as informações do usuario nesse arry $dados_usuario
        $dados_usuario = mysqli_fetch_array($resultado_id);
        if(isset($dados_usuario['usuario'])){
           $_SESSION['usuario'] = $dados_usuario['usuario'];
           $_SESSION['email'] = $dados_usuario['email'];
           header('Location: home.php');
        }
        else 
            header('Location: index.php?erro=1');
    }
    else
        echo 'Erro na execução da consulta, favor entrar em contato com o admin do site!';

    //update true/false
    //insert true/false
    //select false/resource (referencia para uma informação externa do PHP)
    //delete true/false
?>