<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $database = "noname";
    
    $conexao = mysqli_connect($servidor, $usuario, $senha, $database);

    if($conexao){
        #######################  Inserts Default  ############################
        
        #Tabela usuarios -> Usuario Admin
            $query = "INSERT INTO noname.usuarios
            (tipo, nome, sobrenome, usuario, senha, ativo)
            VALUES(1, 'Admin', 'User', 'admin@admin', 'Adm1234@', 'T')";
            $executar = mysqli_query($conexao, $query);
            verificaQuery($executar);    

        #Tabela usuarios_tipo -> Tipo 1: Administrador
            $query = "INSERT INTO noname.usuarios_tipo
            (id, tipo)
            VALUES(2, 'Aluno')";
            $executar = mysqli_query($conexao, $query);
            verificaQuery($executar);
        #Tabela usuarios_tipo -> Tipo 2: Aluno
            $query = "INSERT INTO noname.usuarios_tipo
            (id, tipo)
            VALUES(1, 'Administrador')";
            $executar = mysqli_query($conexao, $query);
            verificaQuery($executar); 
        #Tabela usuarios_tipo -> Tipo 3: Professor
            $query = "INSERT INTO noname.usuarios_tipo
            (id, tipo)
            VALUES(3, 'Professor')";
            $executar = mysqli_query($conexao, $query);
            verificaQuery($executar);   

    }

    
    function verificaQuery($executar) {
        if(!$executar){
            echo 'Falha na inserção do dado';
            echo '</br>';
            exit;
        }else{
            echo 'Dado inserido com sucesso';
            echo '</br>';
        }
    }
?>