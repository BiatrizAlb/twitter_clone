<?php

class db{

    //host
    private $host = 'localhost';
    
    //usuario
    private $usuario = 'root';

    //senha
    private $senha = 'Lepidus123#';
    
    //banco de dados
    private $database = 'twitter_clone';

    public function conecta_mysql(){

        //cria a conexao
        $conexaoBancoDeDados = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
        
        //ajustar o charset de comunicacao entre a aplicacao e o banco de dados
        mysqli_set_charset($conexaoBancoDeDados, 'utf8');
        
        //verficar se houve erro de comunicação
        if(mysqli_connect_errno()){
            echo 'Erro ao tentar se conectar com BD MySl: ' .mysql_connect_error();
        }
        return $conexaoBancoDeDados;

    }
}

?>