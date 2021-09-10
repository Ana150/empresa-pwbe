<?php

function lerArquivo($nomeArquivo){
    $arquivo = file_get_contents($nomeArquivo);

    $jsonArray = json_decode($arquivo);

    return $jsonArray;
}

    function buscarFuncionario($funcionarios, $first_name){

        $funcionariosFiltro = [];
    
        foreach($funcionarios as $funcionario){
            if(
                strpos($funcionario->first_name, $first_name) !== false
                || 
                strpos($funcionario->last_name, $first_name) !== false
                ||
                strpos($funcionario->department, $first_name) !== false
            ){
                $funcionariosFiltro[] = $funcionario;
            }
        }
    
        return $funcionariosFiltro;
    
    }

    function adicionarFuncionario($nomeArquivo, $novoFuncionario){
        $funcionarios = lerArquivo($nomeArquivo);

        $funcionarios[] = $novoFuncionario;

        $json = json_encode($funcionarios);

        file_put_contents($nomeArquivo, $json);
    }