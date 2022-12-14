<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "noname";
    
    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    if($conexao){
        #######################  Tabelas Default ############################

        #Tabela usuarios
            $query = "create table usuarios (
                id int not null auto_increment,
                tipo int not null,
                nome varchar(20) not null,
                sobrenome varchar(20) not null,
                usuario varchar(100) not null,
                senha varchar(50) not null,
                ativo char,
                primary key(id),
                unique key (usuario)
            )";
            $executar = mysqli_query($conexao, $query);
            verificaQuery($executar);    

        #Tabela usuarios_tipo
            $query = "create table usuarios_tipo (
                id int not null auto_increment,
                tipo varchar(20) not null,
                primary key(id)
            )";
            $executar = mysqli_query($conexao, $query);
            verificaQuery($executar);  

    }

    
    function verificaQuery($executar) {
        if(!$executar){
            echo 'Falha na criação da tabela';
            echo '</br>';
            exit;
        }else{
            echo 'Tabela criada com sucesso!';
            echo '</br>';
        }
    }
?>