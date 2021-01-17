<?php
    require_once('db.class.php');

    $sql = "Select usuario, email From usuarios";

    $objetoDb = new db();
    $link = $objetoDb-> conecta_mysql();

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        //add infos of the user in array $dados_usuario
        //MYSQL_NUM- numerical form
        //MYSQL_ASSOC - associative form
        //MYSQL_BOTH - hybrid arrays
        $dados_usuario = array();
        
        while($linha = mysqli_fetch_array($resultado_id, MYSQLI_NUM)){
            $dados_usuario[] = $linha;
        }

        foreach($dados_usuario as $usuario){
            var_dump($usuario);
            echo '<br/>';
        }
    }
    else
        echo 'Erro na execução da consulta, favor entrar em contato com o admin do site!';
?>